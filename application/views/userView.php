<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('layout/header-css'); ?>
</head>

<body class="main-layout">
    <?php $this->load->view('layout/navbar'); ?>
    <!-- end header -->
       <div class="container mb-3" style="margin-top: 200px; ">
           <div class="row" style="background: white; border-radius: 10px; padding: 10px;">
               <div class="col-md-3 col-sm-4 col-4  rounded-left" style="background: rgb(83,216,149); font-size: 150%;">
                   <ul class="Menuside">
                     <li class="" style="color:white;" >
                       Config
                     </li>
                    <div class="dropdown-divider"></div>
                     <li class="nav-item test1" >
                        <a class="nav-link" href="#"><i class="fas fa-user-circle"></i> Username</a> <!-- variable of username!!!-->
                        
                     </li>
                        
                     <li class="nav-item">
                       <a class="nav-link" href="#">History</a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" href="#">My Cart</a>
                     </li>
                   </ul>

               </div>
               <div class="col-md-9 col-sm-8 col-8 rounded-right" style="background: gray;">
                   <!--<?php $this->load->view("userConfig/changePassword");?>-->
                   <?php $this->load->view("userConfig/MyInfo");?>

               </div>
           </div>
       </div>

    <?php $this->load->view("layout/mainfooter"); ?>
    <?php $this->load->view("layout/mainnavJS");?>
   
  </body>
</html>