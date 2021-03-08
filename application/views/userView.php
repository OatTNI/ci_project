<!DOCTYPE html>
<html lang="en">

<head>
  <title>My Account</title>
  <link rel="icon" href="<?php echo base_url('assets/img') ?>/Shop.png">
  <?php $this->load->view('layout/header-css'); ?>
</head>

<body class="main-layout">

  <?php $userID = $this->session->userdata('user_id'); ?>
  <!-- end header -->
  <div class="Nav_main section ">
    <?php $this->load->view('layout/navbar'); ?>
  </div>
  <div class="clothes_main section ">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="titlepage text-center">
            <h2>My Account
            </h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row border border-3" style="background: white; border-radius: 10px; padding: 10px; margin-bottom: 10px;">
        <div class="col-md-3 col-sm-4 col-4 rounded-left" style="background: #007bff; font-size: 150%; ">
          <ul class="Menuside">
            <li class="" style="color:white;">
              Config
              <div class="dropdown-divider border-3"></div>
            </li>
            <li class="nav-item MAMenu">
              <a class="nav-link text-light" href="<?php echo base_url('MyAccount/index'); ?>"><i class="fas fa-user-circle"></i> Username</a> <!-- variable of username!!!-->

            </li>
            <li class="nav-item MAMenu" id="navbtm">
              <a class="nav-link text-light" href="<?php echo base_url('MyAccount/changePassword'); ?>"><i class="fas fa-key"></i> Change Password</a>
            </li>
            <li class="nav-item MAMenu">
              <a class="nav-link text-light" href="<?php echo base_url("MyAccount/History/$userID"); ?>"><i class="fas fa-history"></i> History</a>
            </li>


          </ul>

        </div>
        <div class="col-md-9 col-sm-8 col-8 rounded-right" style="background: gray; ">
          <?php $this->load->view($content); ?>

        </div>

      </div>
    </div>
  </div>
  <?php $this->load->view("layout/mainfooter"); ?>
  <?php $this->load->view("layout/mainJS"); ?>

</body>

</html>