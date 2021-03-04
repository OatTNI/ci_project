<!-- Javascript files-->
<!-- <script src="<?php /*echo base_url('assets/') */?>js/jquery.min.js"></script> -->
<script src="<?php echo base_url('assets/') ?>js/popper.min.js"></script>

<script src="<?php echo base_url('assets/') ?>js/plugin.js"></script>
<!-- sidebar -->
<script src="<?php echo base_url('assets/') ?>js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo base_url('assets/') ?>js/custom.js"></script>
<!-- javascript -->
<script src="<?php echo base_url('assets/'); ?>js/bootstrap-input-spinner.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script src="<?php echo base_url('assets/') ?>js/jquery.validate.min.js"></script>
<script src="<?php echo base_url('assets/') ?>js/jquery.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/') ?>js/popper.min.js"></script>

<script>
 $("input[type='number']").inputSpinner();
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
</script>