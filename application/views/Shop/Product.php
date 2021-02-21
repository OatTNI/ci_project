<div class="row">
    <div class="col-xl-4">
        <a class="btn btnanSize btn-back ml-2 text-light" onclick="history.go(-1);" role="button"><i class="fas fa-backspace"></i> Back</a>
    </div>
</div>
<div class="card-body row">
    <!-- PIC -->
    <div class=" col-xl-6 col-sm-12 d-flex justify-content-center">
        <div>
            <div class="d-flex flex-column thumbnails">
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
    <div class="col-xl-6 col-sm-12">
        <!-- Data -->
        <form action="<?php echo base_url("cart/updateCart/addCart/");
                        echo $Product->{'product_id'}; ?>" method="post">
            <div class="row">
                <div class="col-12 mb-2">
                    <h1><strong>ชื่อสินค้า : <?php echo $Product->{'product_name'}; ?></strong></h1>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-12 border-bottom brodersize">
                    <h2><strong>ราคา : <?php echo number_format($Product->{'price'}, 2); ?> บาท</strong></h2>
                </div>
            </div>
            <div class="row mb-3 mt-3">
                <div class="col-6 d-flex align-items-center">
                    <h3>จำนวนชิ้น</h3>
                </div>
                <div class="col-6">
                    <input id="qty" name="qty" type="number" value="<?php echo isset($qty) ? $qty : '1'; ?>" min="1" max="100" step="1">
                </div>
            </div>
            <div class="row p-3 mb-5">
                <div class="col-12 d-flex justify-content-center">
                    <button class="btn btnanSize btn-primary-beautyful ml-2" type="submit"><i class="fas fa-shopping-cart"></i> หยิบใส่ตระกร้า</button>
                </div>
            </div>
            <div class="row border-top brodersize no-gutters mb-5">
                <div class="col-xl-12 col-sm-6 mt-5">
                    <h4>ผู้ผลิต : <?php echo $vendor[0]->{'vendor_name'}; ?></h4>
                </div>
                <div class="col-xl-12 col-sm-6 mt-2">
                    <h4>หมวดหมู่ : <?php echo $category->{'category_name'}; ?></h4>
                </div>
            </div>
        </form>
    </div>
    <!-- Data End -->
    <div class="card-body row">
        <div class="border brodersize col">
            <p class="text-justify">รายละเอียดสินค้า : <?php echo $Product->{'description'}; ?></p>
        </div>
    </div>
</div>


</body>

</html>