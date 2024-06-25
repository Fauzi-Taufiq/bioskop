<?php
include "../koneksi.php";
$id=isset($_GET["id"]) ? $_GET["id"] : "";
if (empty($id)){
    die ("Menghapus Data Gagal Karena ID Kosong");
}
$id = htmlentities(strip_tags(trim($id)));
$id = mysqli_real_escape_string($connection,$id);
$query="UPDATE transaksi set konfirmasi_pembayaran='Y' where id_trans='".$id."'";
$hasil=mysqli_query($connection,$query);
if(!$hasil){
    die ("kesalahan query".mysqli_error($connection));

}
else{
    header("location:transaksi_admin.php");
      
}
?>