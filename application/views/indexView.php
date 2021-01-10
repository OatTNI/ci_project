<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e7d4730b9e.js" crossorigin="anonymous"></script>
    <style type = "text/css">
         body{
            font-family: 'Kanit', sans-serif;
        }
    </style>
</head>

<body class="bg-light">

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url("indexCon/index"); ?>">
            <i class="fas fa-shopping-basket">
            </i>
            เว็บขายของ
        </a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <form class="mx-2 my-auto d-inline w-100">
            <div class="input-group">
                <input type="search" class="form-control" placeholder="Search...">
                <span class="input-group-append">
                <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </span>
            </div>
        </form>
        <div class="navbar-nav">
            <li class="nav-item"><a class="nav-link mr-sm-2" href="#"><i class="fas fa-shopping-cart"></i></a></li>
            <li class="nav-item"></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo base_url("userCon/index"); ?>">Login</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Logout</a>
                </div>
            </li>
        </div>
    </div>
</nav>
<!-- แสดงรูปและหมวดหมู่ -->
<div class="row mx-5 mt-3">
    <div class="col-sm-6 col-md-8">
        <!-- แสดงรูป -->
        <div id="Product" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner rounded">
              <div class="carousel-item active">
                <img src="https://thethaiger.com/wp-content/uploads/2018/05/39f9d5bd5ee7a1ecebfb8c206d0aa32e.jpg" 
                class="d-block w-100" alt="..."  style="height: 500px; width: auto;">
              </div>
              <div class="carousel-item">
                <img src="https://thethaiger.com/wp-content/uploads/2018/05/39f9d5bd5ee7a1ecebfb8c206d0aa32e.jpg" 
                class="d-block w-100" alt="..."  style="height: 500px; width: auto;">
              </div>
              <div class="carousel-item">
                <img src="https://thethaiger.com/wp-content/uploads/2018/05/39f9d5bd5ee7a1ecebfb8c206d0aa32e.jpg" 
                class="d-block w-100" alt="..."  style="height: 500px; width: auto;">
              </div>
            </div>
            <a class="carousel-control-prev" href="#Product" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#Product" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="col-6 col-md-4">
        <!-- หมวดหมู่สินค้า -->
        <div class="card ">
            <div class="card-header">
              หมวดหมู่สินค้า
            </div>
            <ul class="list-group list-group-flush">
              <a href="#" class="text-dark"><li class="list-group-item">คอมพิวเตอร์และสินค้า IT</li></a>
              <a href="#" class="text-dark"><li class="list-group-item">เกมและของเล่น</li></a>
              <a href="#" class="text-dark"><li class="list-group-item">กล้องและอุปกรณ์ถ่ายภาพ</li></a>
              <a href="#" class="text-dark"><li class="list-group-item">กีฬาและการเดินป่า</li></a>
              <a href="#" class="text-dark"><li class="list-group-item">เสื้อผ้าชาย</li></a>
              <a href="#" class="text-dark"><li class="list-group-item">เสื้อผ้าหญิง</li></a>
              <a href="#" class="text-dark"><li class="list-group-item">อาหารเสริมและสุขภาพ</li></a>
              <a href="#" class="text-dark"><li class="list-group-item">รองเท้าหญิง</li></a>
              <a href="#" class="text-dark"><li class="list-group-item">รองเท้าชาย</li></a>
            </ul>
          </div>
    </div>
</div>
<!--แสดงสินค้าแบบย่อ ๆ 1-->
<div class="row mx-5 mt-5 mb-2">
    <div class="col">
        <div class="card border-secondary border-0">
            <div class="card-header border-0">
                <div class="row no-gutters">
                    <div class="col-sm-6 col-md-8">คอมพิวเตอร์และสินค้า IT</div>
                    <div class="col-6 col-md-4 text-right"><a href="#">ดูทั้งหมด</a></div>
                </div>
            </div>
            <div class="card-body text-secondary text-center border-0">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <img src="https://img.advice.co.th/images_nas/pic_product4/A0129858/A0129858_1.jpg" class="card-img-top" alt="คอมไง">
                            <div class="card-body">
                                <p class="card-text">
                                    ข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูล
                                </p>
                            </div>
                          </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="https://img.advice.co.th/images_nas/pic_product4/A0129858/A0129858_1.jpg" class="card-img-top" alt="คอมไง">
                            <div class="card-body">
                                <p class="card-text">
                                    ข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูล
                                </p>
                            </div>
                          </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="https://img.advice.co.th/images_nas/pic_product4/A0129858/A0129858_1.jpg" class="card-img-top" alt="คอมไง">
                            <div class="card-body">
                                <p class="card-text">
                                    ข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูล
                                </p>
                            </div>
                          </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="https://img.advice.co.th/images_nas/pic_product4/A0129858/A0129858_1.jpg" class="card-img-top" alt="คอมไง">
                            <div class="card-body">
                                <p class="card-text">
                                    ข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูล
                                </p>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</div>
<!--แสดงสินค้าแบบย่อ ๆ 2-->
<div class="row mx-5 mt-3 mb-2">
    <div class="col">
        <div class="card border-secondary border-0">
            <div class="card-header border-0">
                <div class="row no-gutters">
                    <div class="col-sm-6 col-md-8">กล้องและอุปกรณ์ถ่าย</div>
                    <div class="col-6 col-md-4 text-right"><a href="#">ดูทั้งหมด</a></div>
                </div>
            </div>
            <div class="card-body text-secondary text-center border-0">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <img src="https://www.zoomcamera.net/wp-content/uploads/2019/09/Nikon-COOLPIX-P1000-Digital-Camera-1.jpg" class="card-img-top" alt="คอมไง">
                            <div class="card-body">
                                <p class="card-text">
                                    ข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูล
                                </p>
                            </div>
                          </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="https://www.zoomcamera.net/wp-content/uploads/2019/09/Nikon-COOLPIX-P1000-Digital-Camera-1.jpg" class="card-img-top" alt="คอมไง">
                            <div class="card-body">
                                <p class="card-text">
                                    ข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูล
                                </p>
                            </div>
                          </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="https://www.zoomcamera.net/wp-content/uploads/2019/09/Nikon-COOLPIX-P1000-Digital-Camera-1.jpg" class="card-img-top" alt="คอมไง">
                            <div class="card-body">
                                <p class="card-text">
                                    ข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูล
                                </p>
                            </div>
                          </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="https://www.zoomcamera.net/wp-content/uploads/2019/09/Nikon-COOLPIX-P1000-Digital-Camera-1.jpg" class="card-img-top" alt="คอมไง">
                            <div class="card-body">
                                <p class="card-text">
                                    ข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูลข้อมูล
                                </p>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</div>
<!-- footer -->
<footer class="bg-dark text-light text-center text-lg-start mt-4 border-top border-dark">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      CI Framework Project 
      <a class="text-light" href="https://www.tni.ac.th/home/">Thai-Nichi Institute of Technology</a>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>