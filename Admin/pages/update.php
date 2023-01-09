<?php
require_once "../conection.php";
$con = db_connect();
$code = mysqli_real_escape_string($con, $_GET["id"]);
$sql = "SELECT * FROM employee WHERE EmpCode = '$code'";
$result = mysqli_query($con, $sql);
while($data = mysqli_fetch_assoc($result)) {
    $name = $data['EmpName'];
    $address = $data['EmpAddress'];
    $zipcode = $data['EmpZipCode'];
    $dob = date_create($data['EmpDOB']);
}
?>
<!DOCTYPE html>
<html lang="en">
    <?php include('../includes/head.php');?>
    <body class="sb-nav-fixed">
        <?php include('../includes/navigasi.php');?>
        <div id="layoutSidenav">
           <?php include('../includes/menu.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Employee</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Information</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                            Update Data<br/>
                            <?php if (!empty($_GET["error"])): ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Failed! </strong><?php echo $_GET["error"]; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>    
                            <?php endif; ?>
                        </div>
                    <div class="card-body">
                    <form id="frmemp" method="post" action="proses_update.php">
                <fieldset>
                            <div class="mb-3 row">
                                <label for="code" class="col-sm-2 col-form-label">Employee Code</label>
                                <div class="col-sm-10">
                                  <input value="<?php echo $code; ?>" type="text" class="form-control"  id="code" name="code" placeholder="..." required="true" readonly>
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label for="name" class="col-sm-2 col-form-label">Empoyee Name</label>
                                <div class="col-sm-10">
                                  <input value="<?php echo $name; ?>"type="text" class="form-control"  id="name" name="name" placeholder="..." required="true">
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label for="name" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                  <textarea class="form-control" id="address" name="address" placeholder="..." required="true"><?php echo $address; ?></textarea>
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label for="price" class="col-sm-2 col-form-label">Zip Code</label>
                                <div class="col-sm-10">
                                  <input value="<?php echo $zipcode; ?>"type="number" class="form-control"  id="zipcode" name="zipcode" placeholder="0" required="true">
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label for="stock" class="col-sm-2 col-form-label">Date of Birth</label>
                                <div class="col-sm-10">
                                  <input value="<?php echo $dob->format('Y-m-d'); ?>" type="date" class="form-control"  id="dob" name="dob" placeholder="0" required="true">
                                </div>
                              </div>
                              <input type="submit" value="Update" class="btn btn-primary"/>
                    </fieldset>
                    </form>
                    </div>
                    </div>
                </main>
                <?php include('../includes/footer.php');?>
            </div>
        </div>
        <?php include('../includes/scripts.php');?>
    </body>
</html>
<?php
    db_disconnect($con);
?>