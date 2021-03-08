<?php echo $this->session->flashdata('error'); ?>
<div class="container BGPanel my-2">
  <div class="row">
    <div class="col HDText mt-2">
        My Information
    </div>
</div>
<div class="dropdown-divider"></div>
   <div class="row" >
    <div class="col">
            <form action="<?php echo base_url("user/Information"); ?>" method="post" name="MyInformationForm">
                <table class="table table-borderless"> 
                      <tr>
                        <td><b>Name</b></td>
                        <td>
                        <?php echo form_error('firstname'); ?>
                        <input class="form-control mb-3" type="text" name="firstname" placeholder="Enter Firstname" value="<?php echo $this->session->userdata("user_fname")?$this->session->userdata("user_fname"):''; ?>"></td>
                        <td>
                        <?php echo form_error('lastname'); ?>
                        <input class="form-control mb-3" type="text" name="lastname" placeholder="Enter Lastname" value="<?php echo $this->session->userdata("user_lname")?$this->session->userdata("user_lname"):''; ?>"></td>
                      </tr>
                      <tr>
                        <td><b>Email</b></td>
                        <td colspan="2">
                        <?php echo form_error('emailfield'); ?>
                        <input class="form-control mb-3" type="email" name="emailfield" placeholder="Enter Email" value="<?php echo $this->session->userdata("user_email")?$this->session->userdata("user_email"):''; ?>"></td>
                      </tr>
                     <tr>
                        <td><b>Phone Number</b></td>
                        <td colspan="2">
                        <?php echo form_error('phonenumber'); ?>
                        <input class="form-control mb-3" type="text" name="phonenumber" placeholder="Enter Phone number" value="<?php echo $this->session->userdata("user_mobile")?$this->session->userdata("user_mobile"):''; ?>"></td>
                    </tr>
                    <tr>
                        <td><b>Address</b></td>
                        <td colspan="2">
                        <?php echo form_error('address'); ?>
                            <textarea name="address" class="form-control mb-3" rows="3" ><?php echo $this->session->userdata("user_address")?$this->session->userdata("user_address"):''; ?></textarea>
                        </td>
                    </tr>
                     
                </table>

            <input class="btn btn-lg btn-success btn-block my-3" type="submit" value="submit">
            </form>
  </div> 
</div>

</div>