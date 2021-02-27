<!-- Modal -->
<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="LoginModalLabel">Login</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <div class="modal-body">       
       <form action="<?php echo base_url("user/login_out/index"); ?>" method="post" name="loginform" id="loginform">
           <label for="auth">Email or Phone Number</label>
           <input class="form-control mb-2" type="text" name="auth" id="auth" placeholder="Email / Phone Number">
          
           <br>
           <label for="pwloginfield">password</label>
           <input class="form-control" type="password" name="pwloginfield" id="pwloginfield">
          
           <br>
           <button class="btn btn-success btn-block my-3" type="submit" name="submitButton">Login</button>
       </form>
       <a href="<?php echo base_url('user/register/index/show');?>"><i class="fas fa-edit"></i> ยังไม่เป็นสมาชิก? สมัครเลย!</a>
     </div>
    </div>
  </div>
</div>
