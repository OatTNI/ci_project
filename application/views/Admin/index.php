<!DOCTYPE html>
<html>

<head>
	<title>Admin - KAAIKONG</title>
	<!-- bootstrap css -->
	<?php $this->load->view("layout/header-css"); ?>
	<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css">
	<link href="<?php echo base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>admin-css.css">
	<script src="<?php echo base_url('assets/') ?>js/bootstrap.bundle.min.js"></script>


</head>

<body>
	<!--NAV BAR-->
	<?php $this->load->view("layout/AdminNav"); ?>

	<div class="container mt-5 mb-5 rounded " style="background: white; padding:25px;">

		<!-- Collapsable Card Example -->
		<?php $this->load->view($content); ?>
	</div>

	<!--FOOTER-->
	<?php $this->load->view("layout/footer-js"); ?>
	<?php
	if (isset($images)) {
		if ($images == "") {
			$i = 0;
		} else {
			$i = count($images) - 1;
		}
	}else{
		$i = 0;
	}
	?>
	
	<script type="text/javascript">
		$(document).ready(function() {
			let i = <?php echo $i; ?>;
			$("#add_image").click(function() {
				if (i < 2) {

					i++;
					$("#image").append('<input class="form-control mb-3" type="text" name="Picture[]">');
				}
			});
			$("#remove_image").click(function() {
				if (i > 0) {

					i--;
					$("#image input:last-child").remove();
				}

			});

			$("#addButton").prop('disabled', true);
			$("#catName").change(function() {
				if ($("#catName").val() != '') {
					$("#addButton").prop('disabled', false);
				} else {
					$("#addButton").prop('disabled', true);
				}
			});

			$(".deleteButton").click(function() {
				var id = $(this).attr('id');
				var catID = id.split("_");
				$("#deleteConfirm" + catID[1]).click(function() {
					$.ajax({
						url: "<?php echo base_url("admins/categoryManagement/delete/"); ?>" + catID[1],
						type: "GET",
						success: function() {
							window.location = "<?php echo base_url("admin/CategoryManager"); ?>";
						}
					});
				});
			});

			$(".editData").hide();

			$(".editButton").click(function() {
				var id = $(this).attr('id');
				var catID = id.split("_");
				if ($(this).html() == "EDIT") {
					$(this).html("SAVE");
					$("#editInput" + catID[1]).show();
					$("#editText" + catID[1]).hide();
				} else {
					$(this).html("EDIT");
					$("#editInput" + catID[1]).hide();
					$("#editText" + catID[1]).show();
					var edit = $("#editInput" + catID[1]).val();

					if ($("#editInput" + catID[1]).val() != '' && $("#editInput" + catID[1]).val() != $("#editText" + catID[1]).html()) {
						$.ajax({
							url: "<?php echo base_url("admins/categoryManagement/edit/"); ?>" + catID[1] + "/" + edit,
							type: "GET",
							success: function() {
								window.location = "<?php echo base_url("admin/CategoryManager"); ?>";
							}
						});
					} else {
						$("#editInput" + catID[1]).val($("#editText" + catID[1]).html());
					}
				}
			});
		});
	</script>
</body>

</html>