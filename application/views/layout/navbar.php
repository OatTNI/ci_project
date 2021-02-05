 <!-- loader  -->
 <!--    <div class="loader_bg">
        <div class="loader"><img src="<?php// echo base_url('assets/') ?>images/loading.gif" alt="#"></div>
    </div> -->
    <!-- end loader -->
    <!-- header -->
    <header class="section">
        <!-- header inner -->
        <div class="header <?=$banner?>">
            <!-- hiden Nav -->
            <div id="mySidenav" class="sidenav">
                <a>
                    <h1 class="text-light">Category</h1>
                </a>
                <a href="#">IT</a>
                <a href="#">Clothing</a>
                <a href="#">Book</a>
                <a href="javascript:void(0)" onclick="closeNav()"><i class="fas fa-times-circle"></i></a>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="d-flex justify-content-center">
                                    <h1><a href="<?php echo base_url("indexCon/index");?>"><strong>KAAIKONG</strong></a></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="input-group">
                            <input class="form-control mr-2 rounded" type="Search" placeholder="What are you looking for?" aria-label="Search">
                            <button class="btn btn-lg rounded-circle" type="submit" style="background-color:#05386B" role="button"><i class="fas fa-search text-light"></i></button>
                            <a class="btn btn-lg btn-primary ml-2" href="#" role="button"><i class="fas fa-shopping-cart"></i> My Cart</a>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="menu-area mt-2">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li> <a href="<?php echo base_url("indexCon/index");?>">Home</a> </li>
                                        <li> <a href="#">Shop</a></li>
                                        <li> <a href="#">About</a></li>
                                        <li> <a href="#" onclick="openNav()">Category</a></li>
                                        <li> <a href="#">Contact Us</a></li>
                                        <li> <a href="<?php echo base_url("userCon/index");?>"><i class="fas fa-user-circle"></i> My Account</a></li>
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
<!-- <nav class="navbar sticky-top navbar-expand-md fornav navbar-light bg-light">
    <div class="container pt-3 px-4 rounded">
        <div class="d-flex flex-column align-items-start w-100">
            <div class="input-group">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand ml-lg-2 ml-3" href="#"><i class="fas fa-shopping-basket"></i> เว็บขายของ</a>
                <input class="form-control mr-2 rounded" type="Search" placeholder="Search" aria-label="Search">
                <button class="btn" type="submit" style="background-color:#05386B"><i class="fas fa-search text-light"></i></button>
            </div>
            <div class="collapse navbar-collapse ml-lg-0 ml-3" id="navbarCollapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php //echo base_url("indexCon/index"); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> My Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-user-circle"></i> My Account</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
 -->