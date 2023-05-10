<?php

require "../koneksi.php";

$koneksi = $con;
function insert_pemain($function){
    $nama_pelatih = $_POST["nama_pelatih"];
    $negara_asal = $_POST["negara_asal"];

    $input = "INSERT INTO pelatih(nama_pelatih, negara_asal) VALUES ('$nama_pelatih','$negara_asal')";
    mysqli_query($function, $input);
    echo "<script>alert('Data telah tersimpan.');
    document.location='view_pelatih.php'</script>";
    }
    if(isset($_POST["simpan"])){
        insert_pemain($koneksi);
    }

?>