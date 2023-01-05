<?php
include_once '../conection.php';
?>

<?php
  include_once 'partIndex/header.php';
?>
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
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item active">Employee</li>
            </ol>
            <div class="card mb-4">
              <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data FS RESTO
              </div>
              <div class="card-body">
                <table id="datatablesSimple">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>ID</th>
                      <th>Name</th>
                      <th>address</th>
                      <th>No.Telp</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <?php
                    $database = db_connect ();

                    $no = 1;
                    $tampil = mysqli_query($database, 'SELECT * FROM employee order by emp_id desc');
                    while($data = mysqli_fetch_assoc($tampil)) :   
                  ?>
                  <tbody>
                    <tr>
                      <td><?=$no++?></td>
                      <td><?=$data['emp_id']?></td>
                      <td><?=$data['emp_name']?></td>
                      <td><?=$data['emp_address']?></td>
                      <td><?=$data['no_tlp']?></td>
                      <td>
                        <a href="update.php" class='btn btn-primary'>Edit</a>
                        <a href="delete.php" class='btn btn-danger'>Hapus</a>
                       <a href="show.php"><i class='fa fa-eye'></i></a>
                      </td>
                    </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
                <!-- mysql_real_escape_string('$_post['nama field input']') -->
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
