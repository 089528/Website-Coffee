<?php 
require '../function/functions.php';

$kontens = query(" SELECT * FROM konten WHERE kategori = 'Kerusakan Biji Kopi' ORDER BY id ASC ");

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/7ac1d50764.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="../style/style.css">
    <title>Kerusakan Pada Biji Kopi</title>
  </head>
  <body style="background-color:#EDEDED;">

    <!-- navbar -->
   <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">       
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="index.php"><i class="fas fa-coffee" style="color:white;"></i> Coffee Info <i class="fas fa-coffee" style="color:white;"></i></a>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid index">
      <div class="container">
          <div class="row hero">
            <div class="col-md-7">
              <h1 class="textHero">Informasi Kerusakan Pada Biji Kopi</h1>
              <div class="line"></div>
            </div>
            <div class="col-md-5">
              <img src="../img/defect.jpg" alt="" class="imgHero">
            </div>
          </div>
      </div>  
    </div>
    <!-- end jumbotron -->

    <!-- konten -->
    <div class="container">
      <div class="card">
        <div class="card-body">
          <h2 class="judulKonten1">Kerusakan Pada Biji Kopi</h2>
          <p class="opening">
          Mutu fisik dan citarasa kopi ditentukan oleh bahan tanam, budidaya, cara panen, pengolahan, dan penyimpanannya. Penyimpanan kopi dalam jangka waktu lama membuat mutu kopi biji mampu mengalami perubahan baik bersifat fisik, kimiawi, biologis ataupun organoleptik. Aspek yang menyebabkan perubahan Mutu Kopi bersumber dari internal (biji kopi itu sendiri) atau bersifat eksternal yang bersumber terhadap aspek faktor luar. <br><br>
          Berikut ini adalah beberapa jenis kerusakan pada biji kopi dan penyebabnya.
          </p>
          <?php foreach( $kontens as $ket ):?>
                  <div class="lineJudul opening">
                      <h5 class="pl-3 pt-1"><?php echo $ket["judul"] ;?></h5>
                  </div>
                  <div class="row mb-4">
                    <div class="col-md-4">
                      <img src="../img/<?php echo $ket["gambar"]; ?>" alt="" class="mt-3 imgKonten">
                    </div>
                    <div class="col-md-8">
                      <div class="mt-3 opening">
                        <?php echo $ket["konten"] ;?>
                      </div>
                    </div>
                  </div>
          <?php endforeach; ?>
          </div>
        </div>
    </div>
    <!-- akhir konten -->

    <?php include 'footer.php'; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>