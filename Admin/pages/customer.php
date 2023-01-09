<?php
include_once '../conection.php';
$con = db_connect();
$sql = "SELECT * FROM employee";
$result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - CUST (FS Resto)</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../../resource/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  </head>

  <body class="sb-nav-fixed">
   <?=
      include 'partIndex/navbar.php';
   ?>
    <div id="layoutSidenav">
      <div id="layoutSidenav_nav">
       <?=
        include 'sideNavbar.php';
       ?>
      </div>
      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Information</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item active">Customer</li>
            </ol>
            <div class="card mb-4">
              <div class="card-header">
                <i class="fas fa-table me-1"></i>
                <a href="create_cust.php" class="btn btn-success"><i class=" fas fa-plus me-1"></i>Add Customer</a>
              </div>
              <div class="card-body">
                <table id="datatablesSimple">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Mail</th>
                      <th>No Telp</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    $database = db_connect ();

                    $no = 1;
                    $tampil = mysqli_query($database, 'SELECT * FROM customer order by cust_id desc');
                    while($data = mysqli_fetch_assoc($tampil)) :   
                  ?>
                  
                    <tr>
                    <td><?php echo $no++;?></td>
                        <td><?php echo $data['cust_id'];?></td>
                        <td><?php echo $data['cust_name'];?></td>
                        <td><?php echo $data['cust_address'];?></td>
                        <td><?php echo $data['cust_mail']; ?></td>
                        <td><?php echo $data['no_tlp']; ?></td>
                      <td>
                      <a href="show_cust.php?id=<?php echo $data['cust_id']; ?>"><i class="fa fa-eye me-3"></i></a>
                        <a href="update_cust.php" class='btn btn-primary'>Change</a>
                        <a href="delete_cust.php" class='btn btn-danger'>Delete</a>
                      </td>

                    </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </main>
       <?=
          include 'partIndex/footer.php';
       ?>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../../resource/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../../resource/assets/demo/chart-area-demo.js"></script>
    <script src="../../resource/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="../../resource/js/datatables-simple-demo.js"></script>
  </body>
</html>
