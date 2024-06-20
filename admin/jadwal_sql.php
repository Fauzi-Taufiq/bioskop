
<?php

// include "../koneksi.php";

// if (isset($_POST["filter_film"]))
// {
//     if (!empty($_POST["filter_film"]))
//     {
//         $film = mysqli_real_escape_string($koneksi, $_POST["filter_film"]);

//         $where = " WHERE b.id_film='".$film."'";
//     }
// }
// $query="SELECT 
//             j.id_jadwal,
//             f.id_film,
//             j.waktu_tayang
//         FROM 
//             jadwal j
//         JOIN 
//             film f
//         ON j.id_film = f.id_film".$where;

// $hasil=mysqli_query($koneksi,$query);
// if(!$hasil){
//   echo "kesalahan query".mysqli_error($koneksi);

// }

// if (isset($_POST['simpan'])) {
//     $film           = $_POST['film'];
//     $waktu_tayang   = $_POST['waktu_tayang'];

//     $data = mysqli_query($connection, "INSERT INTO jadwal VALUES ('', '$film', '$waktu_tayang')") or die("data salah: ". mysqli_error($mysqli));

//     if ($data) {
//         echo "<script>
//                 alert('data berhasil disimpan');
//                 window.location.replace('tampil.php');
//             </script>";
//     } else {
//         echo "<script>
//                 alert('data gagal disimpan');
//                 window.location.replace('add.php');
//             </script>";
//     }
// }