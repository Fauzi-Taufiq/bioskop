<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MoviTix - Data Transaksi</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php

        include "sidebar.php";

        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php

                include "navbar.php";

                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Waktu Pesan</th>
                                                    <th>Jadwal</th>
                                                    <th>User</th>
                                                    <th>Jumlah</th>
                                                    <th>No. Kursi</th>
                                                    <th>Total</th>
                                                    <th>Admin</th>
                                                    <th>Konfirmasi</th>
                                                </tr>
                                            </thead>    
                                            <tbody>
                                                <?php

                                                    include "../koneksi.php";
                                                    $jadwal = mysqli_query($connection, 
                                                    "SELECT t.id_trans, t.tgl_pesan, CONCAT(f.nama, ' - ', j.waktu_tayang, ' - ', 'Teater ', c.cinema) AS jadwal, CONCAT(t.id_user,' - ', u.nama) AS user, COALESCE(CONCAT(t.id_admin, ' - ', a.nama), '-') AS admin, t.jumlah, k.nomor_kursi, t.total, t.konfirmasi_pembayaran  
                                                    FROM transaksi t 
                                                    join jadwal j on t.id_jadwal=j.id_jadwal 
                                                    join film f on f.id_film=j.id_film 
                                                    join cinema c on j.id_cinema=c.id_cinema
                                                    join users u on u.id_user=t.id_user
                                                    left join admin a on a.id_admin=t.id_admin
                                                    join kursi k on k.id_kursi=t.id_kursi
                                                    ");

                                                    while ($show = mysqli_fetch_array($jadwal)) {

                                                ?>
                                                <tr>
                                                    <td><?php echo $show['id_trans'] ?></td>
                                                    <td><?php echo $show['tgl_pesan'] ?></td>
                                                    <td><?php echo $show['jadwal'] ?></td>
                                                    <td><?php echo $show['user'] ?></td>
                                                    <td><?php echo $show['jumlah'] ?></td>
                                                    <td><?php echo $show['nomor_kursi'] ?></td>
                                                    <td><?php echo $show['total'] ?></td>
                                                    <td><?php echo $show['admin'] ?></td>
                                                    <td>
                                                        <?php 
                                                        if ($show['konfirmasi_pembayaran'] == '') {
                                                            echo '<a href="transaksi_success.php?id=' . $show['id_trans'] . '" class="btn btn-sm btn-primary">Berhasil</a>';
                                                            echo ' <a href="transaksi_gagal.php?id='.$show['id_trans']. '" class="btn btn-sm btn-danger">Gagal</a>';
                                                        } elseif ($show['konfirmasi_pembayaran'] == 'Y') {
                                                            echo "Centang Hijau";
                                                        } elseif ($show['konfirmasi_pembayaran'] == 'X') {
                                                            echo "Silang Merah";
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php

            include "footer.php";

            ?>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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