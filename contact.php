<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MoviTix - Contact</title>
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

    <!-- Konten Halaman Contact Us -->
    <section class="contact-us text-light py-5">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6">
            <h2>Contact Us</h2>
            <p>Isi formulir di bawah ini untuk menghubungi kami.</p>
            <form id="contactForm" action="submit_contact.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Pesan</label>
                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Masukkan Pesan" required></textarea>
                </div>
                <button type="submit" class="btn-custom-primary">Kirim Pesan</button>
            </form>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <p class="lead">Follow sosial media kami dibawah ini</p>
            <ul class="list-unstyled">
              <li class="sosmed-contact mb-1">
                <a class="text-light" href="#">
                  <i class="bi bi-twitter-x me-1"></i>
                  MoviTix 
                </a>
              </li>
              <li class="sosmed-contact mb-1">
                <a class="text-light" href="#">
                  <i class="bi bi-instagram me-1"></i>
                  @movitix.id
                </a>
              </li>
              <li class="sosmed-contact mb-1">
                <a class="text-light" href="#">
                  <i class="bi bi-facebook me-1"></i>
                  MoviTix
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Konten Halaman Contact Us -->

    <!-- Footer (Copy from news.html for consistency) -->
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
          <p>Â© 2024 MoviTix, Inc. All rights reserved.</p>
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