<?php
include "../koneksi.php";
$id=isset($_GET["id"]) ? $_GET["id"] : "";
if (empty($id)){
    die ("Menghapus Data Gagal Karena ID Kosong");
}
$id = htmlentities(strip_tags(trim($id)));
$id = mysqli_real_escape_string($connection,$id);
$query="DELETE FROM news where id_news='".$id."'";
$hasil=mysqli_query($connection,$query);
if(!$hasil){
    die ("kesalahan query".mysqli_error($connection));

}
else{
    header("location:news_admin.php");
      
}
?>