<?php
require "../koneksi.php";
 
$id_user = $_GET['id_user'];
 
$query = mysqli_query($con, "DELETE FROM user WHERE id_user='$id_user'");
 
if($query){
 echo "<script>alert('Data berhasil dihapus!.');
 document.location='view_admin.php'</script>";
}else{
 echo "<script>alert('Data gagal dihapus!.');
 document.location='view_admin.php'</script>";
}
 
?>