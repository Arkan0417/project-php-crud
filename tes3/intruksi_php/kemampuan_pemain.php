<?php

//memanggil file koneksi.php
require "koneksi.php";

// query Read atau View data
$query = mysqli_query($con, "SELECT * FROM pemain, kemampuan_pemain WHERE pemain.id_pemain = kemampuan_pemain.id_pemain");
$jumlah = mysqli_num_rows($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kemampuan Pemain</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php require "navbar.php"; ?>
    <div class="container-fluid">
        <h3 class="mt-3">Data Kemampuan Pemain</h3>
                            <table class="table table-bordered mt-4" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pemain</th>
                                        <th>Negara Asal</th>
                                        <th>Posisi</th>
                                        <th>No Punggung</th>
                                        <th>Akurasi Passing</th>
                                        <th>Kemampuan Shooting</th>
                                        <th>Kemampuan Dribling</th>
                                        <th>Daya Tahan</th>
                                    </tr>
                                </thead>
                            <tbody>
                            <?php
                            //pengecekan data jika data kosong
                            if($jumlah==0){
                                ?>
                                <tr>
                                    <td colspan=6 class="text-center">Data Kosong</td>
                                </tr>
                            <?php
                            }
                            else{
                            //membuat urutan atau no dengan menggunakan increment
                            $jumlah = 1;

                            //menampilkan data guru dalam bentuk tabel menggunakan perulangan(while)
                            while($data=mysqli_fetch_array($query)){
                                ?>
                        <tr>
                            <td><?php echo $jumlah; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['negara_asal']; ?></td>
                            <td><?php echo $data['posisi']; ?></td>
                            <td><?php echo $data['no_punggung']; ?></td> 
                            <td><?php echo $data['akurasi_passing']; ?></td> 
                            <td><?php echo $data['kemampuan_shooting']; ?></td> 
                            <td><?php echo $data['kemampuan_dribling']; ?></td> 
                            <td><?php echo $data['daya_tahan']; ?></td> 
                        </tr>
                        <?php
                            //increment untuk mengurutkan no dari 1 sampai terbesar
                            $jumlah++;
                            }
                        }
                        ?>
                        </tbody>
                    </table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>