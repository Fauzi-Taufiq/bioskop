<?php
session_start();
include "koneksi.php";

// Login logic
if (isset($_POST['login'])) {
  $username = $_POST['email'];
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM users WHERE email = '$username' AND password = '$password'";
  $result = mysqli_query($connection, $sql);

  if ($result->num_rows > 0) {
    $user = $row = mysqli_fetch_assoc($result);
    $_SESSION['nama'] = $row['nama'];
    $_SESSION["id"]   = $row["id_user"];
    $_SESSION['email'] = $row['email'];
  } else {
    echo "<script>alert('Email atau password anda salah!')</script>";
  }
}

if (isset($_POST['signup'])) {
  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $no_telp = $_POST['no_telp'];
  $email = $_POST['email'];

  $data = mysqli_query($connection, "insert into users (nama,username,password,no_telp,email) values ('$nama','$username','$password','$no_telp','$email')");

  if ($data) {
    echo "<script>
            alert('data berhasil disimpan');
        </script>";
  } else {
    echo "<script>
              alert('data gagal disimpan');
          </script>";
  }
}
?>

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
      <?php
      if (!isset($_SESSION['nama']) && !isset($_SESSION['email'])) {
        echo "          
        <button type='button' class='btn-custom-primary me-3' data-bs-toggle='modal' data-bs-target='#exampleModal'>
          Login
        </button>
        <button type='button' class='btn-custom-secondary' data-bs-toggle='modal' data-bs-target='#exampleModal1'>
          Sign Up
        </button>
        ";
      } else {
        echo "
        <span class='mr-3 text-white-600 small'>
            " . $_SESSION['nama'] . "<br>" . $_SESSION['email'] . "
        </span>
        <a href='logout.php' class='btn btn-danger'>Logout</a>
        ";
      }
      ?>
    </div>
  </div>
</header>