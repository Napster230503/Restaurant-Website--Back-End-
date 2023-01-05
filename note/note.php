<?php
include_once('assets/config/database.php');
$con = db_connect();
$sql = "SELECT * FROM employee";
$result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
    <?php include('part/Header.php');?>
    <body class="sb-nav-fixed">
        <?php include('part/Navbar.php');?>
        <div id="layoutSidenav">
           <?php include('part/Sidebar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Employee</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Information</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Employee Code</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Jobdesk</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                        while($data = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td><?php echo $data['employee_id'];?></td>
                                                <td><?php echo $data['employee_name'];?></td>
                                                <td><?php echo $data['employee_address'];?></td>
                                                <td><?php echo $data['Jobdesk']; ?></td>
                                                <td>
                                                    <a href="show.php"><i class="fas fa-eye"></i></a>
                                                    <a href="update.php"><i class="fas fa-edit"></i></a>  
                                                    <a href="delete.php"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include('part/Footer.php');?>
            </div>
        </div>
        <?php include('part/script.php');?>
    </body>
</html>
<?php
db_disconnect($con);
?>