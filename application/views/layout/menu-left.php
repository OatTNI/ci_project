 <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url("Home/index");?>">
                    <i class="fas fa-home"  ></i>
                    <span  style=" font-size:110%">Go to Homepage</span>
                </a>
            </li>
            <hr class="sidebar-divider">

            <div class="sidebar-heading" >
                Configuration
            </div>
            <li class="nav-item active">
                <a class="nav-link"  href="<?php echo base_url("user/information");?>">
                    <i class="fas fa-user fa-sm fa-fw " ></i>
                    <span style=" font-size:110%">Change Profile</span>
                </a>
            </li>
            
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            

        </ul>
        <!-- End of Sidebar -->