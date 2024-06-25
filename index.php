<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MoviTix - Beranda</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet" />

    <!-- css -->
    <link rel="stylesheet" href="style.css" />
    <script type="text/javascript" src="script.js"></script>

    <!-- AOS (animate on scroll) -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  </head>
  <body>

    <!-- Navbar -->
    <header class="p-3 sticky-top transparent shadow">
      <div class="container-fluid">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="#" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
            <img src="logo-movitix-fp.png" width="130" alt="Logo" />
          </a>

          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li>
              <a href="index.php" class="nav-link px-2 link-light">Beranda</a>
            </li>
            <li>
              <a href="jadwal.php" class="nav-link px-2 link-light">Jadwal Film</a>
            </li>
            <li>
              <a href="about.php" class="nav-link px-2 link-light">About Us</a>
            </li>
            <li>
              <a href="contact.php" class="nav-link px-2 link-light">Contact Us</a>
            </li>
            <li>
              <a href="news.php" class="nav-link px-2 link-light">News</a>             
            </li>
            <li>
              <a href="trailer.php" class="nav-link px-2 link-light">Trailers</a>             
            </li>
          </ul>

          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="search" class="form-control" placeholder="Cari film..." aria-label="Search" />
          </form>

          <button type="button" class="btn-custom-primary me-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Login
          </button>

          <button type="button" class="btn-custom-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
            Sign Up
          </button>
        </div>
      </div>
    </header>
    <!-- akhir navbar -->

    <!-- carousel (slide) -->
    <section class="slide-carousel">
      <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="5000">
            <img class="bd-placeholder-img" width="100%" height="100%" src="img/1.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
              <rect width="100%" height="100%" fill="var(--bs-secondary-color)">
            <div class="container">
              <div class="carousel-caption text-start">
                <h3 class="text-light" style="text-shadow: 2px 2px rgb(46, 46, 46);"><strong>“See I’m an actor cause it’s the best way I know how to express myself.”</strong></h3> 
                <p class="text-light lead" style="text-shadow: 2px 2px rgb(46, 46, 46);">- James Dean</p>
              </div>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img class="bd-placeholder-img" width="100%" height="100%" src="img/2.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="var(--bs-secondary-color)">
            <div class="container">
              <div class="carousel-caption">
                <h3 class="text-light" style="text-shadow: 2px 2px rgb(46, 46, 46);"><strong>“The actor is an athlete of the heart.”</strong></h3> 
                <p class="text-light lead" style="text-shadow: 2px 2px rgb(46, 46, 46);">- Antonin Artaud</p>
              </div>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img class="bd-placeholder-img w-100" width="100%" height="100%" src="img/3.jpg" aria-hidden="true" focusable="false">
            <rect width="100%" height="100%" fill="var(--bs-secondary-color)">
            <div class="container">
              <div class="carousel-caption text-end">
                <h3 class="text-light" style="text-shadow: 2px 2px rgb(46, 46, 46);"><strong>“To be an actor you have to be a child.”</strong></h3> 
                <p class="text-light lead" style="text-shadow: 2px 2px rgb(46, 46, 46);">- Paul Newman</p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <!-- akhir carousel -->

    <!-- now playing (sedang tayang) -->
    <section class="now-playing text-light py-5">
      <div class="container">
        <div class="row mb-3">
          <div class="col">
            <h2>Sedang Tayang</h2>
          </div>
        </div>
        <div class="row">
          <?php

          include "koneksi.php";

          $film = mysqli_query($connection, "SELECT * FROM film");

          while ($show = mysqli_fetch_array($film)) {

          ?>
          <div class="col-md-2 col-sm-6 mb-2" data-aos="flip-left">
            <a href="detailfilm.php?id_film=<?php echo $show['id_film']; ?>">
              <img src="admin/uploads/<?php echo $show['gambar']; ?>" class="mb-2" alt="...">
            </a>
            <h6><?php echo $show['nama']; ?></h6>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>
    <!-- sedang tayang akhir -->

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
      </div>
    </section>
    <!-- trailer akhir -->

    <!-- news -->
    <section class="news text-light py-5">
      <div class="container">
        <div class="row mb-3">
          <div class="col">
            <h2>News</h2>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-12 col-sm-12">
            <ul class="list-unstyled">
              <?php 
              include "koneksi.php";

              $data = mysqli_query($connection, "SELECT * from news");
              
              while ($show = mysqli_fetch_array($data)) {
                
              
              ?>
              <li>
                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top text-light" href="#">
                  <img class="img-fluid" 
                  src="data:image/jpeg;base64,<?php echo base64_encode($show['gambar']); ?>">
                  <div class="col-lg-8 text-light">
                    <h5 class="mb-2"><?php echo $show['judul'] ?></h5>
                    <p><?php echo $show['deskripsi'] ?></p>
                    <small class=""><?php echo $show['tgl_rilis'] ?></small>
                  </div>
                </a>
              </li>
              <?php } ?>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <a href="news.html" class="btn-custom-secondary">
              <strong>Lihat Berita Selengkapnya</strong>
              <i class="ms-2 bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- news akhir -->

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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow">
          <div class="modal-header p-5 pb-4 border-bottom-0 text-light">
            <h1 class="fw-bold mb-0 fs-2">Login</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body p-5 pt-0">
            <form class="">
              <div class="form-floating mb-3">
                <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com"/>
                <label for="floatingInput">Alamat Email</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password"/>
                <label for="floatingPassword">Password</label>
              </div>
              <button class="w-100 mb-2 btn btn-lg rounded-3 btn-custom-primary" type="submit">
                Login
              </button>

              <small class="text-light">By clicking Sign up, you agree to the terms of use.</small>
              <hr class="my-4" />
              <h2 class="fs-5 fw-bold mb-3 text-light">Or use a third-party</h2>

              <button class="w-100 py-2 mb-2 btn btn-outline-secondary" type="submit">
                <i class="bi bi-twitter-x me-2"></i>
                Sign up with Twitter
              </button>

              <button class="w-100 py-2 mb-2 btn btn-outline-primary" type="submit">
                <i class="bi bi-facebook me-2"></i>
                Sign up with Facebook
              </button>

              <button class="w-100 py-2 mb-2 btn btn-outline-secondary" type="submit">
                <i class="bi bi-github me-2"></i>
                Sign up with GitHub
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- akhir modal login -->

    <!-- Modal Sign Up -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow">
          <div class="modal-header p-5 pb-4 border-bottom-0">
            <h1 class="fw-bold mb-0 fs-2 text-light">Register</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body p-5 pt-0">
            <form class="">
              <div class="form-floating mb-3">
                <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" />
                <label for="floatingInput">Alamat Email</label>
              </div>
              <div class="form-floating mb-3">
                <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" />
                <label for="floatingInput">Nama Lengkap</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" />
                <label for="floatingPassword">Password</label>
              </div>

              <button class="w-100 mb-2 btn btn-lg rounded-3 btn-custom-primary" type="submit">
                Sign up
              </button>

              <small class="text-light">By clicking Sign up, you agree to the terms of use.</small>
              <hr class="my-4" />
              <h2 class="fs-5 fw-bold mb-3 text-light">Or use a third-party</h2>

              <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
                <i class="bi bi-twitter-x me-2"></i>
                Sign up with Twitter
              </button>

              <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
                <i class="bi bi-facebook me-2"></i>
                Sign up with Facebook
              </button>

              <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
                <i class="bi bi-github me-2"></i>
                Sign up with GitHub
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
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
