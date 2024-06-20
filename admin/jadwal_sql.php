<?php

include "../koneksi.php";

if (isset($_POST['simpan'])) {
    $id_jadwal      = $_POST['id_jadwal'];
    $id_film        = $_POST['id_film'];
    $waktu_tayang   = $_POST['waktu_tayang'];
    $id_cinema      = $_POST['id_cinema'];

    $data = mysqli_query($connection, "INSERT INTO jadwal (id_jadwal, id_film, waktu_tayang, id_cinema) VALUES ('$id_jadwal', '$id_film', '$waktu_tayang', '$id_cinema')") or die("data salah: ". mysqli_error($mysqli));

    if ($data) {
        echo "<script>
                alert('data berhasil disimpan');
                window.location.replace('tampil.php');
            </script>";
    } else {
        echo "<script>
                alert('data gagal disimpan');
                window.location.replace('add.php');
            </script>";
    }
}