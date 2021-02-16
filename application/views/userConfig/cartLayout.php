<div class="container BGPanel my-2">
  <div class="row">
    <div class="col HDText mt-2">
      My Cart
    </div>
  </div>
  <div class="dropdown-divider"></div>
  <div class="row ">
    <div class="col">
      <form action="<?php echo base_url("userCon/checkOut"); ?>" method="post" name="CartForm">
        <table class="table table-striped">
          <!--Header-->
          <tr>
            <th>รูปสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th width="150" class="text-center">จำนวน</th>
            <th class="text-center">ราคารวม</th>
            <th></th>
          </tr>
          <!--Content-->
          <?php foreach ($cart as $c) { ?>
            <tr>
              <td><img class="card-img-top p-2 img-fluid" src="<?php echo $c->{'img'}; ?>" alt="Card image cap Responsive image" style="width: 175px; height:175px;"></td>
              <td><?php echo $c->{'product_name'}; ?></td>
              <td><input type="number" value="<?php echo $c->{'qty'}; ?>" min="1" max="20" step="1"></td>
              <td class="text-center">ราคารวม</td>
              <td><a href="<?php echo base_url("cart/delete/deleteCart/");
                            echo $c->{'product_id'}; ?>" class="btn btn-danger" style="width: 50px;">ลบ</a></td>
            </tr>
          <?php } ?>
        </table>

        <div style="float:right; margin-bottom: 10px;">
          <button class="btn btn-warning">ล้าง</button>
          <!-- <button class="btn btn-danger">ปิด</button> -->
          <button class="btn btn-success">Check Out!!</button>

        </div>

      </form>
    </div>
  </div>

</div>