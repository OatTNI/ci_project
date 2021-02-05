<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('layout/header-css'); ?>
</head>

<body class="main-layout">
    <!-- header -->
    <?php $this->load->view('layout/navbar'); ?>
    <!-- End header -->

    <div class="section">
        <div class="clothes_main section ">
            <div class="container px-2">
                <div class="card brodersize">
                <div class="row">
                    <div class="col-xl-4">
                    <a class="btn btnanSize btn-back ml-2 text-light" href="#" role="button"><i class="fas fa-backspace"></i> Back</a>
                                
                    </div>
                </div>
                    <div class="card-body row">
                        <!-- PIC -->
                        <div class=" col-xl-6 col-sm-12 border-bottom brodersize d-flex justify-content-center">
                            <div class="mb-2">
                                <div class="d-flex flex-column thumbnails">
                                    <div id="f1" class="tb tb-active"> <img class="thumbnail-img fit-image" src="https://i.imgur.com/wL1uRBk.jpg"> </div>
                                    <div id="f2" class="tb"> <img class="thumbnail-img fit-image" src="https://i.imgur.com/3NusNP2.jpg"> </div>
                                    <div id="f3" class="tb"> <img class="thumbnail-img fit-image" src="https://i.imgur.com/pXUPOVR.jpg"> </div>
                                    <div id="f4" class="tb"> <img class="thumbnail-img fit-image" src="https://i.imgur.com/xX5Qmsa.jpg"> </div>
                                </div>
                                <fieldset id="f11" class="active">
                                    <div class="product-pic"> <img class="pic0" src="https://i.imgur.com/wL1uRBk.jpg"> </div>
                                </fieldset>
                                <fieldset id="f21" class="">
                                    <div class="product-pic"> <img class="pic0" src="https://i.imgur.com/3NusNP2.jpg"> </div>
                                </fieldset>
                                <fieldset id="f31" class="">
                                    <div class="product-pic"> <img class="pic0" src="https://i.imgur.com/pXUPOVR.jpg"> </div>
                                </fieldset>
                                <fieldset id="f41" class="">
                                    <div class="product-pic"> <img class="pic0" src="https://i.imgur.com/xX5Qmsa.jpg"> </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-12 border-bottom brodersize">
                            <!-- Data -->
                            <div class="row">
                                <div class="col-12 mb-2">
                                    <h1><strong>ชื่อสินค้า : นำมาโชว์จาก Database</strong></h1>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12 border-bottom brodersize">
                                    <h2><strong>ราคา : นำมาโชว์จาก Database</strong></h2>
                                </div>
                            </div>
                            <div class="row mb-3 mt-3">
                                <div class="col-6 d-flex align-items-center">
                                    <h3>จำนวนชิ้น</h3>
                                </div>
                                <div class="col-6">
                                    <form>
                                        <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
                                        <input type="number" id="number" value="1" max="20" />
                                        <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                                    </form>
                                </div>
                            </div>
                            <div class="row p-3 mb-5">
                                <div class="col-12 d-flex justify-content-center">
                                    <a class="btn btnanSize btn-primary ml-2" href="#" role="button"><i class="fas fa-shopping-cart"></i> หยิบใส่ตระกร้า</a>
                                </div>
                            </div>
                            <div class="row border-top brodersize no-gutters">
                                <div class="col-xl-12 col-sm-6 mt-5">
                                    <h4>หมวดหมู่ : นำมาโชว์จาก Database</h4>
                                </div>
                                <div class="col-xl-12 col-sm-6 mt-2">
                                    <h4>สถานะสินค้า : นำมาโชว์จาก Database</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Data End -->
                    </div>
                    <div class="card-body row">
                        <div class="border brodersize col">
                            <p class="text-justify">ข้อมูล รายละเอียดสินค้า : นำมาโชว์จาก Database</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Address And footer start -->
    <div class="Address layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="titlepage">
                        <div class="main">
                            <h1 class="address_text text-dark">Contect</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="address_2">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="site_info">
                            <span class="info_icon"><img src="images/map-icon.png" /></span>
                            <span class="text-dark" style="margin-top: 10px;">泰日工業大学 <br>Thai-Nichi Institute of Technology</span>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="site_info">
                            <span class="info_icon">
                                <h4><i class="fas fa-address-card text-primary"></i></h4>
                            </span>
                            <span class="text-light" style="margin-top: 15px;">
                                <h1>
                                    <a href="https://www.tni.ac.th/home/"><i class="fas fa-university text-primary"></i></a>
                                    <a href="#"><i class="fab fa-facebook-square text-primary"></i></a>
                                </h1>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="site_info">
                            <span class="info_icon">
                                <h4><i class="fas fa-user-friends text-primary"></i></h4>
                            </span>
                            <span class="text-dark" style="margin-top: 21px;">TNI Student</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu_main">
            <div class="menu_text">
                <ul>
                    <li> <a href="#" class="text-dark">Home</a> </li>
                    <li> <a href="#" class="text-dark">Shop</a></li>
                    <li> <a href="#" class="text-dark">About</a></li>
                    <li> <a href="#" class="text-dark" onclick="openNav()">Category</a></li>
                    <li> <a href="#" class="text-dark">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="plant" class="footer layout_padding">
        <div class="container">
            <p>This Website As part of the subjects ITE-416,ITE-417 <a href="https://www.tni.ac.th/home/"> Thai-Nichi Institute of Technology.</a></p>
        </div>
    </div>
    <!-- Address And footer End -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
            $(".tb").hover(function() {

                $(".tb").removeClass("tb-active");
                $(this).addClass("tb-active");

                current_fs = $(".active");

                next_fs = $(this).attr('id');
                next_fs = "#" + next_fs + "1";

                $("fieldset").removeClass("active");
                $(next_fs).addClass("active");

                current_fs.animate({}, {
                    step: function() {
                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'display': 'block'
                        });
                    }
                });
            });

        });

        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        };

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        };

        function increaseValue() {
            var value = parseInt(document.getElementById('number').value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById('number').value = value;
        }

        function decreaseValue() {
            var value = parseInt(document.getElementById('number').value, 10);
            value = isNaN(value) ? 0 : value;
            value < 1 ? value = 1 : '';
            value--;
            document.getElementById('number').value = value;
        }
    </script>

</body>

</html>