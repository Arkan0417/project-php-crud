<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h3 class="mb-4">Selamat Datang!</h3>
        <form action="" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <button type="submit" class="btn btn-primary" name="login">Login</button>
        </form>
        <?php
        require '../koneksi.php';
        if(isset($_POST['login'])){
            $query = mysqli_query($con, "SELECT * FROM user WHERE username= '$_POST[username]' AND password= '$_POST[password]'");

            $cek = mysqli_num_rows($query);
            if($cek > 0){
                $_SESSION['username'] = $_POST['username'];
                echo "<script>alert('Login berhasil!');
                document.location='home_admin.php'</script>";
            }else{
                echo "<script>alert('Username atau password salah!');
                document.location='login.php'</script>";
            }
        }
        ?>
        <a href="../home_user.php" class="btn btn-light mt-4">Pindah ke halaman user?</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>