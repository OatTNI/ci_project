<!DOCTYPE html>
<html lang="en">

<head>
  <title>My Account</title>
  <?php $this->load->view('layout/header-css'); ?>
</head>

<body class="main-layout">
  <?php $this->load->view('layout/navbar'); ?>
  <!-- end header -->
  <div class="clothes_main section">
    <div class="container mb-3">
      <div class="row" style="background: white; border-radius: 10px; padding: 10px;">        
          <?php $this->load->view("userConfig/cartLayout"); ?>       
      </div>
    </div>
  </div>

  <?php $this->load->view("layout/mainfooter"); ?>
  <?php $this->load->view("layout/mainJS"); ?>

</body>

</html>