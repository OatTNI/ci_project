<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KAAIKONG - Login</title>
    <link rel="icon" href="<?php echo base_url('assets/img') ?>/Shop.png">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css">
    <link href="<?php echo base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>admin-css.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>jquery.Thailand.js/dist/jquery.Thailand.min.css">

</head>

<body class="main-layout" style="background-color: #136af8;">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <?php $this->load->view($content);?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url('assets/') ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/') ?>js/sb-admin-2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/'); ?>jquery.Thailand.js/dependencies/JQL.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/'); ?>jquery.Thailand.js/dependencies/typeahead.bundle.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/'); ?>jquery.Thailand.js/dist/jquery.Thailand.min.js"></script>
    <script type="text/javascript">
         $.Thailand({
            database: '<?php echo base_url('assets/'); ?>jquery.Thailand.js/database/db.json', 

            $district: $('#district'),
            $amphoe: $('#amphoe'),
            $province: $('#province'),
            $zipcode: $('#zipcode'),

            onDataFill: function(data){
                console.info('Data Filled', data);
            },

            onLoad: function(){
                console.info('Autocomplete is ready!');
                $('#loader, .demo').toggle();
            }
        });
    </script>
    <?php $this->load->view("layout/mainJS"); ?>

</body>

</html>