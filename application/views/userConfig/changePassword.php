<div class="container BGPanel my-2">
  <div class="row">
    <div class="col HDText mt-2">
        Change Password
    </div>
</div>
<div class="dropdown-divider"></div>
   <div class="row " >
    <div class="col">
      <form action="<?php echo base_url("user/Password"); ?>" method="post" name="ChangePassword">
            <table class="table table-borderless"> 
              <tr>
                    <td><b>Old Password</b> <label style="color:red"> * </label></td>
                    <td colspan="2">
                    <?php echo form_error('oldpasswordfield'); ?>
                    <input class="form-control mb-3" type="password" id="oldpasswordfield" name="oldpasswordfield" placeholder="Enter Old Password"></td>
                </tr>
                 <tr>
                    <td><b>Password</b> <label style="color:red"> * </label></td>
                    <td colspan="2">
                    <?php echo form_error('passwordfield'); ?>
                    <input class="form-control mb-3" type="password" id="passwordfield" name="passwordfield" placeholder="Enter Password"></td>
                </tr>
                <tr>
                    <td><b>Confirm Password</b> <label style="color:red"> * </label></td>
                    <td colspan="2">
                    <?php echo form_error('confirmpasswordfield'); ?>
                    <input class="form-control mb-3" type="password" name="confirmpasswordfield" placeholder="Enter Password Again"></td>
                </tr>
            </table>
        <input class="btn btn-lg btn-success btn-block my-3" type="submit" value="Change Password">
        </form>
  </div> 
</div>

</div>
