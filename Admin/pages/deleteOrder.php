<?php
require_once "../conection.php";
$con = db_connect();
$kode = mysqli_real_escape_string($con, $_GET["order_id"]);
$sql = "SELECT * FROM order_detail WHERE order_id = '$kode'";
// $sql3 = "SELECT * FROM order_detail JOIN orders ON order_detail.order_id = orders.order_id JOIN menu ON order_detail.menu_id = menu.menu_id";
$result = mysqli_query($con, $sql);

while($data = mysqli_fetch_assoc($result)) {
    $tanggalPesan = date_create($data['order_date']);
    $jumlah = $data['Total_price'];
}

session_start();
if(!isset($_SESSION['masuk'])){
  header("Location: login.php");
  exit;
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
                        <h1 class="mt-4">Orders</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Information</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                            Detail Data<br/>
                            <?php if (!empty($_GET["error"])): ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Failed! </strong><?php echo $_GET["error"]; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>    
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <p><strong>Order code : </strong> <?php echo $kode;?></p>
                                <p><strong>Date : </strong> <?php echo $tanggalPesan;?></p>
                            </div>
                        </div>
                    </div>
                </main>
           
       <?=
          include 'partIndex/footer.php';
       ?>
      </div>
    </div>
    <?=
      include_once 'partIndex/script.php';
    ?>
  </body>
</html>
<?php
    db_disconnect($con);
?>