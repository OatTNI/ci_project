<div class="row">
    <div class="col-lg-12">
        <div class="p-5">
            <div class="d-flex justify-content-between">
                <a href="<?php echo base_url('user/login_out/index'); ?> " class="btn btn-danger">Back to login</a>
                <span class="HDtext" style="font-size: 175%; color:Black;">Register at Kaaikong</span>
            </div>

            <hr>
            <form action="<?php echo base_url("user/register"); ?>" method="post" name="Registerform">
                <table class="table table-borderless">
                    <tr>
                        <td><b>Name</b> <label style="color:red">*</label></td>
                        <td>
                            <input class="form-control mb-3" type="text" name="firstname" placeholder="Enter Firstname">
                            <?php echo form_error('firstname'); ?>
                        </td>
                        <td>
                            <input class="form-control mb-3" type="text" name="lastname" placeholder="Enter Lastname">
                            <?php echo form_error('lastname'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Email</b>
                            <label style="color:red">*</label>
                        </td>
                        <td colspan="2">
                            <input class="form-control mb-3" type="email" name="emailfield" placeholder="Enter Email">
                            <?php echo form_error('emailfield'); ?>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <b>Password</b>
                            <label style="color:red"> * </label>
                        </td>
                        <td colspan="2">
                            <input class="form-control mb-3" type="password" id="passwordfield" name="passwordfield" placeholder="Enter Password">
                            <?php echo form_error('passwordfield'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Confirm Password</b>
                            <label style="color:red"> * </label>
                        </td>
                        <td colspan="2">
                            <input class="form-control mb-3" type="password" name="confirmpasswordfield" placeholder="Enter Password Again">
                            <?php echo form_error('confirmpasswordfield'); ?>
                        </td>
                    </tr>
                    <tr>
                    <tr>
                        <td>
                            <b>Phone Number</b>
                            <label style="color:red"> * </label>
                        </td>
                        <td colspan="2">
                            <input class="form-control mb-3" type="text" name="phonenumber" placeholder="Enter Phone number">
                            <?php echo form_error('phonenumber'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Address</b> (Optional)</td>
                        <td colspan="2">
                            <textarea class="form-control mb-3" rows="3" name="address"></textarea>
                        </td>
                    </tr>
                </table>
                <input class="btn btn-success btn-user btn-block my-3" type="submit" value="REGISTER">
            </form>
        </div>
    </div>
</div>