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
                    <?php if ($this->session->flashdata('errorRegis')) { ?>
                        <th id="" colspan="3">
                            <div class="col-xl-12 col-sm-6">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <div><?= $this->session->flashdata('errorRegis') ?></div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </th>
                    <?php } ?>
                    <tr>
                        <td><b>Name</b> <label style="color:red">*</label></td>
                        <td>
                            <input class="form-control mb-3" type="text" name="firstname" placeholder="Enter Firstname">
                            <small class="form-text text-danger"><?php echo form_error('firstname'); ?></small>
                        </td>
                        <td>
                            <input class="form-control mb-3" type="text" name="lastname" placeholder="Enter Lastname">
                            <small class="form-text text-danger"><?php echo form_error('lastname'); ?></small>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Email</b>
                            <label style="color:red">*</label>
                        </td>
                        <td colspan="2">
                            <input class="form-control mb-3" type="email" name="emailfield" placeholder="Enter Email">
                            <small class="form-text text-danger"><?php echo form_error('emailfield'); ?></small>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <b>Password</b>
                            <label style="color:red"> * </label>
                        </td>
                        <td colspan="2">
                            <input class="form-control mb-3" type="password" id="passwordfield" name="passwordfield" placeholder="Enter Password">
                            <small class="form-text text-danger"><?php echo form_error('passwordfield'); ?></small>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Confirm Password</b>
                            <label style="color:red"> * </label>
                        </td>
                        <td colspan="2">
                            <input class="form-control mb-3" type="password" name="confirmpasswordfield" placeholder="Enter Password Again">
                            <small class="form-text text-danger"><?php echo form_error('confirmpasswordfield'); ?></small>
                        </td>
                    </tr>
                    <tr>
                    <tr>
                        <td>
                            <b>Phone Number</b>
                            <label style="color:red"> * </label>
                        </td>
                        <td colspan="2">
                            <input  class="form-control mb-3" type="text" name="phonenumber" placeholder="Enter Phone number">
                            <small class="form-text text-danger"><?php echo form_error('phonenumber'); ?></small>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Address</b> <label style="color:red">*</label></td>
                        <td colspan="2">
                            <textarea placeholder="XX/XX" class="form-control mb-3" rows="3" name="address"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Sub-district</b> <label style="color:red">*</label></td>
                        <td colspan="2">
                            <input name="district" id="district" class="form-control mb-3" type="text">
                        </td>
                    </tr>
                    <tr>
                        <td><b>District</b> <label style="color:red">*</label></td>
                        <td colspan="2">
                            <input  name="amphoe" id="amphoe" class="form-control mb-3" type="text">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Province</b> <label style="color:red">*</label></td>
                        <td colspan="2">
                            <input name="province" id="province" class="form-control mb-3" type="text">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Postal code</b> <label style="color:red">*</label></td>
                        <td colspan="2">
                            <input  name="zipcode" id="zipcode" class="form-control mb-3" type="text">
                        </td>
                    </tr>                    
                </table>
                <input class="btn btn-success btn-user btn-block my-3" type="submit" value="REGISTER">
            </form>
        </div>
    </div>
</div>