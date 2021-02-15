<?php $category = $this->session->userdata('category'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('layout/header-css'); ?>
    <title>Document</title>
</head>

<body class="main-layout">
    <?php $this->load->view('layout/navbar'); ?>

    <div class="section clothes_main section">
        <div class="container">
            
            <div class="row no-gutters">
                <div class="col-xl-2 card rounded-0">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <h2 class="card-title">
                                <strong>หมวดหมู่</strong>
                            </h2>
                            <?php foreach ($category as $c) { ?>
                                <div class="col-12 my-2">
                                    <a href="<?php echo base_url("Shop/Products/index/$c->category_id") ?>"><?= $c->category_name ?></a>
                                </div>
                            <?php } ?>
                            <div class="col-12 my-2">
                                <a href="<?php echo base_url("Shop/index") ?>">See All</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-10 card rounded-0">
                    <?php $this->load->view($content); ?>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view("layout/mainfooter"); ?>
    <?php $this->load->view("layout/mainJS"); ?>
</body>

</html>