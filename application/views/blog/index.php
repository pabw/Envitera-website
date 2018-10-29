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
    <link rel="stylesheet" href="<?= base_url(); ?>static/css/blog-envitera.css">
    <title>Envitera</title>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container">
            <a class="navbar-brand" href="#">Envitera</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
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
            <h1 class="display-4">Mari <span>Peduli</span> <br> Lingkungan dengan <span> Berbagi Ilmu</span>.</h1>
            <a href="" class="btn btn-success round-btn">Buat Post</a>
        </div>
    </div>
    <!-- endhero -->

    <!-- control -->
    <div class="container ">
        <form>
            <div class="form-row justify-content-center m-5">
                <div class="col-6">
                    <input type="text" class="form-control mb-2"  placeholder="Judul Post">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2">Cari Post!</button>
                </div>
            </div>
        </form>
    </div>
    <!-- end control -->

    <!-- post -->
    <div class="container-fluid post mb-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <?php foreach ($articles as $article):?>
                        <div class="row mb-4 " >
                            <div class="col">
                                <div class="card w-100">
                                    <div class="card-body post-body p-2">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <img src="<?= base_url().$article['media']; ?>" class="img-thumbnail border-0" alt="">
                                            </div>
                                            <div class="col-lg-7 desc">
                                                <h5 class="card-title"><?=article['judul'] ?></h5>
                                                <div class="info">
                                                    <span class="badge badge-light"><?=article['tanggal'] ?></span>
                                                    <a href="#" class="badge badge-primary"><?=article['username'] ?></a>
                                                    <a href="#" class="badge badge-success"><?=article['kategori'] ?></a>
                                                </div>
                                                <p class="card-text "><?=article['isi'] ?></p>
                                                <a href="<?=article['link'] ?>" class="btn btn-sm btn-success float-right">Lihat</a>
                                            </div>
                                        </div><!-- end row card-body-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>


                    <div class="row mb-4 ">
                        <div class="col">
                            <div class="card w-100">
                                <div class="card-body post-body p-2">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <img src="<?= base_url(); ?>static/img/hero.jpg" class="img-thumbnail border-0" alt="">
                                        </div>
                                        <div class="col-lg-7 desc">
                                            <h5 class="card-title">Card title</h5>
                                            <div class="info">
                                                <span class="badge badge-light">28/08/2018</span>
                                                <a href="#" class="badge badge-primary">@username</a>
                                                <a href="#" class="badge badge-success">Kategori</a>
                                            </div>
                                            <p class="card-text ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab in
                                                accusantium, laudantium amet dolorem explicabo id, quo voluptatem dicta, quidem vel
                                                pariatur similique quibusdam. Similique distinctio explicabo dolore voluptatum
                                                exercitationem laudantium, in hic labore. Dolores.</p>
                                            <a href="#" class="btn btn-sm btn-success float-right">Lihat</a>
                                        </div>
                                    </div><!-- end row card-body-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4 ">
                        <div class="col">
                            <div class="card w-100">
                                <div class="card-body post-body p-2">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <img src="<?= base_url(); ?>static/img/hero.jpg" class="img-thumbnail border-0" alt="">
                                        </div>
                                        <div class="col-lg-7 desc">
                                            <h5 class="card-title">Card title</h5>
                                            <div class="info">
                                                <span class="badge badge-light">28/08/2018</span>
                                                <a href="#" class="badge badge-primary">@username</a>
                                                <a href="#" class="badge badge-success">Kategori</a>
                                            </div>
                                            <p class="card-text ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab in
                                                accusantium, laudantium amet dolorem explicabo id, quo voluptatem dicta, quidem vel
                                                pariatur similique quibusdam. Similique distinctio explicabo dolore voluptatum
                                                exercitationem laudantium, in hic labore. Dolores.</p>
                                            <a href="#" class="btn btn-sm btn-success float-right">Lihat</a>
                                        </div>
                                    </div><!-- end row card-body-->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 cuplikan mb-5">
                    <div class="row">
                        <div class="col">
                            <div class="card w-100">
                                <div class="card-header text-center">
                                    Kabar Terkini
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <h4 class="m-auto">Judul Cuplikan</h4>
                                        <div class="info">
                                            <span class="badge badge-light">28/08/2018</span>    
                                            <a href="#" class="badge badge-primary">@username</a>
                                            <a href="#" class="badge badge-success">Kategori</a>
                                        </div>
                                        <p class="m-auto">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, exercitationem?</p>
                                        <span><a href="#" class="lanjut">lanjut</a></span>
                                    </li>
                                    <li class="list-group-item">
                                        <h4 class="m-auto">Judul Cuplikan</h4>
                                        <div class="info">
                                            <span class="badge badge-light">28/08/2018</span>    
                                            <a href="#" class="badge badge-primary">@username</a>
                                            <a href="#" class="badge badge-success">Kategori</a>
                                        </div>
                                        <p class="m-auto">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, exercitationem?</p>
                                        <span><a href="#" class="lanjut">lanjut</a></span>
                                    </li>
                                    <li class="list-group-item">
                                        <h4 class="m-auto">Judul Cuplikan</h4>
                                        <div class="info">
                                            <span class="badge badge-light">28/08/2018</span>    
                                            <a href="#" class="badge badge-primary">@username</a>
                                            <a href="#" class="badge badge-success">Kategori</a>
                                        </div>
                                        <p class="m-auto">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, exercitationem?</p>
                                        <span><a href="#" class="lanjut">lanjut</a></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div><!-- end row container-->
        </div>
    </div>
    <!-- endpost -->

    <!-- pagination -->
    <div class="container mb-5">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center ">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item "><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- endpaginaion -->



    <!-- footer -->
    <footer class="footer container-fluid shadow-lg">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <h5>Footer 1</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi perferendis quo est, distinctio
                        fugiat alias.</p>
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