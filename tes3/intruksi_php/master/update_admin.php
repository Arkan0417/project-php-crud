<?php

//memanggil file koneksi.php
require "../koneksi.php";

//memanggil parameter berdasarkan data yang dipilih pada halaman manajemen admin
$id_user = $_GET['id_user'];

//mengambil data dari database menggunakan paramater id atau primary key
$queryAmbilData = mysqli_query($con, "SELECT * FROM user WHERE id_user='$id_user'");
$data = mysqli_fetch_array($queryAmbilData);

    //proses update data pemain
    if(isset($_POST['update'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

            //query update data pemain
            $query = mysqli_query($con,"UPDATE user SET username='$username', password='$password' WHERE id_user='$id_user'");
            if($query){
                echo "<script>alert('Data telah terupdate');
                document.location='view_admin.php'</script>";
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
    <title>Update Data Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php require "navbar.php"; ?>
    <div class="container mt-5">
        <h3 class="mb-4">Update Data Admin</h3>
        <form action="" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="username" value="<?php echo $data['username']; ?>">
        </div>
        <div class="mb-3">
            <label for="negara_asal" class="form-label">Password</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="password" value="<?php echo $data['password']; ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="update">Update</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>