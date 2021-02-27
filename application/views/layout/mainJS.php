 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 <!-- Javascript files-->
 <!-- <script src="<?php /*echo base_url('assets/') */?>js/jquery.min.js"></script> -->
 <script src="<?php echo base_url('assets/') ?>js/popper.min.js"></script>
 <script src="<?php echo base_url('assets/') ?>js/bootstrap.bundle.min.js"></script>
 <script src="<?php echo base_url('assets/') ?>js/jquery-3.0.0.min.js"></script>
 <script src="<?php echo base_url('assets/') ?>js/plugin.js"></script>
 <!-- sidebar -->
 <script src="<?php echo base_url('assets/') ?>js/jquery.mCustomScrollbar.concat.min.js"></script>
 <script src="<?php echo base_url('assets/') ?>js/custom.js"></script>
 <!-- javascript -->
 <script src="<?php echo base_url('assets/'); ?>js/bootstrap-input-spinner.js"></script>
 <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
  <script src="<?php echo base_url('assets/') ?>js/jquery.validate.min.js"></script>
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
         $('#loginform').validate({
           rules : {
             auth :{
               required : true/*,
               remote : {
                 url : "CheckEmail.php",
                 type:"post"
               } */
             },pwloginfield :{
               required : true
             }   
           },
           messages : {
             auth:{ required : "โปรดระบุ Email หรือ Phone Number"/*,remote:"โปรดระบุ Email หรือ Phone Number ให้ถูกต้อง"*/},
             pwloginfield : { required:"โปรดระบุรหัสผ่าน" }
           },
                  
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