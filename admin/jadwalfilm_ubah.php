<?php
include "../koneksi.php";

$where = "";
if (isset($_POST["filter_film"])) {
    if (!empty($_POST["filter_film"])) {
        $film = mysqli_real_escape_string($connection, $_POST["filter_film"]);
        $where = " WHERE j.id_film='" . $film . "'";
    }
}

if (isset($_POST["filter_cinema"])) {
    if (!empty($_POST["filter_cinema"])) {
        $cinema = mysqli_real_escape_string($connection, $_POST["filter_cinema"]);
        $where = " WHERE j.id_cinema='" . $cinema . "'";
    }
}

$id = $_GET["id"];

$tampil = mysqli_query($connection, "Select * From jadwal where id_jadwal=$id");
$tampildata = mysqli_fetch_array($tampil);

$query = "SELECT 
            j.id_jadwal,
            f.id_film,
            j.waktu_tayang,
            c.cinema,
            j.harga
        FROM 
            jadwal j
        JOIN
            cinema c
        ON c.id_cinema = j.id_cinema
        JOIN 
            film f
        ON j.id_film = f.id_film" . $where;

$hasil = mysqli_query($connection, $query);
if (!$hasil) {
    echo "kesalahan query: " . mysqli_error($connection);
}

// $tampildata = mysqli_fetch_array($hasil);

if (isset($_POST['simpan'])) {
    $id_jadwal = $_POST['id_jadwal'];
    $film = $_POST['film'];
    $waktu_tayang = $_POST['waktu_tayang'];
    $cinema = $_POST['cinema'];
    $harga = $_POST['harga'];

    $data = mysqli_query($connection, "UPDATE jadwal SET id_film = '$film', waktu_tayang = '$waktu_tayang', id_cinema='$cinema', harga='$harga' where id_jadwal=$id_jadwal") or die("data salah: " . mysqli_error($connection));

    if ($data) {
        echo "<script>
                alert('data berhasil diubah');
                window.location.replace('jadwal_film_admin.php');
            </script>";
    } else {
        echo "<script>
                alert('data gagal diubah');
                window.location.replace('jadwalfilm_tambah.php');
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
                        <h1 class="h3 mb-0 text-gray-800">Jadwal Film</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Jadwal Film</h6>
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <input type="hidden" name="id_jadwal" value="<?php echo $tampildata["id_jadwal"] ?>">
                                        <div class="form-group col-md-6">
                                            <label for="film">Film</label>
                                            <select name="film" id="film" class="form-control">
                                                <option value="" disabled selected>Pilih Film</option>
                                                <?php
                                                $query = "SELECT id_film, nama FROM film";
                                                $hasil = mysqli_query($connection, $query);
                                                while ($film = mysqli_fetch_assoc($hasil)) {
                                                    $selected = ($film["id_film"] == $tampildata["id_film"]) ? "selected" : "";
                                                    echo "<option value='" . $film["id_film"] . "' $selected>" . $film["nama"] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="waktu_tayang">Waktu Tayang</label>
                                            <input type="datetime-local" class="form-control" name="waktu_tayang" id="waktu_tayang" value="<?php echo $tampildata['waktu_tayang'] ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="film">Teater</label>
                                            <select name="cinema" id="cinema" class="form-control">
                                                <option value="" disabled>Pilih Teater</option>
                                                <?php
                                                $query = "SELECT id_cinema, cinema FROM cinema";
                                                $hasil = mysqli_query($connection, $query);
                                                while ($cinema = mysqli_fetch_assoc($hasil)) {
                                                    $selected = ($cinema["id_cinema"] == $tampildata["id_cinema"]) ? "selected" : "";
                                                    echo "<option value='" . $cinema["id_cinema"] . "' $selected>" . $cinema["cinema"] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="harga">Harga Tiket</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="number" class="form-control" name="harga" id="harga" placeholder="Masukkan Harga Tiket" value="<?php echo $tampildata['harga']; ?>"
                                            </div>
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

    <script>
        //tidak boleh melihat masalalu
        document.addEventListener('DOMContentLoaded', function () {
            var datetimeInput = document.getElementById('waktu_tayang');
            var now = new Date();
            var year = now.getFullYear();
            var month = String(now.getMonth() + 1).padStart(2, '0');
            var day = String(now.getDate()).padStart(2, '0');
            var hours = String(now.getHours()).padStart(2, '0');
            var minutes = String(now.getMinutes()).padStart(2, '0');
            var currentDateTime = `${year}-${month}-${day}T${hours}:${minutes}`;
            datetimeInput.min = currentDateTime;
        });
    </script>
</body>

</html>
