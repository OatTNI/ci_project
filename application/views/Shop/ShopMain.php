<div class="row" style="height:30px">
    <div class="col-10"></div>
    <div class="col-2 mt-2">
        <?php echo $links ?>
    </div>
</div>
<div class="card-body">
    <div class="row">

        <?php if (!isset($Product[0])) { ?>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="titlepage text-center align-items-center">
                    <h2>ไม่มีรายการสินค้า</h2>
                </div>
            </div>
            <?php } else {
            foreach ($Product as $P) {
            ?>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="sport_product">
                        <figure><img class="rounded" src="<?php echo $P->image_url ?>" alt="img" /></figure>
                        <h3><a href="<?php echo base_url("shop/Product/index/$P->product_id"); ?>" class="btn btn-primary">See</a></h3>
                        <h4 class="text-truncate"><?php echo $P->product_name; ?></h4>
                    </div>
                </div>
        <?php
            }
        } ?>
    </div>
</div>