<?php

require "../koneksi.php";

$koneksi = $con;
function insert_admin($function){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $input = "INSERT INTO user(username, password) VALUES ('$username','$password')";
    mysqli_query($function, $input);
    echo "<script>alert('Data telah tersimpan.');
    document.location='view_admin.php'</script>";
    }
    if(isset($_POST["simpan"])){
        insert_admin($koneksi);
    }

?>