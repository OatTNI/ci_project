<div class="row ">
    <div class="col-8">
        <a href="<?php echo base_url('admin/index'); ?> " class="btn btn-danger">
            BACK</a>
<?php echo $this->session->flashdata("error"); ?>


    </div>
    <div class="col-4">
        <h2 style="text-align: right; color:black;">เพิ่มสินค้า</h2>
    </div>
</div>
<div class="dropdown-divider"></div>
<div class="row">
    <div class="col">
        <form action="<?php echo base_url("admins/addProduct"); ?>" method="post" name="AddItemForm">
            <table class="table table-borderless">
                <tr>
                    <td><b>ชื่อสินค้า</b> <label style="color:red">*</label></td>
                    <td>
                        <?php echo form_error("ProductName"); ?>
                        <input class="form-control mb-3" type="text" name="ProductName">
                    </td>
                    <td><b>ราคาสินค้า</b> <label style="color:red"> * </label></td>
                    <td>
                        <?php echo form_error("ProductPrice"); ?>
                        <input class="form-control mb-3" type="number" name="ProductPrice">
                    </td>
                </tr>
                <tr>
                    <td><b>ผู้ขาย</b> <label style="color:red">*</label></td>
                    <td>
                        <div class="form-group">
                            <?php echo form_error("VendorName"); ?>
                            <select name="VendorName" class="form-control" id="VendorName">
                                <?php foreach ($vendor as $v) { ?>
                                    <option value="<?php echo $v->{'vendor_id'} ?>"><?php echo $v->{'vendor_name'} ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </td>
                    <td><b>หมวดหมู่สินค้า</b> <label style="color:red"> * </label></td>
                    <td>
                        <div class="form-group">
                            <?php echo form_error("category"); ?>
                            <select name="category" class="form-control" id="Categoryinput">
                                <?php foreach ($Category as $C) { ?>
                                    <option value="<?php echo $C->{'category_id'} ?>"><?php echo $C->{'category_name'} ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td><b>ภาพสินค้า</b> <label style="color:red"> * </label></td>
                    <td>
                        <span id="image">
                            <?php echo form_error("Picture[]"); ?>
                            <input class="form-control mb-3" type="text" name="Picture[]"></span>
                    </td>
                    <td colspan="2">
                        <a id="add_image" href="#" class="btn btn-outline-success">+ เพิ่มรูป</a>
                        <a id="remove_image" href="#" class="btn btn-outline-danger">- ลบรูป</a>
                    </td>

                </tr>
                <tr>
                    <td><b>คำอธิบายสินค้า</b> <label style="color:red"> * </label></td>
                    <td colspan="3">
                        <?php echo form_error("description"); ?>
                        <textarea class="form-control mb-3" rows="3" name="description"></textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="3">
                        <input class="btn btn-success btn-block my-3" type="submit" value="Save">

                    </td>
                </tr>

            </table>
        </form>
    </div>

</div>