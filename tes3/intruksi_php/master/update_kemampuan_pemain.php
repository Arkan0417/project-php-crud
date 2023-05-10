<?php

//memanggil file koneksi.php
require "../koneksi.php";

//memanggil parameter berdasarkan data yang dipilih pada halaman manajemen pemain
$id_kemampuan = $_GET['id_kemampuan'];

//mengambil data dari database menggunakan paramater id atau primary key
$queryAmbilData = mysqli_query($con, "SELECT * FROM kemampuan_pemain WHERE id_kemampuan='$id_kemampuan'");
$data = mysqli_fetch_array($queryAmbilData);

    //proses update data pemain
    if(isset($_POST['update'])){
        $akurasi_passing = $_POST['akurasi_passing'];
        $kemampuan_shooting = $_POST['kemampuan_shooting'];
        $kemampuan_dribling = $_POST['kemampuan_dribling'];
        $daya_tahan = $_POST['daya_tahan'];

            //query update data pemain
            $query = mysqli_query($con,"UPDATE kemampuan_pemain SET akurasi_passing='$akurasi_passing', kemampuan_shooting='$kemampuan_shooting', kemampuan_dribling='$kemampuan_dribling', daya_tahan='$daya_tahan' WHERE id_kemampuan='$id_kemampuan'");
            if($query){
                echo "<script>alert('Data telah terupdate');
                document.location='view_kemampuan_pemain.php'</script>";
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
    <title>Update Data Pemain</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php require "navbar.php"; ?>
    <div class="container mt-5">
        <h3 class="mb-4">Update Kemampuan Pemain</h3>
        <form action="" method="post">
        <div class="mb-3">
            <label for="akurasi_passing" class="form-label">Akurasi Passing</label>
            <select name="akurasi_passing" id="akurasi_passing" class="form-select">
                <option selected value="<?php echo $data['akurasi_passing']; ?>"><?php echo $data['akurasi_passing']; ?></option>
                <option value="Kurang">Kurang</option>
                <option value="Cukup">Cukup</option>
                <option value="Baik">Baik</option>
                <option value="Sangat Baik">Sangat Baik</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="kemampuan_shooting" class="form-label">Kemampuan Shooting</label>
            <select name="kemampuan_shooting" id="kemampuan_shooting" class="form-select">
                <option selected value="<?php echo $data['kemampuan_shooting']; ?>"><?php echo $data['kemampuan_shooting']; ?></option>
                <option value="Kurang">Kurang</option>
                <option value="Cukup">Cukup</option>
                <option value="Baik">Baik</option>
                <option value="Sangat Baik">Sangat Baik</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="kemampuan_dribling" class="form-label">Kemampuan Dribling</label>
            <select name="kemampuan_dribling" id="kemampuan_dribling" class="form-select">
                <option selected value="<?php echo $data['kemampuan_dribling']; ?>"><?php echo $data['kemampuan_dribling']; ?></option>
                <option value="Kurang">Kurang</option>
                <option value="Cukup">Cukup</option>
                <option value="Baik">Baik</option>
                <option value="Sangat Baik">Sangat Baik</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="daya_tahan" class="form-label">Daya Tahan</label>
            <select name="daya_tahan" id="daya_tahan" class="form-select">
                <option selected value="<?php echo $data['daya_tahan']; ?>"><?php echo $data['daya_tahan']; ?></option>
                <option value="Kurang">Kurang</option>
                <option value="Cukup">Cukup</option>
                <option value="Baik">Baik</option>
                <option value="Sangat Baik">Sangat Baik</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="update">Update</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>