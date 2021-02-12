<div class="card-body">
    <div class="row">
        <div class="col-5">
            <h2 class="card-title">
               <strong><?=$Product[0]->{'category_name'}?></strong>
            </h2>
        </div>
        <div class="col-7 text-right">
            Pagegination
        </div>
    </div>
    <div class="card-body row no-gutters">
        <?php foreach ($Product as $P) { ?>
            <div class="col-xl-3 col-lg-3 col-ms-12">
                <div class="rounded-0 border text-center">
                    <img class="card-img-top p-2 img-fluid" src="<?= $P->img ?>" alt="Card image cap Responsive image" style="width: 175px; height:175px;">
                    <div class="card-body">
                        <h5 class="card-title text-truncate"><strong><?= $P->product_name ?></strong></h5>
                        <p class="card-text text-truncate"><?= $P->description ?></p>
                        <a href="<?php echo base_url("Shop/Product/$P->product_id"); ?>" class="btn btn-primary">See</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>