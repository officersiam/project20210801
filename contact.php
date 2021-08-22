<?php
    include("header.inc.php");
?>

<!-- ========== CONTACT US  SECTION ========== -->
<section class="contact_us pt80 bg-gray" id="contact">

    <div class="container-fluid">
     <!-- section title -->
     <div class="row">
        <div class="col-xs-12">
            <div class="section-title mb25 text-center">
               <h6 class="sub-title">
                <span></span>
                 Write Here

            </h6>
            <h3 class="title">
            Get In Touch

         </h3>
   </div>
</div>
</div>
<!-- end section title  -->
<form method="post" class="contact-form">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon "><i class="icon-profile-male"></i></span>
                    <input name="name" type="text" class="form-control" placeholder="Your name...">
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class=" icon-envelope"></i></span>
                    <input name="email" type="email" class="form-control" placeholder="Your email...">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <textarea name="massage" cols="3" rows="4" class="form-control" placeholder="Your message..."></textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 text-right">
            <input type="submit" id="submit" name="send" class=" btn btn_blue_black submit_btn" value="Send Message">
        </div>
    </div>
</form>
</div>
</section>
<!-- ========== CONTACT US  SECTION end  ========== -->

<?php
    include("footer.inc.php");
?>