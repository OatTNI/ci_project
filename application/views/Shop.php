<?php $category = $this->session->userdata('category'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('layout/header-css'); ?>
    <title>KAAIKONG</title>
    <link rel="icon" href="<?php echo base_url('assets/img') ?>/Shop.png">
</head>

<body class="main-layout">

    <div class="Nav_main section">
        <?php $this->load->view('layout/navbar'); ?></div>
    <div class="clothes_main section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text-center">
                        <h2><?php if ($SeeAll == "No") { ?>
                                <?php if(isset($Product[0])){ ?>
                                <strong><?php echo $Product[0]->{'category_name'}; ?></strong>
                                <?php } ?>
                            <?php } elseif (isset($Keyword)) { ?>
                                <strong>See All <?php echo urldecode($Keyword) ?></strong>
                            <?php } elseif ($SeeAll == "Yes") { ?>
                                <strong>See All</strong>
                            <?php } ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row bg-light p-2" style="border-radius: 10px;">
                <div class="col-xl-2">
                    <h2 class="card-title ml-2 mt-2">
                        <strong>หมวดหมู่</strong>
                    </h2>
                    <div class="row d-flex justify-content-center">
                        <?php foreach ($category as $c) { ?>
                            <div class="col-xl-12 col-sm-4 my-2 ml-4">
                                <h4><a href="<?php echo base_url("Shop/Products/index/$c->category_id") ?>"><?= $c->category_name ?></a></h4>
                            </div>
                        <?php } ?>
                        <div class="col-12 my-2 ml-4">
                            <h4><a href="<?php echo base_url("Shop/indexShop") ?>">See All</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-10">
                    <?php $this->load->view($content); ?>

                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view("layout/mainfooter"); ?>
    <?php $this->load->view("layout/mainJS"); ?>
</body>

</html>