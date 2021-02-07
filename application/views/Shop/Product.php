<div class="row">
    <div class="col-xl-4">
        <a class="btn btnanSize btn-back ml-2 text-light" onclick="history.go(-1);" role="button"><i class="fas fa-backspace"></i> Back</a>
    </div>
</div>
<div class="card-body row">
    <!-- PIC -->
    <div class=" col-xl-6 col-sm-12 border-bottom brodersize d-flex justify-content-center">
        <div style="margin-top: 50px;">
            <img class="product-pic" alt="" src="<?= $Product->{'img'} ?>" style="width: 500px; height:400px;">
        </div>
    </div>
    <div class="col-xl-6 col-sm-12 border-bottom brodersize">
        <!-- Data -->
        <div class="row">
            <div class="col-12 mb-2">
                <h1><strong>ชื่อสินค้า : <?= $Product->{'product_name'} ?></strong></h1>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-12 border-bottom brodersize">
                <h2><strong>ราคา : <?= $Product->{'price'} ?> บาท</strong></h2>
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
        <div class="row border-top brodersize no-gutters mb-5">
            <div class="col-xl-12 col-sm-6 mt-5">
                <h4>ผู้ผลิต : <?= $Product->{'vendor'} ?></h4>
            </div>
            <div class="col-xl-12 col-sm-6 mt-2">
                <h4>หมวดหมู่ : <?= $Product->{'category_name'} ?></h4>
            </div>
        </div>
    </div>
    <!-- Data End -->
</div>
<div class="card-body row">
    <div class="border brodersize col">
        <p class="text-justify">รายละเอียดสินค้า : <?= $Product->{'description'} ?></p>
    </div>
</div>

<!-- Address And footer start -->

<?php $this->load->view("layout/mainJS"); ?>

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
</script>

</body>

</html>