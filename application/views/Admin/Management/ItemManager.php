
<div class="row ">
    <div class="col-8">
        <a href="<?php echo base_url('admin/ItemAddPanel');?>" class="btn btn-outline-success">+ เพิ่มสินค้า</a>&nbsp;
        <a href="<?php echo base_url('admin/CategoryManager');?>" class="btn btn-outline-success">จัดการหมวดหมู่</a>
    </div>
    <div class="col-4">
        <h2 style="text-align: right; color:black;">จัดการสินค้า</h2>
    </div>
</div>

<div class="dropdown-divider"></div>
<div class="row">
	<?php foreach ($Product as $P) { ?>
	    <div class="col-xl-3 col-lg-3 col-ms-12">
	        <div class="rounded-0 border text-center">
	            <img class="card-img-top p-2 img-fluid" src="<?php echo $P->image_url; ?>" alt="Card image cap Responsive image" style="width: 200px; height:200px;">
	            <div class="card-body">
	                <h5 class="card-title text-truncate"><strong><?php echo $P->product_name; ?></strong></h5>
	                <p class="card-text text-truncate"><?php echo $P->description; ?></p>
					<p class="card-text text-truncate"><?php echo $P->vendor_name; ?></p>
	                <a href="<?php echo base_url("admins/changeProduct/index/show/").($P->product_id); ?>" class="btn btn-warning">แก้ไข</a>
	                <a href="<?php echo base_url("admins/removeProduct/index/").($P->product_id); ?>" class="btn btn-danger">ลบ</a>
	            </div>
	        </div>
	    </div>
	<?php } ?>
	
</div>