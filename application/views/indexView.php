<!DOCTYPE html>
<html lang="en">


<head>
    <?php $this->load->view('layout/header-css'); ?>
</head>

<body class="bg-light">
    <!--navbar -->
    <?php $this->load->view('layout/navbar') ?>
    <!-- content -->
    <div class="row no-gutters p-4 pt-4 colorgrd">
        <!--Big-->
        <div class="col-8 no-gutters">
            <!-- sale -->
        <div id="Sale" class="carousel slide carousel-fade sizeimgbig" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#Sale" data-slide-to="0" class="active bg-warning"></li>
                        <li data-target="#Sale" data-slide-to="1" class="bg-warning"></li>
                        <li data-target="#Sale" data-slide-to="2" class="bg-warning"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://uicookies.com/wp-content/uploads/2019/07/ecommerce-website-template.jpg" 
                            class="d-block w-100 sizeimgbig">
                        </div>
                        <div class="carousel-item">
                            <img src="https://thethaiger.com/wp-content/uploads/2018/05/39f9d5bd5ee7a1ecebfb8c206d0aa32e.jpg" 
                            class="d-block w-100 sizeimgbig">
                        </div>
                        <div class="carousel-item">
                            <img src="https://dist.affiliates.envato.com/uicookies/BS+ecommerce+.png" 
                            class="d-block w-100 sizeimgbig">
                        </div>
                    </div>
                        <a class="carousel-control-prev" href="#Sale" role="button" data-slide="prev">
                            <h1><i class="fas fa-chevron-left text-warning" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#Sale" role="button" data-slide="next">
                            <h1><i class="fas fa-chevron-right text-warning" aria-hidden="true"></i>
                            <span class="sr-only ">Next</span>
                        </a>
                </div>
        </div>
        <div class="col no-gutters">
            <!--1-->
            <div class="col no-gutters">
                <!-- new -->
                <div id="New" class="carousel slide carousel-fade size" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#New" data-slide-to="0" class="active bg-warning"></li>
                        <li data-target="#New" data-slide-to="1" class="bg-warning"></li>
                        <li data-target="#New" data-slide-to="2" class="bg-warning"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://uicookies.com/wp-content/uploads/2019/07/ecommerce-website-template.jpg" 
                            class="d-block w-100 size">
                        </div>
                        <div class="carousel-item">
                            <img src="https://thethaiger.com/wp-content/uploads/2018/05/39f9d5bd5ee7a1ecebfb8c206d0aa32e.jpg" 
                            class="d-block w-100 size">
                        </div>
                        <div class="carousel-item">
                            <img src="https://dist.affiliates.envato.com/uicookies/BS+ecommerce+.png" 
                            class="d-block w-100 size">
                        </div>
                    </div>
                        <a class="carousel-control-prev" href="#New" role="button" data-slide="prev">
                            <h1><i class="fas fa-chevron-left text-warning" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#New" role="button" data-slide="next">
                            <h1><i class="fas fa-chevron-right text-warning" aria-hidden="true"></i>
                            <span class="sr-only ">Next</span>
                        </a>
                </div>
            </div>
            <!--2-->
            <div class="col">
                 <!-- Recent -->
                <div id="Recent" class="carousel slide carousel-fade size" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#Recent" data-slide-to="0" class="active bg-warning"></li>
                        <li data-target="#Recent" data-slide-to="1" class="bg-warning"></li>
                        <li data-target="#Recent" data-slide-to="2" class="bg-warning"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://uicookies.com/wp-content/uploads/2019/07/ecommerce-website-template.jpg" 
                            class="d-block w-100 size">
                        </div>
                        <div class="carousel-item">
                            <img src="https://thethaiger.com/wp-content/uploads/2018/05/39f9d5bd5ee7a1ecebfb8c206d0aa32e.jpg" 
                            class="d-block w-100 size">
                        </div>
                        <div class="carousel-item">
                            <img src="https://dist.affiliates.envato.com/uicookies/BS+ecommerce+.png" 
                            class="d-block w-100 size">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#Recent" role="button" data-slide="prev">
                        <h1><i class="fas fa-chevron-left text-warning" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#Recent" role="button" data-slide="next">
                        <h1><i class="fas fa-chevron-right text-warning" aria-hidden="true"></i>
                        <span class="sr-only ">Next</span>
                    </a>
                </div>
            </div>
        </div>
</div>  
    <div class="row mx-5 mt-3">
        <div class="col-sm-6 col-md-8">
            <!-- แสดงรูป -->
            <div id="Product" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner rounded">
                    <div class="carousel-item active">
                        <img src="https://thethaiger.com/wp-content/uploads/2018/05/39f9d5bd5ee7a1ecebfb8c206d0aa32e.jpg" class="d-block w-100" alt="..." style="height: 500px; width: auto;">
                    </div>
                    <div class="carousel-item">
                        <img src="https://thethaiger.com/wp-content/uploads/2018/05/39f9d5bd5ee7a1ecebfb8c206d0aa32e.jpg" class="d-block w-100" alt="..." style="height: 500px; width: auto;">
                    </div>
                    <div class="carousel-item">
                        <img src="https://thethaiger.com/wp-content/uploads/2018/05/39f9d5bd5ee7a1ecebfb8c206d0aa32e.jpg" class="d-block w-100" alt="..." style="height: 500px; width: auto;">
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
                    <a href="#" class="text-dark">
                        <li class="list-group-item">คอมพิวเตอร์และสินค้า IT</li>
                    </a>
                    <a href="#" class="text-dark">
                        <li class="list-group-item">เกมและของเล่น</li>
                    </a>
                    <a href="#" class="text-dark">
                        <li class="list-group-item">กล้องและอุปกรณ์ถ่ายภาพ</li>
                    </a>
                    <a href="#" class="text-dark">
                        <li class="list-group-item">กีฬาและการเดินป่า</li>
                    </a>
                    <a href="#" class="text-dark">
                        <li class="list-group-item">เสื้อผ้าชาย</li>
                    </a>
                    <a href="#" class="text-dark">
                        <li class="list-group-item">เสื้อผ้าหญิง</li>
                    </a>
                    <a href="#" class="text-dark">
                        <li class="list-group-item">อาหารเสริมและสุขภาพ</li>
                    </a>
                    <a href="#" class="text-dark">
                        <li class="list-group-item">รองเท้าหญิง</li>
                    </a>
                    <a href="#" class="text-dark">
                        <li class="list-group-item">รองเท้าชาย</li>
                    </a>
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
<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: #EDF5E1">
    © 2020 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>