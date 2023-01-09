<?php
require_once '../conection.php';
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
            <h1 class="mt-4">Information</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item active">Employee</li>
            </ol>
            <div class="mt-2">
              <?php if (!empty($_GET["success"])): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success! </strong><?php echo $_GET["success"]; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>                                
                            <?php endif; ?>
              </div>
            <div class="card mb-4">
              <div class="card-header">
              <i class="fas fa-table me-1"></i>
                <a href="create.php" class="btn btn-success"><i class=" fas fa-plus me-1"></i>Add Employee</a>
                
              </div>

              <div class="card-body">
                <table id="datatablesSimple">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>No Tlp</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    $database = db_connect ();

                    $no = 1;
                    $tampil = mysqli_query($database, 'SELECT * FROM employee order by emp_id desc');
                    while($data = mysqli_fetch_assoc($tampil)) :   
                  ?>
                  
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $data['emp_id'];?></td>
                        <td><?php echo $data['emp_name'];?></td>
                        <td><?php echo $data['emp_address'];?></td>
                        <td><?php echo $data['no_tlp']; ?></td>
                      <td>
                        <a href="show.php?id=<?php echo $data['emp_id']; ?>"><i class="fa fa-eye me-3"></i></a>
                        <a href="update.php?id=<?php echo $data['emp_id']; ?>" class='btn btn-primary'>Update</a>
                        <a href="delete.php?id=<?php echo $data['emp_id']; ?>" class='btn btn-danger'>Delete</a>

                      </td>
                    </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
                <!-- mysqli_real_escape_string('$_post['nama field input']') -->
                <!-- trim() buat hapus spasi sebelah kiri -->
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
db_disconnect($database);
?>
