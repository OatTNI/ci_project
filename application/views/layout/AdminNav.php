<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow">

    
    
    <a style="color:Black;" href="<?php echo base_url("Home/index"); ?>">กลับสู่หน้า Home</a>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-lg-inline PacificoFN" style="font-size: 200%; color:#1CC88A;">Kaaikong</span>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo base_url("user/information");?>">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Change Profile
                </a>               
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo base_url("Home/index");?>">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Go to Homepage
                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->