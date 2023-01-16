<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FS Resto | Drink</title>
    <link rel="stylesheet" href="CSS/index.css" />
    <link rel="shortcut icon" href="IMG/Brown Simple Restaurant Logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Hepta+Slab&family=Kdam+Thmor+Pro&family=PT+Sans&family=Silkscreen&family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  </head>
  <body>
    <!--Navbar-->
    <section>
      <nav class="navbar navbar-expand-lg " style="border-bottom: 2px solid #f48901; font-family: 'Hepta Slab', serif;">
        <div class="container-fluid">
          <a class="navbar-brand ms-5 fs-3" href="index.php"> <span style="color: #f48901" class="fs-2"> FS</span> Resto</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse fs-5 ms-5" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-5">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about_us.php">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="menu.php" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Menu </a>
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
            </ul>
          </div>
          
      <!-- <div class="payment">
        <a href="payment.html"><img src="cart.png" alt="Payment" width="60px";></a>
      </div> -->

        </div>
      </nav>
    </section>
<!--Navbar End-->

    <!--Content-->

    <center>
      <h1 class="mt-5" style="font-family: 'Hepta Slab', serif"><span style="color: #f48901">FS</span> Resto | Drink</h1>
    <br /><br /><br />

    <div class="card ms-3" style="border: 2px solid #f48901">
      <div class="row m-5 mb-4">
        <div class="col-sm mb-5">
          <div class="card" style="width: 18rem">
            <img src="IMG/Es_Teh.jpg" class="card-img-top" alt="es teh manis" />
            <div class="card-body">
              <h5 class="card-title" style="color: #f48901">Es teh manis</h5>
              <p class="card-text">Rp 5.000</p>
              <a href="paymentDrink.php" class="btn btn-warning">Pesan</a>
            </div>
          </div>
        </div>
        <div class="col-sm mb-5">
          <div class="card" style="width: 18rem">
            <img src="IMG/jusMangga.jpg" class="card-img-top" alt="jus mangga" />
            <div class="card-body">
              <h5 class="card-title" style="color: #f48901">Jus mangga</h5>
              <p class="card-text">Rp 15.000</p>
              <a href="paymentDrink2.html" class="btn btn-warning">Pesan</a>
            </div>
          </div>
        </div>
        <div class="col-sm mb-5">
          <div class="card" style="width: 18rem">
            <img src="IMG/KopiLatte.jpg" class="card-img-top" alt="soto" />
            <div class="card-body">
              <h5 class="card-title" style="color: #f48901">Kopi Latte</h5>
              <p class="card-text">Rp 20.000</p>
              <a href="paymentDrink3.html" class="btn btn-warning">Pesan</a>
            </div>
          </div>
        </div>

        <div class="col-sm mb-5">
          <div class="card" style="width: 18rem">
            <img src="IMG/aqua.jpg" class="card-img-top" alt="Aqua" />
            <div class="card-body">
              <h5 class="card-title" style="color: #f48901">Aqua 650ml</h5>
              <p class="card-text">Rp 3.000</p>
              <a href="paymentDrink4.html" class="btn btn-warning">Pesan</a>
            </div>
          </div>
        </div>

        <div class="col-sm mb-5">
          <div class="card" style="width: 18rem">
            <img src="IMG/susu.jpg" class="card-img-top" alt="susu" />
            <div class="card-body">
              <h5 class="card-title" style="color: #f48901">Susu</h5>
              <p class="card-text">Rp 5.000</p>
              <a href="paymentDrink5.html" class="btn btn-warning">Pesan</a>
            </div>
          </div>
        </div>

        <div class="col-sm mb-5">
          <div class="card" style="width: 18rem">
            <img src="IMG/milshake.png" class="card-img-top" alt="milshake" />
            <div class="card-body">
              <h5 class="card-title" style="color: #f48901">Milshake</h5>
              <p class="card-text">Rp 22.000</p>
              <a href="paymentDrink6.html" class="btn btn-warning">Pesan</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br /><br />

    <!--Content End-->

    <section class="aplication mt-5">
      <div class="card">
        <div class="row">
          <div class="col-sm">
            <a href="https://play.google.com/store/"><img src="PlayStore.png" alt="PlayStore" style="width: 250px" class="ms-4 mt-5" /></a>
            <a href="https://www.apple.com/app-store/"><img src="appStore.png" alt="appStore" style="width: 200px" class="ms-5 mt-5" /></a>
          </div>
          <div class="col-sm">
            <p class="mt-5 ms-4 fs-2" style="color: #ffab3d;">More Efficient and Practical by Downloading the FS RESTO application on the Google PlayStore and AppStore. Download Now!</p>
          </div>
        </div>
      </div>
    </section>  

    <footer class="mt-5 pb-4" style="background-color: #f48901">
      <div class="row">
        <div class="col-sm mt-4 ms-1 text-center">
          <h3 style="color: white">FS Resto</h3>
          <ul class="list-unstyled">
            <li><a href="about_us.html" class="text-decoration-none" style="color: white">About us</a></li>
            <li><a href="contact_us.html" class="text-decoration-none" style="color: white">Contact us</a></li>
          </ul>
        </div>
        <div class="col-sm mt-4 text-center">
          <h3 class="mb-4" style="color: white">See our social media</h3>
          <a href="https://www.instagram.com"> <img src="IMG/IG.png" alt="instagram" style="height: 50px" /> </a>
          <a href="https://www.facebook.com"> <img src="IMG/fb.png" alt="facebook" style="height: 50px" /> </a>
          <a href="https://www.youtube.com"> <img src="IMG/YT.png" alt="youtube" style="height: 50px" /> </a>
        </div>
        <div class="col-sm me-4 mt-4">
          <h3 class="text-center" style="color: white">Give us your critism and suggestion</h3>
          <form>
            <div class="mb-3">
              <label class="form-label" style="color: white">critism</label>
              <input type="text" class="form-control" id="exampleInputEmail1" />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label" style="color: white">suggestion</label>
              <input type="text" class="form-control" id="exampleInputPassword1" />
            </div>
            <button type="submit" class="btn btn-warning">Kirim</button>
          </form>
        </div>
      </div>
    </footer>

    <section class="author mt-5" style="background-color: grey; padding: 12px 0">
      <div class="author text-center">
        <h5><span style="color: white" class="fs-2">FS</span> Resto</h5>
        <p style="color: white">Fahmi A.N</p>
        <p style="color: white">M.Syaifullah</p>
        <h5 style="color: white">©2022 FS_RESTO_Project1Semester3Quarter1</h5>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>