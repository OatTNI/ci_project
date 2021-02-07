<div class="card-body">
    <div class="row">
        <div class="col-5">
            <h2 class="card-title">
                <?=$Product->{'category_name'}?>
            </h2>
        </div>
        <div class="col-7 text-right">
            Pagegination
        </div>
    </div>
    <div class="row no-gutters">
        <?php foreach ($Product as $P) { ?>
            <div class="col-3">
                <div class="card rounded-0">
                    <img class="card-img-top img-fluid" src="<?= $P->img ?>" alt="Card image cap Responsive image" style="width: 175px; height:175px;">
                    <div class="card-body">
                        <h5 class="card-title"><strong><?= $P->product_name ?></strong></h5>
                        <p class="card-text text-truncate"><?= $P->description ?></p>
                        <a href="#" class="btn btn-primary">See</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>