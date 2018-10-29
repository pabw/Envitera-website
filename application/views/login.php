<section class="g-bg-cover g-bg-pos-top-center g-bg-img-hero g-bg-black-opacity-0_3--after g-py-100 g-pt-150" style="background-image: url(./assets/img-temp/1920x800/login.jpg);">
    <div class="container g-pos-rel g-z-index-1">
        <div class="row justify-content-center text-center mb-5">
        <div class="col-lg-12">
            <h1 class="g-color-white text-uppercase mb-4">REGISTRASI AKUN</h1>
            <div class="d-inline-block g-width-35 g-height-2 g-bg-white mb-4"></div>
        </div>
        </div>

        <div class="row justify-content-center align-items-center no-gutters">
        <div class="col-lg-5">
            <div class="g-bg-teal g-rounded-5--lg-up g-pa-50">

            <h2 class="h3 g-color-white mb-4">Login</h2>
            <?php if(isset($_GET['info']) and $_GET['info'] != "") { ?>
                <div class="info_daftar">
                    <div class="alert alert-dismissible fade show g-bg-yellow rounded-0" role="alert">
                        <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                        <div class="media">
                        <span class="d-flex g-mr-10 g-mt-5">
                            <i class="icon-info g-font-size-25"></i>
                        </span>
                        <span class="media-body align-self-center">
                            <strong>Info!</strong> 
                            <p><?php echo str_replace("-", " ", $_GET['info']); ?></p>
                        </span>
                        </div>
                    </div>
                </div>
            <?php }?>

            <form class="g-py-15" name="kirimPesan" role="form" data-toggle="validator" class="form-horizontal" action="<?php echo base_url()?>login/auth" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12 form-group g-mb-20">
                    <input class="form-control form-control-md rounded" placeholder="Email" name="email" value="" required>
                    </div>
                    <div class="col-md-12 form-group g-mb-20">
                    <input class="form-control form-control-md rounded" type="password" placeholder="Password" name="password" value="" required>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-md btn-block u-btn-indigo rounded text-uppercase g-py-13" type="submit" role="button">Login <i class="fa fa-sign-in"></i></button>
                </div>
            </form>
            </div>
        </div>

            <form class="g-py-15" name="kirimPesan" role="form" data-toggle="validator" class="form-horizontal" action="<?php echo base_url()?>registrasi/user" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12 form-group g-mb-20">
                    <input class="form-control form-control-md rounded" name="namalengkap" type="tel" placeholder="Nama Depan" required>
                    </div>
                    <div class="col-md-12 form-group g-mb-20">
                    <input class="form-control form-control-md rounded" name="email" type="email" placeholder="Email" required>
                    </div>
                    <div class="col-md-12 form-group g-mb-20">
                    <input class="form-control form-control-md rounded" name="password" type="password" placeholder="Password" required>
                    </div>
                    <div class="col-md-12 form-group g-mb-20">
                    <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-12 g-pl-25 mb-2">
                      <input class="hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                      <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                        <i class="fa" data-check-icon=""></i>
                      </div>
                      I accept the <a href="#">Terms and Conditions</a>
                    </label>
                  </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-md btn-block u-btn-primary rounded text-uppercase g-py-13" type="submit" role="button">Register <i class="fa fa-send"></i></button>
                </div>
            </form>

            </div>
        </div>
        </div>
    </div>
</section>
