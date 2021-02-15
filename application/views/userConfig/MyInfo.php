<div class="card my-2">
  <div class="card-header">
   	<h1>My Information </h1>
  </div>
  <div class="card-body">
  	    <form action="#" method="post" name="MyInformationForm">
  	        <table class="table table-borderless"> 
  	        	<tr>
                <?php if(!$this->session->userdata("user_id")) { ?>
                  <tr>
                    <td><b>Name</b></td>
                    <td><input class="form-control mb-3" type="text" name="firstname" placeholder="Enter Firstname"><?php echo $this->session->userdata("user_fname"); ?></td>
                    <td><input class="form-control mb-3" type="text" name="lastname" placeholder="Enter Lastname"><?php echo $this->session->userdata("user_lname"); ?></td>
                  </tr>
                  <tr>
                    <td><b>Email</b></td>
                    <td colspan="2"><input class="form-control mb-3" type="email" name="emailfield" placeholder="Enter Email"><?php echo $this->session->userdata("user_email"); ?></td>
                  </tr>
                 <tr>
                    <td><b>Phone Number</b></td>
                    <td colspan="2"><input class="form-control mb-3" type="text" name="phonenumber" placeholder="Enter Phone number"><?php echo $this->session->userdata("user_mobile"); ?></td>
                </tr>
                <tr>
                    <td><b>Address</b></td>
                    <td colspan="2">
                        <textarea class="form-control mb-3" rows="3" name="address"><?php echo $this->session->userdata("user_address"); ?></textarea>
                    </td>
                </tr>

                <?php } 
                else{ ?>
                  <tr>
                    <td><b>Name</b></td>
                    <td><input class="form-control mb-3" type="text" name="firstname" placeholder="Enter Firstname"></td>
                    <td><input class="form-control mb-3" type="text" name="lastname" placeholder="Enter Lastname"></td>
                  </tr>
                  <tr>
                    <td><b>Email</b></td>
                    <td colspan="2"><input class="form-control mb-3" type="email" name="emailfield" placeholder="Enter Email"></td>
                  </tr>
                 <tr>
                    <td><b>Phone Number</b></td>
                    <td colspan="2"><input class="form-control mb-3" type="text" name="phonenumber" placeholder="Enter Phone number"></td>
                </tr>
                <tr>
                    <td><b>Address</b></td>
                    <td colspan="2">
                        <textarea class="form-control mb-3" rows="3" name="address"></textarea>
                    </td>
                </tr>
                <?php } ?>
  	             
  	       	</table>

  			<input class="btn btn-success btn-block my-3" type="submit" value="submit">
  	    </form>

  </div>
</div>