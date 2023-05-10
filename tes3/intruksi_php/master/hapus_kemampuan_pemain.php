<?php
require "../koneksi.php";
 
$id_kemampuan = $_GET['id_kemampuan'];
 
$query = mysqli_query($con, "DELETE FROM kemampuan_pemain WHERE id_kemampuan='$id_kemampuan'");
 
if($query){
 echo "<script>alert('Data berhasil dihapus!.');
 document.location='view_kemampuan_pemain.php'</script>";
}else{
 echo "<script>alert('Data gagal dihapus!.');
 document.location='view_kemampuan_pemain.php'</script>";
}
 
?>