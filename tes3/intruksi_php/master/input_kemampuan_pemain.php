<?php

require "../koneksi.php";

$koneksi = $con;
function insert_pemain($function){
    $id_pemain = $_POST["id_pemain"];
    $akurasi_passing = $_POST["akurasi_passing"];
    $kemampuan_shooting = $_POST["kemampuan_shooting"];
    $kemampuan_dribling = $_POST["kemampuan_dribling"];
    $daya_tahan = $_POST["daya_tahan"];

    $input = "INSERT INTO kemampuan_pemain(akurasi_passing, kemampuan_shooting, kemampuan_dribling, daya_tahan, id_pemain) VALUES ('$akurasi_passing','$kemampuan_shooting','$kemampuan_dribling','$daya_tahan','$id_pemain')";
    mysqli_query($function, $input);
    echo "<script>alert('Data telah tersimpan.');
    document.location='view_kemampuan_pemain.php'</script>";
    }
    if(isset($_POST["simpan"])){
        insert_pemain($koneksi);
    }

?>