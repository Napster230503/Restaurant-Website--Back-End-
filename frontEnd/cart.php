<?php
require_once 'conection.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>FS Resto</title>
    <link rel="stylesheet" href="CSS/index.css" />
    <link rel="shortcut icon" href="IMG/Brown Simple Restaurant Logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Hepta+Slab&family=Kdam+Thmor+Pro&family=PT+Sans&family=Silkscreen&family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  </head>
  <body>

    <!--Navbar-->
    <section>
      <nav class="navbar navbar-expand-lg" style="border-bottom: 2px solid #f48901; font-family: 'Hepta Slab', serif;">
        <div class="container-fluid">
          <a class="navbar-brand ms-5 fs-3" href="index.php"> <span style="color: #f48901" class="fs-2"> FS</span> Resto</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse fs-5 ms-5" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about_us.php">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Menu </a>
                <ul class="dropdown-menu" style="background-color: white">
                  <li><a class="dropdown-item" href="food.php">Food</a></li>
                  <li><a class="dropdown-item" href="drink.php">Drink</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="ice_cream.php">Ice cream</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="promo.php">Promo</a>
              </li>
              <li class="nav-item ms-5">
                <a href="cart.php"><i class="fas fa-shopping-cart fs-2 "></i></a>
              </li>
            </ul>
          </div>
          </div>
      <!-- <div class="payment">
        <a href="payment.html"><img src="cart.png" alt="Payment" width="60px";></a>
      </div> -->

        </div>
      </nav>
    </section>
<!--Navbar End-->               


<!-- efek jquery -->
          <Form method="post" action="">
          <h5 class="mt-5">Pilih metode pemesanan</h5>
          <input type="radio" name="pemesanan" class="detail" value="ditempat" />
          <label for="">makan ditempat</label>
          <input type="radio" name="pemesanan" class="detail ms-5" value="delivery" />
          <label for="">Delivery</label>

          <input type="button" value="Check Out" class="btn btn-warning mt-4">
          </Form>
          <!-- akhir efek jquery -->

          <div id="slideUpDown">
            <!-- <label for="" class="me-5">nama</label> -->
            <input type="text" class="mt-4" style="border: none; border-bottom: 2px solid #f48901; outline: none; width: 260px" placeholder="Nama anda" /> <br />
            <!-- <label for="" class="me-5">alamat</label> -->
            <input type="text" class="mt-4" style="border: none; border-bottom: 2px solid #f48901; outline: none; width: 260px" placeholder="Alamat" /> <br />
            <!-- <label for="" class="me-5">no.handphone</label> -->
            <input type="number" class="mt-4" style="border: none; border-bottom: 2px solid #f48901; outline: none; width: 260px" placeholder="No.Handphone" />
          </div>

          <script src="JavaScript/jquery-3.6.1.js"></script>
    <!-- jika dibawa pulang maka form akan muncul -->
    <script>
      $(document).ready(function () {
        $('#slideUpDown').css('display', 'none'); //Menghilangkan form-input ketika pertama kali dijalankan
        $('.detail').click(function () {
          //Memberikan even ketika class detail di klik (class detail ialah class radio button)
          if ($("input[name='pemesanan']:checked").val() == 'delivery') {
            //Jika radio button "berbeda" dipilih maka tampilkan form-inputan
            $('#slideUpDown').slideDown('fast'); //Efek Slide Down (Menampilkan Form Input)
          } else {
            $('#slideUpDown').slideUp('fast'); //Efek Slide Up (Menghilangkan Form Input)
          }
        });
      });
    </script>




    <!--NAVBAR END-->

    <footer class="author" style="background-color: grey; padding: 12px 0; margin-top:500px;">
      <div class="author text-center">
        <h5><span style="color: white" class="fs-2">FS</span> Resto</h5>
        <p style="color: white">Fahmi A.N</p>
        <p style="color: white">M.Syaifullah</p>
        <h5 style="color: white">©<?php echo date('Y')?> FS_RESTO_Project1Semester3Quarter1</h5>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
