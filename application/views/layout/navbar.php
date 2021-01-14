<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url("indexCon/index"); ?>">
            <i class="fas fa-shopping-basket">
            </i>
            เว็บขายของ
        </a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mr-auto col-md-9">
                <form class="mx-2 my-auto d-inline w-100">
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="Search...">
                        <span class="input-group-append">
                            <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                        </span>
                    </div>
                </form>
            </div>
            <div class="navbar-nav ml-auto col-md-3">
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i><span class='minitext'> ตะกร้าสินค้า</span></a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i><span class='minitext'> เข้าสู่ระบบ</span> </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo base_url("userCon/index"); ?>">Login</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </li>
            </div>
        </div>
    </div>
</nav>