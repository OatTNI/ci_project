<div class="row">
	<div class="col">
		<label style="font-size:150%; color:black;">เพิ่มสินค้า</label>
	</div>
</div>
<div class="dropdown-divider"></div>
<div class="row">
	<form action="#" method="post" name="AddItemForm">
        <table class="table table-borderless">
            <tr>
                <td><b>ชื่อสินค้า</b> <label style="color:red">*</label></td>
                <td><input class="form-control mb-3" type="text" name="ProductName"></td>
                <td><b>ราคาสินค้า</b> <label style="color:red"> * </label></td>
                <td><input class="form-control mb-3" type="text" name="VenderName" ></td>
            </tr>
            <tr>
                <td><b>ผู้ขาย</b> <label style="color:red">*</label></td>
                <td><input class="form-control mb-3" type="text" name="VenderName" ></td>
                <td><b>หมวดหมู่สินค้า</b> <label style="color:red"> * </label></td>
                <td><input class="form-control mb-3" type="text" name="Categoryinput" ></td>

            </tr>
            <tr>
                <td><b>ภาพสินค้า</b> <label style="color:red"> * </label></td>
                <td ><input class="form-control mb-3" type="text" name="Picture" ></td>
                <td colspan="2"><a href="#" class="btn btn-outline-success">+ เพิ่มรูป</a></td>
            </tr>
            <tr>
                <td><b>คำอธิบายสินค้า</b> <label style="color:red"> * </label></td>
                <td colspan="3">
                    <textarea class="form-control mb-3" rows="3" name="address"></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="3">
                    <input class="btn btn-success  my-3" type="submit" value="Save">
                    <a href="<?php echo base_url('admin/index');?> "class="btn btn-danger my-3">Cancle</a>
                </td>
            </tr>

        </table>

        
    </form>
	
</div>