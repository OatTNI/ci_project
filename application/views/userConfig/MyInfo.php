<div class="container BGPanel my-2" >
  <div class="row">
    <div class="col HDText mt-2">
        My Information
    </div>
</div>
<div class="dropdown-divider"></div>
   <div class="row " >
    <div class="col">
            <form action="#" method="post" name="MyInformationForm">
                <table class="table table-borderless"> 
                      <tr>
                        <td><b>Name</b></td>
                        <td><input class="form-control mb-3" type="text" name="firstname" placeholder="Enter Firstname" value="<?php echo $this->session->userdata("user_fname")?$this->session->userdata("user_fname"):''; ?>"></td>
                        <td><input class="form-control mb-3" type="text" name="lastname" placeholder="Enter Lastname" value="<?php echo $this->session->userdata("user_lname")?$this->session->userdata("user_lname"):''; ?>"></td>
                      </tr>
                      <tr>
                        <td><b>Email</b></td>
                        <td colspan="2"><input class="form-control mb-3" type="email" name="emailfield" placeholder="Enter Email" value="<?php echo $this->session->userdata("user_email")?$this->session->userdata("user_email"):''; ?>"></td>
                      </tr>
                     <tr>
                        <td><b>Phone Number</b></td>
                        <td colspan="2"><input class="form-control mb-3" type="text" name="phonenumber" placeholder="Enter Phone number" value="<?php echo $this->session->userdata("user_mobile")?$this->session->userdata("user_mobile"):''; ?>"></td>
                    </tr>
                    <tr>
                        <td><b>Address</b></td>
                        <td colspan="2">
                            <textarea class="form-control mb-3" rows="3" ><?php echo $this->session->userdata("user_address")?$this->session->userdata("user_address"):''; ?></textarea>
                        </td>
                    </tr>
                     
                </table>

            <input class="btn btn-success btn-block my-3" type="submit" value="submit">
            </form>
  </div> 
</div>

</div>