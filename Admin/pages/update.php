<?php
require_once "../conection.php";
$con = db_connect();
$id = mysqli_real_escape_string($con, $_GET["emp_id"]);
$sql = "SELECT * FROM employee WHERE emp_id = '$id'";
$result = mysqli_query($con, $sql);
while($data = mysqli_fetch_assoc($result)) {

    $name = $data['emp_name'];
    $address = $data['emp_address'];
    $tlp = $data['no_tlp'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - FS Resto</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../../resource/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  </head>
    <body class="sb-nav-fixed">
        <?php include('../pages/sideNavbar.php');?>
        <div id="layoutSidenav">
           <?php include('../pages/partIndex/navbar.php');?>
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
                                <label for="code" class="col-sm-2 col-form-label">Employee ID</label>
                                <div class="col-sm-10">
                                  <input value="<?php echo $id; ?>" type="text" class="form-control"  id="code" name="code" placeholder="..." required="true" readonly>
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
                                <label for="price" class="col-sm-2 col-form-label">No Tlp</label>
                                <div class="col-sm-10">
                                  <input value="<?php echo $tlp; ?>"type="number" class="form-control"  id="no_tlp" name="no_tlp" placeholder="+62" required="true">
                                </div>
                              </div>
                              <input type="submit" value="Update" class="btn btn-primary"/>
                    </fieldset>
                    </form>
                    </div>
                    </div>
                </main>
                <?php include('../pages/partIndex/footer.php');?>
            </div>
        </div>
        <?php include('../pages/partIndex/script.php');?>
    </body>
</html>
<?php
    db_disconnect($con);
?>