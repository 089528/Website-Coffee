<?php
require '../function/functions.php';

$kategori = query("SELECT * FROM kategori");

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/7ac1d50764.js" crossorigin="anonymous"></script>

    <!-- my css -->
    <link rel="stylesheet" href="../style/style.css">
    
    <title>Coffee Information</title>
  </head>
  <body>

   <!-- navbar -->
   <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">       
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="#"> <i class="fas fa-coffee" style="color:white;"></i> Coffee Info <i class="fas fa-coffee" style="color:white;"></i></a>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
    
  <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid index">
      <div class="container">
          <div class="row hero">
            <div class="col-md-7">
              <h1 class="textHero">You Get Information <br> About Coffee</h1>
              <div class="line"></div>
            </div>
            <div class="col-md-5">
              <img src="../img/hero.jpg" alt="" class="imgHero">
            </div>
          </div>
      </div>  
    </div>
  <!-- akhir jumbotron -->

  <!-- content -->
  <div class="container mb-5">
    <div class="row">
        <div class="col-md-7">
            <div class="box">
              <blockquote class="text-center kutip">
                Biji kopi mengandung lebih dari 1.000 macam antioksidan dan mengatasi peradangan <br> dan menetralkan radikal bebas, antioksidan utama dalam kopi, chromogenic acid, terbukti mampu mencegah penyakit kardiovaskuler.
              </blockquote>
            </div>
            <h1 class="standart">Standart Pemeringkatan <br> Mutu Biji Kopi</h1>
            <a href="konten2.php"><button class="btn btn1 mt-3">More</button></a>
        </div>

        <div class="col-md-5">
            <img src="../img/coffee-beans.jpg" alt="" class="hero2">
        </div>
    </div>

    <div class="row">
      <div class="col-md-4 mt-2">
        <img src="../img/defect.jpg" alt="" class="hero2">
      </div>

      <div class="col-md-7">
          <h1 class="rusak biji">Beberapa Kerusakan <br> Pada Biji Kopi</h1>
          <a href="konten1.php"><button class="btn btn2 darurat mt-3">More</button></a>
      </div>
    </div>

    <div class="row">
      <div class="col-md-7">
        <h1 class="baik">Karakteristik Biji Kopi <br> Yang Baik</h1>
        <a href="konten3.php"><button class="btn btn1 mt-3">More</button></a>
      </div>

      <div class="col-md-5 mt-2">
        <img src="../img/gerson.jpg" alt="" class="hero2">
      </div>
    </div>
  </div>
  
  <!-- akhir content -->

  <!-- bottom -->
  <footer>
    <h5 class="text-center pt-4"><small>Copyright &copy; 2020 Penelitian Ilmiah</small></h5>
  </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>