<div class="row ">
    <div class="col-8">
        <a href="<?php echo base_url('admin/index'); ?> " class="btn btn-danger">
            < BACK</a>


    </div>
    <div class="col-4">
        <h2 style="text-align: right; color:black;">เพิ่มสินค้า</h2>
    </div>
</div>
<div class="dropdown-divider"></div>
<div class="row">
    <div class="col">
        <form action="#" method="post" name="AddItemForm">
            <table class="table table-borderless">
                <tr>
                    <td><b>ชื่อสินค้า</b> <label style="color:red">*</label></td>
                    <td><input class="form-control mb-3" type="text" name="ProductName"></td>
                    <td><b>ราคาสินค้า</b> <label style="color:red"> * </label></td>
                    <td><input class="form-control mb-3" type="text" name="VenderName"></td>
                </tr>
                <tr>
                    <td><b>ผู้ขาย</b> <label style="color:red">*</label></td>
                    <td><input class="form-control mb-3" type="text" name="VenderName"></td>
                    <td><b>หมวดหมู่สินค้า</b> <label style="color:red"> * </label></td>
                    <td>
                        <div class="form-group">
                            <select class="form-control" id="Categoryinput">
                                <?php foreach ($Category as $C) { ?>
                                    <option value="<?php echo $C->{'category_id'} ?>"><?php echo $C->{'category_name'} ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td><b>ภาพสินค้า</b> <label style="color:red"> * </label></td>
                    <td><input class="form-control mb-3" type="text" name="Picture"></td>
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
                        <input class="btn btn-success btn-block my-3" type="submit" value="Save">

                    </td>
                </tr>

            </table>


        </form>
    </div>

</div>

<script type="text/javascript">

</script>