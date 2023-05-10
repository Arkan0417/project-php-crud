<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Pemain</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php require "navbar.php"; ?>
    <div class="container mt-5">
        <h3 class="mb-4">Masukkan Data Kemampuan Pemain</h3>
        <form action="input_kemampuan_pemain.php" method="post">
        <div class="mb-3">
            <select name="id_pemain" id="id_pemain" class="form-control">
                <option>Pilih Pemain</option>
                <!-- Memanggil data dari tabel kemampuan pemain -->
                <?php
                require "../koneksi.php";
                $queryDataPemain = mysqli_query($con, "SELECT * FROM pemain");
                while($dataOpsi = mysqli_fetch_array($queryDataPemain)){
                    echo "<option value=$dataOpsi[id_pemain]> $dataOpsi[nama] - $dataOpsi[negara_asal] - $dataOpsi[posisi] - $dataOpsi[no_punggung] </option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="akurasi_passing" class="form-label">Akurasi Passing</label>
            <select name="akurasi_passing" id="akurasi_passing" class="form-control">
                <option value="Kurang">Kurang</option>
                <option value="Cukup">Cukup</option>
                <option value="Baik">Baik</option>
                <option value="Sangat Baik">Sangat Baik</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="kemampuan_shooting" class="form-label">Kemampuan Shooting</label>
            <select name="kemampuan_shooting" id="kemampuan_shooting" class="form-control">
                <option value="Kurang">Kurang</option>
                <option value="Cukup">Cukup</option>
                <option value="Baik">Baik</option>
                <option value="Sangat Baik">Sangat Baik</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="kemampuan_dribling" class="form-label">Kemampuan Dribling</label>
            <select name="kemampuan_dribling" id="kemampuan_dribling" class="form-control">
                <option value="Kurang">Kurang</option>
                <option value="Cukup">Cukup</option>
                <option value="Baik">Baik</option>
                <option value="Sangat Baik">Sangat Baik</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="daya_tahan" class="form-label">Daya Tahan</label>
            <select name="daya_tahan" id="daya_tahan" class="form-control">
                <option value="Kurang">Kurang</option>
                <option value="Cukup">Cukup</option>
                <option value="Baik">Baik</option>
                <option value="Sangat Baik">Sangat Baik</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="simpan">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>