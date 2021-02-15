 <?php $category=$this->session->userdata('category'); ?>
 <!-- loader  -->
 <!--    <div class="loader_bg">
        <div class="loader"><img src="<?php// echo base_url('assets/') ?>images/loading.gif" alt="#"></div>
    </div> -->
 <!-- end loader -->
 <!-- header -->
 <div class="loader_bg" style="background-color:wihte;">
     <div class="loader"><img src="<?php echo base_url('assets/') ?>images/loading.gif" alt="#" style="width: 10%; height:auto;"></div>
 </div>
 <header class="section bg-dark">
     <!-- header inner -->
     <div class="header banner-main">
         <!-- loader  -->
         <!-- end loader -->
         <!-- hiden Nav -->
         <div id="mySidenav" class="sidenav">
             <a>
                 <h1 class="text-light">Category</h1>
             </a>
             <?php foreach ($category as $c) { ?>
                 <a href="<?php echo base_url("Shop/Products/$c->category_id"); ?>"><?php echo $c->category_name; ?></a>
             <?php } ?>
             <a href="<?php echo base_url("Shop/index"); ?>">See All</a>
             <a href="javascript:void(0)" onclick="closeNav()"><i class="fas fa-times-circle"></i></a>
         </div>
         <div class="container">
             <div class="row">
                 <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                         <div class="center-desk">
                             <div class="d-flex justify-content-center">
                                 <h1><a href="<?php echo base_url("home/index"); ?>"><strong>KAAIKONG</strong></a></h1>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="input-group">
                         <input class="form-control mr-2 rounded" type="Search" placeholder="What are you looking for?" aria-label="Search">
                         <button class="btn btn-lg rounded-circle" type="submit" style="background-color:#05386B" role="button"><i class="fas fa-search text-light"></i></button>
                         <a class="btn btn-lg btn-primary ml-2" href="<?php echo base_url("userCon/MyCart"); ?>" role="button"><i class="fas fa-shopping-cart"></i> My Cart</a>
                     </div>
                 </div>
                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                     <div class="menu-area mt-2">
                         <div class="limit-box">
                             <nav class="main-menu">
                                 <ul class="menu-area-main">
                                     <li> <a class="text-dark" href="<?php echo base_url("home/index"); ?>">Home</a> </li>
                                     <li> <a class="text-dark" href="<?php echo base_url("Shop/index"); ?>">Shop</a></li>
                                     <li> <a class="text-dark" href="#" onclick="openNav()">Category</a></li>
                                     <li> <a class="text-dark" href="<?php echo base_url("user/login_out/index/show"); ?>">Login</a></li>
                                     <li> <a class="text-dark" href="<?php echo base_url("myAccount/index"); ?>"><i class="fas fa-user-circle"></i> My Account</a></li>
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