<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MoviTix - About</title>
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
    <?php include "navbar.php" ?>
<!-- Akhir Navbar -->


<!-- Content: About Us -->
<section class="about-us text-light py-5">
    <div class="container">
        <!-- Company Overview -->
        <div class="row mb-5">
            <div class="col-lg-6">
                <h2 class="text-danger">About Us</h2>
                <p>MoviTix didirikan pada tahun 2020 dengan misi untuk menyediakan layanan pemesanan tiket film yang mudah dan nyaman.</p>
            </div>

            <div class="col-lg-6 text-end">
                <h2>Tim Kami</h2>
                <p> Kami memiliki lebih dari 1200 karyawan yang berdedikasi untuk memberikan pengalaman terbaik kepada pengguna kami.</p>
            </div>
        </div>
        <!-- End Company Overview -->
        <hr>

        <!-- Key Features -->
        <div class="row mb-5">
            <div class="col-lg-4">
                <div class="panel text-center">
                    <img src="img/cepat.jpg" class="img-fluid mb-3" alt="Pelayanan Cepat">
                    <h3>Pelayanan Cepat</h3>
                    <p>Kami menyediakan layanan pemesanan tiket film dengan proses cepat dan efisien.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel text-center">
                    <img src="img/pilihan.jpg" class="img-fluid mb-3" alt="Pilihan Banyak">
                    <h3>Pilihan Banyak</h3>
                    <p>Kami memiliki berbagai pilihan film dari berbagai genre untuk dipilih oleh pengguna.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel text-center">
                    <img src="img/ramah.jpg" class="img-fluid mb-3" alt="Peduli Pelanggan">
                    <h3>Peduli Pelanggan</h3>
                    <p>Kami selalu memprioritaskan kepuasan pelanggan dan siap membantu dengan layanan pelanggan yang baik.</p>
                </div>
            </div>
        </div>
        <!-- End Key Features -->

        <!-- Mission and User Count -->
        <div class="row mb-5">
            <div class="col-lg-6">
                <h2>Tujuan dan Misi</h2>
                <p>Tujuan kami adalah menyediakan platform pemesanan tiket film terbaik di Indonesia dengan fokus pada kepuasan pelanggan.</p>
            </div>
            <div class="col-lg-6 text-end">
                <h2 class="text-danger">Jumlah Pengguna</h2>
                <p class="display-1 fw-bold">500.000</p>
            </div>
        </div>
        <!-- End Mission and User Count -->

        <!-- Branch Offices Slide -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="mb-3">Kantor Cabang</h2>
                <div id="branchCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/office1.jpg" width="100%" height="100%" alt="Branch 1">
                            <div class="carousel-caption d-none d-md-block shadow">
                                <h5>Kantor Utama Jakarta</h5>
                                <p>Jl. Sudirman No. 3, Jakarta</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/office2.jpg" width="100%" height="100%" alt="Branch 2">
                            <div class="carousel-caption d-none d-md-block shadow">
                                <h5>Kantor Cabang Bandung</h5>
                                <p>Jl. Pegangsaan No. 13, Bandung</p>
                            </div>
                        </div>
                        <!-- Add more branch office slides as needed -->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#branchCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#branchCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- End Branch Offices Slide -->
    </div>
</section>
<!-- End Content: About Us -->

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
                  <a class="text-light" href="#">
                    <i class="bi bi-twitter-x"></i>
                  </a>
                </li>
                <li class="ms-3">
                  <a class="text-light" href="#">
                    <i class="bi bi-instagram"></i>
                  </a>
                </li>
                <li class="ms-3">
                  <a class="text-light" href="#">
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
  
  
      <!-- Modal Login -->
      <?php include "modallogin.php" ?>
  
      <!-- Modal Sign Up -->
      <?php include "modalsignup.php" ?>
  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
    </body>
</html>
