<div class="card my-2">
  <div class="card-header">
   	<h1>Checkout!!</h1>
  </div>
  <div class="card-body">
  	    <form action="<?= base_url("cart/checkout/makeanOrder");?>" method="post" id="makeorderform">
  	        <table class="table table-striped"> 
  	        	<!--Header-->
              <tr>
                <th >รูปสินค้า</th>
                <th>ชื่อสินค้า</th>
                <th width="150">จำนวน</th>
                <th >ราคารวม</th>
              </tr>	     
              <!--Content-->

              <?php foreach ($cart as $c) { ?>
              <tr>
                <td><img class="card-img-top p-2 img-fluid" src="<?php echo $c->image_url; ?>" alt="Card image cap Responsive image" style="width: 175px; height:175px;"></td>
                <td><?=$c->product_name;?></td>
                <td><?=$c->qty;?></td>
                <td><?=$c->sum_row;?></td>
              </tr>   
              <?php } ?>
  	       	</table>
            <!--Summary-->
            <div class="row my-3" style=" padding: 10px; font-size: 20px; margin:1px; background: #f9f9f9;">
              
              <div class="col" style="text-align: right;"><b><?=$cart[0]->sum_total;?></b></div>
            </div>
        </form>

            <div style="float:right;">
              <a class="btn btn-danger" href="<?=base_url("cart/");?>">ปิด</a>
              <button type="submit" form="makeorderform" class="btn btn-success">ชำระเงิน</button>
            </div>
  			

  </div>
</div>