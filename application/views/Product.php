<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product Name</title>
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
                            <a class="btn btnanSize btn-back ml-2 text-light" onclick="history.go(-1);" role="button"><i class="fas fa-backspace"></i> Back</a>

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
    <?php $this->load->view("layout/mainfooter"); ?>
    <?php $this->load->view("layout/mainnavJS"); ?>

    <script>
        $(document).ready(function() {

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
        });
    </script>

</body>

</html>