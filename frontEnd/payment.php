<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Menu | Payment</title>
    <link rel="stylesheet" href="index.css" />
    <link rel="shortcut icon" href="IMG/Brown Simple Restaurant Logo.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Hepta+Slab&family=Kdam+Thmor+Pro&family=PT+Sans&family=Silkscreen&family=Ubuntu+Mono&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <style>
      @media all and(max-width: 576px) {
        .card {
          width: 10rem;
        }
      }
    </style>
    <!-- <script>
      function validateForm() {
        let x = document.forms['myForm']['fname'].value;
        if (x == '') {
          alert('form must be filled out');
          return false;
        }
      }
    </script> -->

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="module">
      import swal from 'sweetalert';
    </script>

    <script>
      function tombol() {
        swal({
          title: 'Your Transaction Is Success',
          text: 'Please Wait For Your Order :) ',
          icon: 'success',
          button: true,
        }).then(function () {
          window.location = 'index.html';
        });
      }
    </script>
  </head>

  <body>
    <!--Navbar-->
    <section>
      <nav class="navbar navbar-expand-lg-sm" style="border-bottom: 2px solid #f48901; font-family: 'Hepta Slab', serif">
        <div class="container-fluid">
          <a class="navbar-brand ms-5 fs-3" href="index.html"> <span style="color: #f48901" class="fs-2"> FS</span> Resto</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse fs-5 ms-5" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-5">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about_us.html">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="menu.html" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Menu </a>
                <ul class="dropdown-menu" style="background-color: white">
                  <li><a class="dropdown-item" href="food.html">Food</a></li>
                  <li><a class="dropdown-item" href="drink.html">Drink</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="ice_cream.html">Ice cream</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="promo.html">Promo</a>
              </li>
            </ul>
          </div>

          <!--
      <div class="payment">
        <a href="payment.html"><img src="cart.png" alt="Payment" width="60px";></a>
      </div>
          -->
        </div>
      </nav>
    </section>
    <!--Navbar End-->

    <!--Content-->
    <br /><br /><br />
    <div style="margin: 20px auto; width: 30rem; text-align: center">
      <h1>anda memesan :</h1>
    </div>

    <div class="card" style="width: 30rem; margin: 20px auto">
      <img src="IMG/ayamGeprek.jpg" alt="Ayam Geprek" />
      <div class="card-body">
        <center>
          <h3 style="color: #f48901">Ayam geprek</h3>
          <h5>Rp25.000</h5>
        </center>

        <form class="mt-5" name="myForm">
          <h5>Jumlah makanan</h5>
          <!-- <input type="number" name="Jumlah" style="width: 5rem; border: none; border-bottom: 2px solid #f48901; outline: none" onkeyup="mult(this.value)" /> <br /> -->
          <input type="number" style="width: 5rem; border: none; border-bottom: 2px solid #f48901; outline: none" onclick="mult()" onkeyup="mult()" required id="harga" /> <br />
          <h5 class="mt-5">Level kepedasan</h5>

          <input type="radio" name="pesanan" value="pedesMampus" required="" class="mt-5" />
          <label for="pedesMampus">Pedes Mampus</label>
          <input type="radio" class="ms-4" name="pesanan" value="pedesgila" required="" />
          <label for="pedesgila">Pedes Gila</label>

          <!-- efek jquery -->
          <h5 class="mt-5">Pilih metode pemesanan</h5>
          <input type="radio" name="pemesanan" value="ditempat" class="detail" />
          <label for="">Makan ditempat</label>
          <input type="radio" name="pemesanan" value="delivery" class="detail ms-5" />
          <label for="">Delivery</label>

          <div id="slideUpDown">
            <!-- <label for="" class="me-5">nama</label> -->
            <input type="text" class="mt-4" style="border: none; border-bottom: 2px solid #f48901; outline: none; width: 260px" placeholder="Nama anda" /> <br />
            <!-- <label for="" class="me-5">alamat</label> -->
            <input type="text" class="mt-4" style="border: none; border-bottom: 2px solid #f48901; outline: none; width: 260px" placeholder="Alamat anda" /> <br />
            <!-- <label for="" class="me-5">no.handphone</label> -->
            <input type="number" class="mt-4" style="border: none; border-bottom: 2px solid #f48901; outline: none; width: 260px" placeholder="No.Hadphone" />
          </div>
          <!-- akhir efek jquery -->
          <h5 class="mt-5">Total</h5>
          <h2 id="hasilTotal"></h2>
          <button type="submit" class="btn btn-warning mt-4" onclick="tombol()">Pesan</button>
          <button type="button" class="btn btn-danger mt-4 ms-5"><a href="food.html" style="color: white; text-decoration: none">Batal</a></button>
        </form>
      </div>
    </div>
    <script src="jquery-3.6.1.js"></script>
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

    <!-- perhitungan otomatis -->
    <script>
      function mult() {
        let makanan = document.getElementById('harga');
        let harga = Number(makanan.value) * 25000;
        document.getElementById('hasilTotal').innerText = 'Rp. ' + harga;
      }
    </script>

    <!-- akhir hitung otomatis -->

    <!-- <div class="card text-center">
      <div class="card-header" style="font-size:xx-large ; font-family: 'Franklin Gothic Medium';">
        DO YOU WANT TO ORDER?
      </div>
    
      <div class="card-body">
        <h5 class="card-title">Nama makanan</h5>
        <p class="card-text">isi nya</p>
        <center><input type="submit" value="PURCHASE" style="background-color: #ff7300" id="submit"></center>
      </div>
      <div class="card-footer text-muted">
        2 days ago
      </div>
    </div> -->
    <!--Content End-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
