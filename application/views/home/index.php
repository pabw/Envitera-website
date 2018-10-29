<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>static/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>static/css/style-envitera.css">
    <title>Envitera</title>
  </head>
  <body>
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container">
        <a class="navbar-brand" href="#">Envitera</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="#">Beranda <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Blog</a>
            <a class="nav-item nav-link" href="#">Lapor</a>
            <a class="nav-item btn btn-success round-btn" href="#">Daftar</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- endnavbar -->

    <!-- hero -->
    <div class="hero jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4"><?=$slogan ?></h1>
        <a href="" class="btn btn-success round-btn">Bergabung</a>
      </div>
    </div>
    <!-- endhero -->

    <!-- services -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-10 service">
          <div class="row mt-1">
            
            <?php foreach ($services as $service) : ?>
              <div class="col-lg">
                <img src="<?= base_url().$service['media']; ?>" alt="24h" class="float-left mr-3">
                <h4><?= $service["judul"]  ?></h4>
                <p><?= $service["desk"] ?></p>
              </div>
            <?php endforeach; ?>

          </div>
        </div>
      </div>
    </div>
    <!-- endservices -->

    <!--content  -->
    <div class="container content ">
      <div id="contentslider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

          <?php $first = true; ?>
          <?php foreach ($contents as $content) : ?>
            <!-- mengaktifkan gambar yang pertama, gambar berikutnya dilakukan oleh bootstrap -->
            <?php if($first): ?>
              <div class="carousel-item active">
              <?php $first=false; ?>
            <?php else: ?>
              <div class="carousel-item ">
            <?php endif; ?>
              <div class="row justify-content-center">
                <div class="col-lg-6">
                  <img src="<?= base_url().$content['media']; ?>" class="img-fluid" alt="">
                </div>
                <div class="col-lg-4 desc">
                  <h4><?= $content["judul"]; ?></h4>
                  <p><?= $content["isi"]; ?></p>
                  <a href="<?= $content["link"]; ?>" class="btn btn-success round-btn">Lihat</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

        </div> <!--end carousel-inner-->
        <!-- kontrol untuk next dan prev kontent -->
        <a class="carousel-control-prev" href="#contentslider" role="button" data-slide="prev">
          <span class="arrow prev" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#contentslider" role="button" data-slide="next">
          <span class="arrow next" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
    <!-- endcontent -->

    <!-- report -->
    <div class="container-fluid report">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-10">
            <h5 class="head text-center">
              Laporan Terbaru
            </h5>
            <div class="row justify-content-center">
  
              <?php foreach ($reports as $report) :?>
                <div class="col-lg-3">
                  <div class="card shadow">
                    <div class="card-body">
                      <h5 class="card-title text-truncate"><?=$report["judul"]  ?></h5>
                      <p class="card-text text-wrap" ><?=$report["isi"]  ?></p>
                      <a href="<?=$report['link']  ?>" class="btn round-btn">Lebih lanjut</a>
                    </div>
                  </div>
                </div>
              <?php endforeach;?>
              
            </div>
          </div>
  
        </div>
      </div>
    </div>
    <!-- endreport -->

    <!-- register -->
    <div class="register jumbotron jumbotron-fluid text-center">
        <span>Bergabung bersama kami dengan <a class=" btn round-btn"> Daftar</a>Sekarang!</span>
    </div>
    <!-- endregister -->

    <!-- footer -->
    <footer class="footer container-fluid shadow-lg">
      <div class="container">
        <div class="row">
          <div class="col-lg">
            <h5>Footer 1</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi perferendis quo est, distinctio fugiat alias.</p>
          </div>
          <div class="col-lg ml-auto">
            <h5>Footer 2</h5>
            <ul>
              <li>Footer Desc here</li>
              <li>Footer Desc here</li>
              <li>Footer Desc here</li>
              <li>Footer Desc here</li>
            </ul>
          </div>
        </div>
        <div class="row justify-content-center">
          <span>2018 &copy; Envitera.</span>
        </div>
      </div>
    </footer>
    <!-- endfooter -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url(); ?>static/js/jquery-3.2.1.slim.min.js"></script>
    <script src="<?= base_url(); ?>static/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>static/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>static/js/script-envitera.js"></script>
  </body>
</html>