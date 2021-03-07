<div class="row">
  <div class="col-lg-6 d-none d-lg-block ">
    <img src="<?php echo base_url('assets/'); ?>images/loginbg.jpg">
  </div>
  <div class="col-lg-6">
    <div class="p-5">
      <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Welcome to KAAIKONG!</h1>
      </div>
      <form id="loginform" name="loginform" method="post" action="<?php echo base_url("user/login_out/index"); ?>">
        <div class="form-group">
          <input class="form-control" type="text" name="auth" id="auth" placeholder="Email / Phone Number">
          <small class="form-text text-danger"><?php echo form_error('auth'); ?></small>
        </div>
        <div class="form-group">
          <input class="form-control" type="password" name="pwloginfield" id="pwloginfield" placeholder="Password">
          <small class="form-text text-danger"><?php echo form_error('pwloginfield'); ?></small>
        </div>
        <div class="d-flex justify-content-between">
          <button class="btn btn-success" style="width:160px;" type="submit" name="btn-login">LOGIN</button>
          &nbsp;
          <a class="btn btn-danger" style="width:160px;" href="<?php echo base_url('Home/index'); ?>">CANCLE</a>
        </div>
      </form>
      <hr>
      <?php if ($this->session->flashdata('errorlogin')) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?php echo $this->session->flashdata('errorlogin'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php } ?>
      <a href="<?php echo base_url('user/register/index/show'); ?>">ยังไม่เป็นสมาชิก? สมัครเลย!</a>
    </div>
  </div>
</div>