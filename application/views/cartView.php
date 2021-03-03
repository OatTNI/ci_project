<!DOCTYPE html>
<html lang="en">

<head>
  <title>My Account</title>
  <?php $this->load->view('layout/header-css'); ?>
</head>

<body class="main-layout">
  <?php $this->load->view('layout/navbar'); ?>
  <div class="Nav_main section"></div>
  <!-- end header -->
  <div class="clothes_main section">
    <div class="container mb-3">
      <?php $this->load->view($content); ?>
    </div>
  </div>

  <?php $this->load->view("layout/mainfooter"); ?>
  <?php $this->load->view("layout/mainJS"); ?>


</body>

</html>