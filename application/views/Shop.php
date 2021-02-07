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
            <div class="row">
                <div class="col-xl-2 card rounded-0">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <h2 class="card-title">
                                หมวดหมู่</h2>
                            <?php foreach ($category as $c) { ?>
                                <div class="col-12 my-2">
                                    <a href="<?= base_url("Shop/index/$c->category_id") ?>"><?= $c->category_name ?></a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-10 card rounded-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <h2 class="card-title">
                                    ชื่อหมวดหมู่สินค้า</h2>
                            </div>
                            <div class="col-9 text-right">
                                Pagegination
                            </div>
                        </div>
                        <div class="row">
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view("layout/mainfooter"); ?>
    <?php $this->load->view("layout/mainJS"); ?>
</body>

</html>