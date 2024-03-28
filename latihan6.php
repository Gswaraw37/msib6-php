<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1>FORM LOGIN</h1>
<form action="" method="POST" abframeid="iframe.0.9000169463464569" abineguid="843C2D3769CE4924A4F875CF4FBD44FC">
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Username:</label> 
        <div class="col-8">
            <input id="nama" name="username" type="text" class="form-control" placeholder="Masukan Nama Anda">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Password:</label> 
        <div class="col-8">
            <input id="nama" name="password" type="password" class="form-control" placeholder="Masukan Password Anda">
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <input name="masuk" type="submit" class="btn btn-primary" value="Login">
        </div>
    </div>
</form>

<?php 
    if(isset($_POST['masuk'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        // jika user dan password cocok maka dapat login
        // selain itu ditolak
        if ($username == 'admin' && $password == 'rahasia') {
            $_SESSION['user'] = $username;
            header('location: beranda.php');
        } else {
            echo '<script>alert("Password Anda Salah, Coba Lagi!!"); </script>';
        }
    }
?>