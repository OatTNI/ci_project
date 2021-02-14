<div class="row">
    		<div class="col">
    			<a href="#" class="btn btn-outline-success">+ เพิ่มสินค้า</a>&nbsp;
    			<a href="#" class="btn btn-outline-success">จัดการหมวดหมู่</a>
    		</div>
        </div>
        <div class="dropdown-divider"></div>
        <div class="row">
        	<?php foreach ($Product as $P) { ?>
        	    <div class="col-xl-3 col-lg-3 col-ms-12">
        	        <div class="rounded-0 border text-center">
        	            <img class="card-img-top p-2 img-fluid" src="<?= $P->img ?>" alt="Card image cap Responsive image" style="width: 200px; height:200px;">
        	            <div class="card-body">
        	                <h5 class="card-title text-truncate"><strong><?= $P->product_name ?></strong></h5>
        	                <p class="card-text text-truncate"><?= $P->description ?></p>
        	                <a href="#" class="btn btn-warning">แก้ไข</a>
        	                <a href="#" class="btn btn-danger">ลบ</a>
        	            </div>
        	        </div>
        	    </div>
        	<?php } ?>
        	
        </div>