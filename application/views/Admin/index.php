<!DOCTYPE html>
<html>
<head>
	<title>Admin - KAAIKONG</title>
	<!-- bootstrap css -->
	<?php $this->load->view("layout/header-css");?>
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css">
    <link href="<?php echo base_url('assets/');?>css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>admin-css.css">
    
</head>
<body>	
	<!--NAV BAR-->
	<?php $this->load->view("layout/AdminNav"); ?>
	<div class="container mb-5 rounded" style="background: white; padding:25px;">
	<!-- Collapsable Card Example -->
        <?php $this->load->view($content); ?>
	</div>

	<!--FOOTER-->
	<?php $this->load->view("layout/footer-js"); ?>
</body>
</html>