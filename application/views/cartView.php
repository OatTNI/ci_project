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
      <?php $this->load->view('userConfig/cartLayout'); ?>        
    </div>
  </div>

  <?php $this->load->view("layout/mainfooter"); ?>
  <?php $this->load->view("layout/mainJS"); ?>
  


</body>

</html>