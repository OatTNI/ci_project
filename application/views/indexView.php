<!DOCTYPE html>
<html lang="en">

<head>
    <title>ขายของ</title>
    <?php $this->load->view('layout/header-css'); ?>
</head>

<body class="main-layout">
    <?php $this->load->view('layout/navbar'); ?>
    <!-- end header -->
    <div class="clothes_main section">
        <div class="mx-5 mt-2">
            <div id="main_slider" class="carousel slide section banner-main rounded " data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#main_slider" data-slide-to="0" class="active"></li>
                    <li data-target="#main_slider" data-slide-to="1"></li>
                    <li data-target="#main_slider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner bg-white pt-4 rounded">
                    <!-- Go to shop -->
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row marginii">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="carousel-caption">
                                        <h1>Welcome to <strong>KAAI KONG</strong></h1>
                                        <p class="text-dark">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                                        <a class="btn btn-lg btn-primary ml-2" href="<?php echo base_url("Shop/index"); ?>"><i class="fas fa-search"></i><span class=""> Shop </span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- สินค้าสองชิ้นมาจากการสุ่ม -->
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row marginii">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="carousel-caption">
                                        <h1><strong><?= $Pre[1]->{'product_name'} ?></strong></h1>
                                        <p class="text-dark"><?= $Pre[1]->{'description'} ?></p>
                                        <a class="btn btn-lg btn-primary ml-2" href="<?php echo base_url("Shop/Product/index/"); ?><?= $Pre[1]->product_id ?>"><i class="fas fa-caret-right"></i><span class=""> Go </span></a>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex align-items-end justify-content-center">
                                    <div class="img-box">
                                        <img src="<?= $Pre[1]->{'img'} ?>" alt="img" style="max-width: 280px; max-height :280px;" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row marginii">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="carousel-caption">
                                        <h1><strong><?= $Pre[0]->{'product_name'} ?></strong></h1>
                                        <p class="text-dark"><?= $Pre[0]->{'description'} ?></p>
                                        <a class="btn btn-lg btn-primary ml-2" href="<?php echo base_url("Shop/Product/index/"); ?><?= $Pre[0]->product_id ?>"><i class="fas fa-caret-right"></i><span class=""> Go </span></a>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex align-items-end justify-content-center">
                                    <div class="img-box">
                                        <img src="<?= $Pre[0]->{'img'} ?>" alt="img" style="max-width: 280px; max-height :280px;" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                    <i class='fa fa-angle-left'></i>
                </a>
                <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                    <i class='fa fa-angle-right'></i>
                </a>
            </div>
        </div>
    </div>

    <?php $this->load->view("layout/mainfooter"); ?>
    <?php $this->load->view("layout/mainJS"); ?>
</body>

</html>