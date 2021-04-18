<?php 

require '../function/functions.php';

if( isset($_POST["registrasi"])) {
    if(registrasi($_POST) > 0 ) {
        echo "<script>
                alert('Pendaftaran admin berhasil'); 
                </script>";
                
        header("Location: login-admin.php");
        exit;

    } else {
        echo mysqli_error($koneksi);
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- my css -->
    <link rel="stylesheet" href="style-admin.css">

    <title>Daftar Admin</title>
  </head>
  <body class="bg-primary">

    <div class="col-md">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-body">
                <div class="p-3">
                    <div class="pb-3 text-center">
                        <h3>Daftar Admin</h3>
                    </div>
                    <form  action="" method="post" class="inPut">
                        <div class="form-group">
                            <input type="text" class="form-control"  name="username" id="username" aria-describedby="emailHelp" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password2" id="password2" placeholder="Konfigurasi Password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-login" name="registrasi">Daftar</button>
                    </form>
                    <div class="text-center pt-4">
                        <a href="login-admin.php">Login</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>