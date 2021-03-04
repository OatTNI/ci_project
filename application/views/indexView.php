<!DOCTYPE html>
<html lang="en">

<head>
    <title>KAAIKONG</title>
    <link rel="icon" href="<?php echo base_url('assets/img') ?>/Shop.png">
    <?php $this->load->view('layout/header-css'); ?>
</head>

<body class="main-layout">
    <?php $this->load->view('layout/navbar'); ?>
    <!-- end header -->
    <?php $category = $this->session->userdata('category'); ?>
    <section>
        <div id="main_slider" class="section carousel slide banner-main" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#main_slider" data-slide-to="0" class="active"></li>
                <li data-target="#main_slider" data-slide-to="1"></li>
                <li data-target="#main_slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row marginii">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="width: 525px; height:441.562px;">
                                <div class="carousel-caption">
                                    <h1>Welcome to <strong class="color">Kaaikong</strong></h1>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                                    <a class="btn btn-lg btn-primary" href="<?php echo base_url("Shop/index"); ?>"><i class="fas fa-search"></i><span> Shop </span></a>
                                    <?php
                                    if (!$this->session->userdata("user_id")) { ?>
                                        <a class="btn btn-lg btn-primary" href="<?php echo base_url("user/login_out/index"); ?>" role="button"><i class="fas fa-sign-in-alt"></i><span> Login</span></a>
                                    <?php } else { ?>
                                        <a class="btn btn-lg btn-primary" href="<?php echo base_url("myAccount/index"); ?>" role="button"><i class="fas fa-user-circle"></i><span> <?php echo $this->session->userdata("user_fname"); ?></span></a></li>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $i = 0;
                foreach ($Pre as $P) {
                    if ($i == 2) {
                        break;
                    } ?>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row marginii">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="carousel-caption ">
                                        <h1><strong class="color"><?php echo $P->{'product_name'}; ?></strong></h1>
                                        <p><?php echo $P->{'description'} ?></p>
                                        <a class="btn btn-lg btn-primary" href="<?php echo base_url("Shop/Product/index/"); ?><?php echo $P->product_id; ?>" role="button">See</a>

                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="img-box ">
                                        <figure><img class="rounded-circle" src="<?php echo $P->image_url ?>" alt="img" style="width: 525px; height:441.562px;" /></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php $i++;
                } ?>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                <i class='fa fa-angle-left'></i></a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                <i class='fa fa-angle-right'></i>
            </a>
        </div>
    </section>
    <div class="clothes_main section ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="titlepage text-center ">
                        <h2><strong class="text-black"></strong>สินค้าของเรา</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php $i = 0;
                foreach ($Product as $P) {
                    if ($i == 3) {
                        break;
                    } ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="sport_product" style="border-radius: 10px;">
                            <figure><img class="rounded" src="<?php echo $P->image_url ?>" alt="img" /></figure>
                            <h3><a href="<?php echo base_url("Shop/Product/index/$P->product_id"); ?>" class="btn btn-primary">See</a></h3>
                            <h4 class="text-truncate"><?php echo $P->product_name; ?></h4>
                        </div>
                    </div>
                <?php $i++;
                } ?>
            </div>
        </div>
    </div>
    <?php $this->load->view("layout/mainfooter"); ?>
    <?php $this->load->view("layout/mainJS"); ?>
</body>

</html>