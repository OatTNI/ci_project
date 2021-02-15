<div class="row">
    <div class="col-xl-4">
        <a class="btn btnanSize btn-back ml-2 text-light" onclick="history.go(-1);" role="button"><i class="fas fa-backspace"></i> Back</a>
    </div>
</div>
<div class="card-body row">
    <!-- PIC -->
    <div class=" col-xl-6 col-sm-12 border-bottom brodersize d-flex justify-content-center">
        <div style="margin-top: 50px;">
            <div class="d-flex flex-column thumbnails">
                <?php $i = 1;
                foreach ($Proimg as $P) { ?>
                    <div id="f<?php echo $i ?>" class="tb <?= ($i == 1 ? "tb-active" : ""); ?>"> <img class="thumbnail-img fit-image" src="<?= $P->{'image_url'} ?>"> </div>
                <?php $i++;
                } ?>
            </div>
            <?php $i = 1;
            foreach ($Proimg as $P) { ?>
                <fieldset id="f<?php echo $i ?>1" class="<?= ($i == 1 ? "active" : ""); ?>">
                    <div class="product-pic"> <img class="pic0" src="<?= $P->{'image_url'} ?>" style="width: 500px; height:400px;"> </div>
                </fieldset>
            <?php $i++;
            } ?>
        </div>
    </div>
    <div class="col-xl-6 col-sm-12 border-bottom brodersize">
        <!-- Data -->
        <div class="row">
            <div class="col-12 mb-2">
                <h1><strong>ชื่อสินค้า : <?= $Product->{'product_name'} ?></strong></h1>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-12 border-bottom brodersize">
                <h2><strong>ราคา : <?= number_format($Product->{'price'},2) ?> บาท</strong></h2>
            </div>
        </div>
        <div class="row mb-3 mt-3">
            <div class="col-6 d-flex align-items-center">
                <h3>จำนวนชิ้น</h3>
            </div>
            <div class="col-6">
                <input type="number" value="1" min="1" max="100" step="1">
            </div>
        </div>
        <div class="row p-3 mb-5">
            <div class="col-12 d-flex justify-content-center">
                <a class="btn btnanSize btn-primary ml-2" href="#" role="button"><i class="fas fa-shopping-cart"></i> หยิบใส่ตระกร้า</a>
            </div>
        </div>
        <div class="row border-top brodersize no-gutters mb-5">
            <div class="col-xl-12 col-sm-6 mt-5">
                <h4>ผู้ผลิต : <?= $Product->{'vendor'} ?></h4>
            </div>
            <div class="col-xl-12 col-sm-6 mt-2">
                <h4>หมวดหมู่ : <?= $category->{'category_name'} ?></h4>
            </div>
        </div>
    </div>
    <!-- Data End -->
</div>
<div class="card-body row">
    <div class="border brodersize col">
        <p class="text-justify">รายละเอียดสินค้า : <?= $Product->{'description'} ?></p>
    </div>
</div>

</body>

</html>