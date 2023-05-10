<?php
require "../koneksi.php";
 
$id_pelatih = $_GET['id_pelatih'];
 
$query = mysqli_query($con, "DELETE FROM pelatih WHERE id_pelatih='$id_pelatih'");
 
if($query){
 echo "<script>alert('Data berhasil dihapus!.');
 document.location='view_pelatih.php'</script>";
}else{
 echo "<script>alert('Data gagal dihapus!.');
 document.location='view_pelatih.php'</script>";
}
 
?>