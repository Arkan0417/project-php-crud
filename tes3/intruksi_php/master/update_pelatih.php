<?php

//memanggil file koneksi.php
require "../koneksi.php";

//memanggil parameter berdasarkan data yang dipilih pada halaman manajemen pemain
$id_pelatih = $_GET['id_pelatih'];

//mengambil data dari database menggunakan paramater id atau primary key
$queryAmbilData = mysqli_query($con, "SELECT * FROM pelatih WHERE id_pelatih='$id_pelatih'");
$data = mysqli_fetch_array($queryAmbilData);

    //proses update data pemain
    if(isset($_POST['update'])){
        $nama_pelatih = $_POST['nama_pelatih'];
        $negara_asal = $_POST['negara_asal'];

            //query update data pemain
            $query = mysqli_query($con,"UPDATE pelatih SET nama_pelatih='$nama_pelatih', negara_asal='$negara_asal' WHERE id_pelatih='$id_pelatih'");
            if($query){
                echo "<script>alert('Data telah terupdate');
                document.location='view_pelatih.php'</script>";
            }
            else{
                echo mysqli_error($con);
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Pelatih</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php require "navbar.php"; ?>
    <div class="container mt-5">
        <h3 class="mb-4">Update Data Pemain</h3>
        <form action="" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Pelatih</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nama_pelatih" value="<?php echo $data['nama_pelatih']; ?>">
        </div>
        <div class="mb-3">
            <label for="negara_asal" class="form-label">Negara Asal</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="negara_asal" value="<?php echo $data['negara_asal']; ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="update">Update</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>