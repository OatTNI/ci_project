<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KAAIKONG - Dashboard</title>

    <!-- Custom fonts for this template-->
   
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url("assets/");?>css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>fontawesome-free-5.15.1/css/all.min.css">
</head>
<body>	
<div id="wrapper">
	<!-- SLIDE NAV -->
   <?php $this->load->view("layout/navDashboard");?>
	<div id="content-wrapper" class="d-flex flex-column">
			<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
				<h1>DASHBOARD</h1>
			</nav>
	    <!-- Main Content -->
	    <div id="content">
	        <!-- Begin Page Content -->
	        <div class="container-fluid">
				<!-- Collapsable Card Example -->
				<div class="card shadow mb-4">
				    <!-- Card Header - Accordion -->
				    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
				        role="button" aria-expanded="true" aria-controls="collapseCardExample">
				        <h6 class="m-0 font-weight-bold text-primary">ควย</h6>
				    </a>
				    <!-- Card Content - Collapse -->
				    <div class="collapse show" id="collapseCardExample">
				        <div class="card-body">
				           <div class="row">
							<div class="col-md-12">
								<div class="table-responsive">
									
								</div>
							</div>
						</div>
				        </div>
				    </div>
				</div>
	        </div>
	        <!-- /.container-fluid -->
	    </div>
	    <!-- End of Main Content -->
	</div>
</div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url("assets/");?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url("assets/");?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url("assets/");?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url("assets/");?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url("assets/");?>vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url("assets/");?>js/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url("assets/");?>js/demo/chart-pie-demo.js"></script>
</body>
</html>