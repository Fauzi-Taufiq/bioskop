<?php
include "../koneksi.php";

$where = "";
if (isset($_POST["filter_kategori"])) {
    if (!empty($_POST["filter_kategori"])) {
        $kategori = mysqli_real_escape_string($connection, $_POST["filter_kategori"]);
        $where = " WHERE f.id_kategori='" . $kategori . "'";
    }
}

$query = "SELECT 
            f.id_film,
            f.nama,
            f.sinopsis,
            f.direktor,
            f.cast,
            f.studio,
            f.rating,
            f.durasi,
            f.id_batasumur,
            k.kategori
        FROM 
            film f
        JOIN 
            kategori k
        ON f.id_kategori = k.id_kategori" . $where;

$hasil = mysqli_query($connection, $query);
if (!$hasil) {
    echo "kesalahan query: " . mysqli_error($connection);
}

if (isset($_POST['simpan'])) {
    $judul = $_POST['nama'];
    $sinopsis = $_POST['sinopsis'];
    $direktor = $_POST['direktor'];
    $cast = $_POST['cast'];
    $studio = $_POST['studio'];
    $rating = $_POST['rating'];
    $durasi = $_POST['durasi'];
    $batas_umur = $_POST['batas_umur'];
    $kategori = $_POST['kategori'];

    $data = mysqli_query($connection, "INSERT INTO film VALUES ('', '$judul', '$sinopsis', '$direktor', '$cast', '$studio', '$rating', '$durasi', '$batas_umur', '$kategori')") or die("data salah: " . mysqli_error($connection));

    if ($data) {
        echo "<script>
                alert('data berhasil disimpan');
                window.location.replace('film.php');
            </script>";
    } else {
        echo "<script>
                alert('data gagal disimpan');
                window.location.replace('film.php');
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MoviTix - Data Jadwal Film</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include "sidebar.php"; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <?php include "navbar.php"; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Kategori Film</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Form Tambah Kategori Film</h6>
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <div class="form-group col-md-6">
                                            <label for="film">Judul</label>
                                            <input type="text" class="form-control" name="nama" id="" placeholder="Masukkan Judul Film">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="film">Kategori</label>
                                            <select name="kategori" id="kategori" class="form-control">
                                                <?php
                                                $query = "SELECT id_kategori, kategori FROM kategori";
                                                $hasil = mysqli_query($connection, $query);
                                                while ($kategori = mysqli_fetch_assoc($hasil)) {
                                                    echo "<option value='" . $kategori["id_kategori"] . "'>" . $kategori["kategori"] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="film">Sinopsis</label>
                                            <textarea class="form-control" name="sinopsis" id="" placeholder="Masukkan Sinopsis Film"></textarea>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="film">Direktor</label>
                                            <input type="text" class="form-control" name="direktor" id="" placeholder="Masukkan Direktor Film">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="film">Cast</label>
                                            <input type="text" class="form-control" name="cast" id="" placeholder="Masukkan Aktor Film">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="film">Studio</label>
                                            <input type="text" class="form-control" name="studio" id="" placeholder="Masukkan Studio Film">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="film">Rating</label>
                                            <input type="text" class="form-control" name="rating" id="" placeholder="Masukkan Rating Film">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="film">Durasi</label>
                                            <input type="text" class="form-control" name="durasi" id="" placeholder="Masukkan Durasi Film">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="film">Batas Umur</label>
                                            <select name="batas_umur" id="kategori" class="form-control">
                                                <?php
                                                $query = "SELECT id_batasumur, batasumur FROM batas_umur";
                                                $hasil = mysqli_query($connection, $query);
                                                while ($batas_umur = mysqli_fetch_assoc($hasil)) {
                                                    echo "<option value='" . $batas_umur["id_batasumur"] . "'>" . $batas_umur["batasumur"] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" name="simpan" class="btn btn-sm btn-primary">Simpan</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include "footer.php"; ?>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
</body>

</html>
