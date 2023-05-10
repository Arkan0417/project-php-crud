<?php

//memanggil file koneksi.php
require "../koneksi.php";

// query Read atau View data pelatih
$query = mysqli_query($con, "SELECT * FROM pelatih");
$jumlahPelatih = mysqli_num_rows($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelatih</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php require "navbar.php"; ?>
    <div class="container-fluid">
    <a href="form_pelatih.php" class="btn btn-primary mt-4 mb-3">Input Data Pelatih</a>
        <h3 class="mt-3">Data Pelatih</h3>
                            <table class="table table-bordered mt-4" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pelatih</th>
                                        <th>Negara Asal</th>
                                    </tr>
                                </thead>
                            <tbody>
                            <?php
                            //pengecekan data jika data kosong
                            if($jumlahPelatih==0){
                                ?>
                                <tr>
                                    <td colspan=6 class="text-center">Data Kosong</td>
                                </tr>
                            <?php
                            }
                            else{
                            //membuat urutan atau no dengan menggunakan increment
                            $jumlah = 1;

                            //menampilkan data pelatih dalam bentuk tabel menggunakan perulangan(while)
                            while($data=mysqli_fetch_array($query)){
                                ?>
                        <tr>
                            <td><?php echo $jumlah; ?></td>
                            <td><?php echo $data['nama_pelatih']; ?></td>
                            <td><?php echo $data['negara_asal']; ?></td>
                            <td>
                                <a href="update_pelatih.php?id_pelatih=<?php echo $data['id_pelatih']; ?>" class="btn btn-primary"> Update </a>
                                <a href="hapus_pelatih.php?id_pelatih=<?=$data['id_pelatih']?>" class="btn btn-danger" onclick="return confirm('Hapus data ini?')">Hapus</a>
                            </td>
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