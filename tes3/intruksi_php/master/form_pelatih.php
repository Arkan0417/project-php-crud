<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Pelatih</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php require "navbar.php"; ?>
    <div class="container mt-5">
        <h3 class="mb-4">Masukkan Data Pelatih</h3>
        <form action="input_pelatih.php" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Pelatih</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nama_pelatih">
        </div>
        <div class="mb-3">
            <label for="negara_asal" class="form-label">Negara Asal</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="negara_asal">
        </div>
        <button type="submit" class="btn btn-primary" name="simpan">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>