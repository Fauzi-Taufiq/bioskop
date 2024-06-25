<?php

include "koneksi.php";

// $data = mysqli_query($connection, "query WHERE id_film='$_GET[id_film]'");
// $datashow = mysqli_fetch_array($data);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>MoviTix - <?php //echo $datashow['nama'] ?></title>
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

    .seat-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(60px, 1fr));
      gap: 10px;
      justify-items: center;
      padding: 1px;
    }

    .seat {
      width: 50px;
      height: 50px;
      background-image: url('seat-icon.png'); /* Path to your seat icon */
      background-size: cover;
      background-repeat: no-repeat;
      border-radius: 10px;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
    }

    .seat input[type="checkbox"] {
      display: none;
    }

    .seat label {
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 10px;
      background-color: green;
    }

    .seat input[type="checkbox"]:checked + label {
      background-color: rgba(118, 199, 192, 0.7);
    }

    .seat label:hover {
      background-color: rgba(179, 229, 252, 0.7);
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

  <!-- detail film -->
  <section class="trailer-film text-light py-5">
    <div class="container">
      <div class="row mb-3">
        <div class="col">
          <h2>Pilih Kursi</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 shadow-sm position-relative">
          <div class="seat-grid">
              <div class="seat">
                <input type="checkbox" id="seat1">
                <label for="seat1">H01</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat2">
                <label for="seat2">H02</label>
              </div>
              <div class="seat"></div>
              <div class="seat">
                <input type="checkbox" id="seat3">
                <label for="seat3">H03</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat4">
                <label for="seat4">H04</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat5">
                <label for="seat5">H05</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat6">
                <label for="seat6">H06</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat7">
                <label for="seat7">H07</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat8">
                <label for="seat8">H08</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat9">
                <label for="seat9">H09</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat10">
                <label for="seat10">H10</label>
              </div>
              <div class="seat"></div>
              <div class="seat">
                <input type="checkbox" id="seat10">
                <label for="seat10">H11</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat10">
                <label for="seat10">H12</label>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 shadow-sm position-relative">
          <div class="seat-grid">
              <div class="seat">
                <input type="checkbox" id="seat1">
                <label for="seat1">G01</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat2">
                <label for="seat2">G02</label>
              </div>
              <div class="seat"></div>
              <div class="seat">
                <input type="checkbox" id="seat3">
                <label for="seat3">G03</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat4">
                <label for="seat4">G04</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat5">
                <label for="seat5">G05</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat6">
                <label for="seat6">G06</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat7">
                <label for="seat7">G07</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat8">
                <label for="seat8">G08</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat9">
                <label for="seat9">G09</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat10">
                <label for="seat10">G10</label>
              </div>
              <div class="seat"></div>
              <div class="seat">
                <input type="checkbox" id="seat10">
                <label for="seat10">G11</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat10">
                <label for="seat10">G12</label>
              </div>
            </div>
          </div>
        </div>        
        <div class="col-md-12">
          <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 shadow-sm position-relative">
          <div class="seat-grid">
              <div class="seat">
                <input type="checkbox" id="seat1">
                <label for="seat1">F01</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat2">
                <label for="seat2">F02</label>
              </div>
              <div class="seat"></div>
              <div class="seat">
                <input type="checkbox" id="seat3">
                <label for="seat3">F03</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat4">
                <label for="seat4">F04</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat5">
                <label for="seat5">F05</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat6">
                <label for="seat6">F06</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat7">
                <label for="seat7">F07</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat8">
                <label for="seat8">F08</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat9">
                <label for="seat9">F09</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat10">
                <label for="seat10">F10</label>
              </div>
              <div class="seat"></div>
              <div class="seat">
                <input type="checkbox" id="seat10">
                <label for="seat10">F11</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat10">
                <label for="seat10">F12</label>
              </div>
            </div>
          </div>
        </div>        
        <div class="col-md-12">
          <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 shadow-sm position-relative">
          <div class="seat-grid">
              <div class="seat">
                <input type="checkbox" id="seat1">
                <label for="seat1">E01</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat2">
                <label for="seat2">E02</label>
              </div>
              <div class="seat"></div>
              <div class="seat">
                <input type="checkbox" id="seat3">
                <label for="seat3">E03</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat4">
                <label for="seat4">E04</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat5">
                <label for="seat5">E05</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat6">
                <label for="seat6">E06</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat7">
                <label for="seat7">E07</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat8">
                <label for="seat8">E08</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat9">
                <label for="seat9">E09</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat10">
                <label for="seat10">E10</label>
              </div>
              <div class="seat"></div>
              <div class="seat">
                <input type="checkbox" id="seat10">
                <label for="seat10">E11</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat10">
                <label for="seat10">E12</label>
              </div>
            </div>
          </div>
        </div>        
        <div class="col-md-12">
          <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 shadow-sm position-relative">
          <div class="seat-grid">
              <div class="seat">
                <input type="checkbox" id="seat1">
                <label for="seat1">D01</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat2">
                <label for="seat2">D02</label>
              </div>
              <div class="seat"></div>
              <div class="seat">
                <input type="checkbox" id="seat3">
                <label for="seat3">D03</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat4">
                <label for="seat4">D04</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat5">
                <label for="seat5">D05</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat6">
                <label for="seat6">D06</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat7">
                <label for="seat7">D07</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat8">
                <label for="seat8">D08</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat9">
                <label for="seat9">D09</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat10">
                <label for="seat10">D10</label>
              </div>
              <div class="seat"></div>
              <div class="seat">
                <input type="checkbox" id="seat10">
                <label for="seat10">D11</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat10">
                <label for="seat10">D12</label>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-12">
          <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 shadow-sm position-relative">
          <div class="seat-grid">
              <div class="seat">
                <input type="checkbox" id="seat1">
                <label for="seat1">C01</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat2">
                <label for="seat2">C02</label>
              </div>
              <div class="seat"></div>
              <div class="seat">
                <input type="checkbox" id="seat3">
                <label for="seat3">C03</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat4">
                <label for="seat4">C04</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat5">
                <label for="seat5">C05</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat6">
                <label for="seat6">C06</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat7">
                <label for="seat7">C07</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat8">
                <label for="seat8">C08</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat9">
                <label for="seat9">C09</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat10">
                <label for="seat10">C10</label>
              </div>
              <div class="seat"></div>
              <div class="seat">
                <input type="checkbox" id="seat10">
                <label for="seat10">C11</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat10">
                <label for="seat10">C12</label>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-12">
          <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 shadow-sm position-relative">
          <div class="seat-grid">
              <div class="seat">
                <input type="checkbox" id="seat1">
                <label for="seat1">B01</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat2">
                <label for="seat2">B02</label>
              </div>
              <div class="seat"></div>
              <div class="seat">
                <input type="checkbox" id="seat3">
                <label for="seat3">B03</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat4">
                <label for="seat4">B04</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat5">
                <label for="seat5">B05</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat6">
                <label for="seat6">B06</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat7">
                <label for="seat7">B07</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat8">
                <label for="seat8">B08</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat9">
                <label for="seat9">B09</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat10">
                <label for="seat10">B10</label>
              </div>
              <div class="seat"></div>
              <div class="seat">
                <input type="checkbox" id="seat10">
                <label for="seat10">B11</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat10">
                <label for="seat10">B12</label>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-12">
          <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 shadow-sm position-relative">
          <div class="seat-grid">
              <div class="seat">
                <input type="checkbox" id="seat1">
                <label for="seat1">A01</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat2">
                <label for="seat2">A02</label>
              </div>
              <div class="seat"></div>
              <div class="seat">
                <input type="checkbox" id="seat3">
                <label for="seat3">A03</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat4">
                <label for="seat4">A04</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat5">
                <label for="seat5">A05</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat6">
                <label for="seat6">A06</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat7">
                <label for="seat7">A07</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat8">
                <label for="seat8">A08</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat9">
                <label for="seat9">A09</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat10">
                <label for="seat10">A10</label>
              </div>
              <div class="seat"></div>
              <div class="seat">
                <input type="checkbox" id="seat10">
                <label for="seat10">A11</label>
              </div>
              <div class="seat">
                <input type="checkbox" id="seat10">
                <label for="seat10">A12</label>
              </div>
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
              <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" />
              <label for="floatingInput">Alamat Email</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" />
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