<div class="card my-2">
  <div class="card-header">
   	<h1>My Cart</h1>
  </div>
  <div class="card-body">
  	    <form action="#" method="post" name="CartForm">
  	        <table class="table table-striped"> 
  	        	<!--Header-->
              <tr>
                <th >รูปสินค้า</th>
                <th>ชื่อสินค้า</th>
                <th width="150">จำนวน</th>
                <th >ราคารวม</th>
                <th></th>
              </tr>	     
              <!--Content-->
              <tr>
                <td>รูปสินค้า</td>
                <td>ชื่อสินค้า</td>
                <td><input type="number" value="9" min="0" max="100" step="1" ></td>
                <td>ราคารวม</td>
                <td><a href="#" class="btn btn-danger" style="width: 50px;">ลบ</a></td>
              </tr>   

  	       	</table>
            <div style="float:right;">
              <button class="btn btn-warning">ล้าง</button>
              <button class="btn btn-danger">ปิด</button>
              <button class="btn btn-success">Check Out!!</button>

            </div>
  			
  	    </form>
  </div>
</div>