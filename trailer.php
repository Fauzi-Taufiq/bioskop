<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MoviTix - Trailer</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet" />

    <!-- css -->
    <link rel="stylesheet" href="style.css" />

    <style>
        .trailer-film {
            background-color: #191919;
        }
    </style>
    
    <script type="text/javascript" src="script.js"></script>

    <!-- AOS (animate on scroll) -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  </head>
  <body>

    <!-- Navbar -->
    <?php
    include "navbar.php";
    ?>
    <!-- akhir navbar -->

    <!-- trailer -->
    <section class="trailer-film text-light py-5">
        <div class="container">
          <div class="row mb-3">
            <div class="col">
              <h2>Trailer</h2>
            </div>
          </div>
          <div class="row">
            <?php
            include "koneksi.php";

            $data = mysqli_query($connection, "select * from trailer");

            while ($show = mysqli_fetch_array($data)) {
              
            ?>
            <div class="col-md-4">
              <iframe width="100%" height="250" class="rounded-3" src="<?php echo $show['link'] ?>"></iframe>
            </div>
            <?php } ?>
        </div>
      </section>
      <!-- trailer akhir -->

    <!-- Footer -->
    <footer class="py-5">
      <div class="container text-light">
        <div class="row d-flex justify-content-between">
          <div class="col-md-3 mb-3">
            <img src="logo-movitix-fp.png" width="100%" alt="...">
            <p>Aplikasi Pemesanan Tiket Bioskop Terbaik di Indonesia! Yuk mari kita pesan di Aplikasi kami</p>
          </div>

          <div class="col-md-2 mb-3">
            <ul class="nav flex-column mt-4">
              <li class="mb-3">
                <a href="#" class="p-0">Sedang Tayang</a>
              </li>
              <li class="mb-3">
                <a href="#" class="p-0">Trailer Film</a>
              </li>
              <li class="mb-3">
                <a href="#" class="p-0">Jadwal Film</a>
              </li>
            </ul>
          </div>

          <div class="col-md-3 mb-3">
            <ul class="nav flex-column mt-4">
              <li class="mb-3 ">
                <a href="#" class="p-0 text-body-dark">Contact Us</a>
              </li>
              <li class="mb-3">
                <a href="#" class="p-0 text-body-light">Privacy Policy</a>
              </li>
              <li class="mb-3">
                <a href="#" class="p-0 text-body-light">Terms & Conditions</a>
              </li>
            </ul>
          </div>

          <div class="col-md-2 mb-3 mt-4">
            <h6 class="mb-3">MoviTix Support</h6>
            <h6 class="mb-3">E-Mail: help@movitix.id</h6>

            <h6>FOLLOW US</h6>
            <ul class="list-unstyled d-flex">
              <li class="">
                <a class=" text-light" href="#">
                  <i class="bi bi-twitter-x"></i>
                </a>
              </li>
              <li class="ms-3">
                <a class=" text-light" href="#">
                  <i class="bi bi-instagram"></i>
                </a>
              </li>
              <li class="ms-3">
                <a class=" text-light" href="#">
                  <i class="bi bi-facebook"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>


        <div class="d-flex flex-column flex-sm-row justify-content-between pt-4 border-top">
          <p>© 2024 MoviTix, Inc. All rights reserved.</p>
          <ul class="list-unstyled d-flex">
            <li class="ms-3">
              <a class=" text-light" href="#">
                <i class="bi bi-twitter-x"></i>
              </a>
            </li>
            <li class="ms-3">
              <a class=" text-light" href="#">
                <i class="bi bi-instagram"></i>
              </a>
            </li>
            <li class="ms-3">
              <a class=" text-light" href="#">
                <i class="bi bi-facebook"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
    <!-- akhir footer -->


    <!-- Modal Login -->
    <?php include "modallogin.php" ?>
    <!-- akhir modal login -->

    <!-- Modal Sign Up -->
    <?php include "modalsignup.php" ?>
    <!-- modal sign up akhir -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
