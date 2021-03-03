<?php $category = $this->session->userdata('category'); ?>
<!-- header -->
<header class="section">
    <!-- header inner -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <h1><a href="<?php echo base_url("Home/index"); ?>"><strong><span class="d-lg-inline" style="font-size: 200%; color:#FFFFFF;">Kaaikong</span> </strong></a></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 input-group">
                                    <!-- Search -->
                                    <input class="form-control form-control-sm rounded-left border" type="text" id="keyword" name="keyword" value="" placeholder="What are you looking for?" aria-label="Search">
                                    <button class="rounded-right bg-white mr-1" onclick="FuntionSearch()" style="width: 50px;"><i class="fas fa-search"></i></button>
                                    <a class="btn btn-lg btn-primary" href="<?php echo base_url("cart/cartHome"); ?>" role="button"><i class="fas fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li> <a href="<?php echo base_url("Home/index"); ?>"><i class="fas fa-home"></i> Home</a> </li>
                                        <li> <a href="<?php echo base_url("Shop/index"); ?>"><i class="fas fa-store"></i> Shop</a></li>
                                        <?php
                                        if (!$this->session->userdata("user_id")) { ?>
                                            <!-- <li> 
                                            <a class="text-dark" id="loginbutton" data-toggle="modal" data-target="#LoginModal"><i class="fas fa-sign-in-alt"></i> Login</a>
                                            
                                         </li> -->
                                            <li> <a href="<?php echo base_url("user/login_out/index"); ?>"><i class="fas fa-sign-in-alt"></i> Login</li>
                                            <?php } else {

                                            if ($this->session->userdata("user_status") == 1) { ?>
                                                <li> <a href="<?php echo base_url("admin/index"); ?>"><i class="fas fa-toolbox"></i> ไปสู่แสงสว่าง</a></li>
                                            <?php } else { ?>
                                                <li> <a href="<?php echo base_url("myAccount/index"); ?>"><i class="fas fa-user-circle"></i> <?php echo $this->session->userdata("user_fname"); ?></a></li>
                                            <?php } ?>
                                            <li> <a href="<?php echo base_url("user/login_out/index/"); ?>"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                        <?php } ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header inner -->
</header>
<!-- end header -->


<script type="text/javascript">
    function FuntionSearch() {
        var hreff = "http://localhost/ci_project/Shop/Search/index/" + document.getElementById('keyword').value;
        //alert(hreff);                 
        location.replace(hreff);
    }
</script>