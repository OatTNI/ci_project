<!DOCTYPE html>
<html lang="en">

<head>
    <title>ขายของ</title>
    <?php $this->load->view('layout/header-css'); ?>
</head>

<body class="main-layout">

    <!-- end header -->
    <div class="Nav_main section ">
        <?php $this->load->view('layout/navbar'); ?>
    </div>
    <div class="clothes_main section">
        <div class="container bg-light rounded">
            <div class="card-body row">
                <!-- PIC -->
                <div class=" col-xl-6 col-sm-12 d-flex justify-content-center  ">
                    <div class="">
                        <div class="d-flex flex-column thumbnails" style="flex-direction: inherit!important;">
                            <?php $i = 1;
                            foreach ($Proimg as $P) { ?>
                                <div id="f<?php echo $i; ?>" class="tb <?php echo ($i == 1 ? "tb-active" : ""); ?>"> <img class="thumbnail-img fit-image" src="<?php echo $P->{'image_url'}; ?>"> </div>
                            <?php $i++;
                            } ?>
                        </div>
                        <?php $i = 1;
                        foreach ($Proimg as $P) { ?>
                            <fieldset id="f<?php echo $i; ?>1" class="<?php echo ($i == 1 ? "active" : ""); ?>">
                                <div class="product-pic"> <img class="pic0" src="<?php echo $P->{'image_url'}; ?>" style="width: 500px; height:400px;"> </div>
                            </fieldset>
                        <?php $i++;
                        } ?>

                    </div>
                </div>
                <div class="col-xl-6 col-sm-12 border border-3  rounded">
                    <!-- Data -->
                    <form action="<?php echo base_url("cart/updateCart/addCart/");
                                    echo $Product->{'product_id'}; ?>" method="post">
                        <div class="row">
                            <div class="col-12 py-2">
                                <h1><strong>ชื่อสินค้า : <?php echo $Product->{'product_name'}; ?></strong></h1>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-12">
                                <h2><strong>ราคา : <?php echo number_format($Product->{'price'}, 2); ?> บาท</strong></h2>
                            </div>
                        </div>
                        <div class="row mb-3  border-bottom border-3 ">
                            <div class="col-6 d-flex align-items-center">
                                <h3>จำนวนชิ้น</h3>
                            </div>
                            <div class="col-6">
                                <input id="qty" name="qty" type="number" value="<?php echo isset($qty) ? $qty : '1'; ?>" min="1" max="100" step="1">
                            </div>
                            <div class="col-12 my-3 d-flex justify-content-center">
                                <button class="btn btnanSize btn-primary" type="submit"> หยิบใส่ตระกร้า</button>
                            </div>
                        </div>
                        <div class="row no-gutters mt-5">
                            <div class="col-xl-12 col-sm-12 ">
                                <h4>ผู้ผลิต : <?php echo $vendor[0]->{'vendor_name'}; ?></h4>
                            </div>
                            <div class="col-xl-12 col-sm-6 ">
                                <h4>หมวดหมู่ : <?php echo $category->{'category_name'}; ?></h4>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Data End -->
            </div>
            <div class="card-body row">
                <div class="col-xl-12 border border-3  rounded">
                    <p class="text-justify">รายละเอียดสินค้า : <?php echo $Product->{'description'}; ?></p>
                </div>
                <div class="col-xl-12 text-center mt-3">
                    <a href="<?php echo base_url("Shop/index"); ?> " class="btn btnanSize btn-danger">Back</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php $this->load->view("layout/mainfooter"); ?>
<?php $this->load->view("layout/mainJS"); ?>
</body>

</html>