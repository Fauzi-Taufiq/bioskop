<?php


$idjadwal = isset($_GET["id_jadwal"]) ? $_GET["id_jadwal"] : "";
$idfilm = isset($_GET["id_film"]) ? $_GET["id_film"] : "";

if (empty($idjadwal) or empty($idfilm)) {
  header("location: index.php");
  die;
}

include "koneksi.php";

$data = mysqli_query($connection, "SELECT * FROM film join kategori on kategori.id_kategori=film.id_kategori join batas_umur on batas_umur.id_batasumur=film.id_batasumur WHERE id_film='$_GET[id_film]'");
$datashow = mysqli_fetch_array($data);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>MoviTix - <?php echo $datashow['nama'] ?></title>
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

    .poster-film {
      width: 100%;
      height: 270px;
      object-fit: cover;
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
  <?php include "navbar.php" ?>
  <!-- akhir navbar -->

  <!-- detail film -->
  <section class="trailer-film text-light py-5">
    <div class="container">
      <div class="row mb-3">
        <div class="col">
          <h2>Detail Film</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10">
          <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 shadow-sm position-relative">
            <div class="col-auto d-none d-lg-block">
              <img src="admin/uploads/<?php echo $datashow['gambar']; ?>" class="poster-film shadow" alt="poster film">
            </div>
            <div class="col p-4 d-flex flex-column position-static">
              <h3 class="mb-3"><?php echo $datashow['nama']; ?></h3>
              <div class="mb-3 text-body-light">
                <span class="badge text-bg-warning mb-2"><?php echo $datashow['kategori'] ?></span>
                <span class="badge text-bg-primary mb-2"><?php echo $datashow['batasumur'] ?></span>
                <span class="badge text-bg-success mb-2">
                  <i class="bi bi-star-fill me-1"></i>
                  <?php echo $datashow['rating']; ?>
                </span>
              </div>
              <p class="card-text mb-3"><?php echo $datashow['sinopsis'] ?></p>
              <div class="row">
                <div class="col-md-6">
                  <p>
                    Director :
                    <?php echo $datashow['direktor']; ?>
                    <br>
                    Cast :
                    <?php echo $datashow['cast']; ?>
                  </p>
                </div>
                <div class="col-md-6">
                  Studio :
                  <?php echo $datashow['studio'] ?>
                  <br>
                  Durasi :
                  <?php echo $datashow['durasi'] ?>
                </div>
              </div>
              <?php
              if (isset($_SESSION['nama'])) : ?>
                <a href="kursi.php?id_jadwal=<?php echo $idjadwal; ?>" class="btn btn-primary">Pesan</a>
              <?php else : ?>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Pesan</button>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
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