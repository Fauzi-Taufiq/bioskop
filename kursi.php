<?php

include "koneksi.php";

/* echo "<pre>";
print_r($_SESSION);
die; */
// $data = mysqli_query($connection, "query WHERE id_film='$_GET[id_film]'");
// $datashow = mysqli_fetch_array($data);

// Query untuk mengambil kursi yang sudah dipesan berdasarkan jadwal
$idfilm = isset($_GET["id_film"]) ? $_GET["id_film"] : "";
$idjadwal = isset($_GET["id_jadwal"]) ? $_GET["id_jadwal"] : "";

$bookedSeats = [];
$queryBookedSeats = mysqli_query($connection, "SELECT id_kursi FROM transaksi WHERE id_jadwal = '$idjadwal'");
while ($rowBookedSeats = mysqli_fetch_assoc($queryBookedSeats)) {
    $bookedSeats[] = $rowBookedSeats['id_kursi'];
}

if (isset($_POST['pesan'])) {
  $tgl_pesan = date('Y-m-d H:i:s'); // Set tgl_pesan to the current date and time
  $id_jadwal = isset($_POST['id_jadwal']) ? $_POST['id_jadwal'] : "";
  $id_user = isset($_POST['id_user']) ? $_POST['id_user'] : "";
  $id_kursi = isset($_POST['seat']) ? $_POST['seat'] : "";

  if (empty($id_jadwal) or empty($id_user) or empty($id_kursi)) {
    echo "<script>
      alert('Gagal memesan tiket, harap memilih kursi!');
    </script>";
  }
  // $total = 35000;

  $data = mysqli_query($connection, "INSERT INTO transaksi (tgl_pesan, id_jadwal, id_user, id_kursi) VALUES ('$tgl_pesan', $id_jadwal, $id_user, $id_kursi)") or die("data salah: " . mysqli_error($connection));

  if ($data) {
    echo "<script>
              alert('Pembelian Berhasil');
              window.location.replace('index.php');
          </script>";
  } else {
    echo "<script>
              alert('Pembelian Gagal');
          </script>";
  }
}

if (empty($idjadwal)) {
  header("location: index.php");
  die();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>MoviTix - <?php //echo $datashow['nama'] 
                    ?></title>
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
      position: relative;
      width: 50px;
      height: 50px;
      background-image: url('seat-icon.png');
      /* Path to your seat icon */
      background-size: cover;
      background-repeat: no-repeat;
      border-radius: 10px;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
    }

    .seat input[type="radio"] {
      display: none;
    }

    .seat label {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 10px;
      background-color: green;
    }

    .seat input[type="radio"]:checked+label {
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
  <?php include "navbar.php"; ?>
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
        <div class="col-md-12 bg-danger">
          <center>Layar Lebar</center>
        </div>
        <div class="col-md-12">
          <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 shadow-sm position-relative"></div>
          <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 shadow-sm position-relative"></div>
        </div>
        <div class="col-md-12">
          <form action="" method="post">
            <input type="hidden" name="idfilm">
            <input type="hidden" name="id_jadwal" value="<?php echo $idjadwal; ?>" >
            <input type="hidden" name="id_user" value="<?php echo $_SESSION['id'] ?>" > <!-- contoh, id_user dari session -->
            <?php
            $kursi = mysqli_query($connection, "SELECT * FROM kursi");
            $seatMap = [];
            while ($row = mysqli_fetch_assoc($kursi)) {
              $seatMap[$row['nomor_kursi']] = $row;
            }

            // Loop untuk menampilkan kursi
            for ($row = 'A'; $row <= 'H'; $row++) {
              echo '<div class="row g-0 rounded overflow-hidden flex-md-row mb-4 shadow-sm position-relative">';
              echo '<div class="seat-grid">';
              for ($col = 1; $col <= 12; $col++) {
                  $seatNum = $row . str_pad($col, 2, '0', STR_PAD_LEFT);
                  if (isset($seatMap[$seatNum])) {
                      $seatValue = $seatMap[$seatNum]['id_kursi'];
                      $isBooked = in_array($seatValue, $bookedSeats); // Cek apakah kursi sudah dipesan
                      echo '<div class="seat">';
                      if ($isBooked) {
                          // Kursi sudah dipesan
                          echo '<input type="radio" name="seat" id="seat' . $seatNum . '" disabled>';
                          echo '<label for="seat' . $seatNum . '" style="background-color: grey;">' . $seatNum . '</label>'; // Merah untuk kursi yang sudah dipesan
                      } else {
                          // Kursi tersedia
                          echo '<input type="radio" name="seat" id="seat' . $seatNum . '" value="' . $seatValue . '">';
                          echo '<label for="seat' . $seatNum . '">' . $seatNum . '</label>';
                      }
                      echo '</div>';
                  } else {
                      // Kursi tidak ada dalam database
                      echo '<div class="seat">';
                      echo '<input type="radio" name="seat" id="seat' . $seatNum . '" disabled>';
                      echo '<label for="seat' . $seatNum . '">' . $seatNum . '</label>';
                      echo '</div>';
                  }

                  if ($col == 2 || $col == 10) {
                      echo '<div class="seat"></div>'; // Spacing after seat 2 and 10
                  }
              }
              echo '</div>';
              echo '</div>';
            }

            ?>

            <div class="col-md-6">
              <button class="btn btn-primary" type="submit" name="pesan">Pesan</button>
            </div>
          </form>
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