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
    <div class="col-xl-6 col-sm-12 border-bottom brodersize">
        <!-- Data -->
        <?php if(count();)?>
    </div>
    <!-- Data End -->
</div>
<div class="card-body row">
    <div class="border brodersize col">
        <p class="text-justify">รายละเอียดสินค้า : <?php echo $Product->{'description'}; ?></p>
    </div>
</div>

</body>

</html>