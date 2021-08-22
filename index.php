<?php
    include("header.inc.php");
?>

    <!-- ========== hero section ========== -->
    <section id="home" class="hero hero_full_screen hero_parallax  parallax-window" data-parallax="scroll" data-image-src="img/bg/intro1.png" style="background: url(img/banner/slider2.png) no-repeat;background-size: cover;">
        <div class="bg-overlay opacity-8">
        </div>
        <div class="hero_parallax_inner">
            <div class="container">
                <div class="banner-wrapper col-md-8" tabindex="0">
                    <h1 class="uk-animation-slide-top">
                       Here will your title if have
                   </h1>
                   <p class="uk-animation-slide-top">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat mollitia, corrupti quae hic ex perspiciatis? Asperiores eaque cupiditate aperiam numquam? Est odio ipsa totam quas quaerat velit sed aut iure.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- ========== hero section  End ========== -->

<!-- ========== Services section ========== -->
<section class="pt80 pb80 bg-gray" id="services" style="background-image: url(img/bg/sbg.jpg);">
    <div class="container-fluid">
        <!-- section title -->
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title mb25 white-title text-center">
                   <h6 class="sub-title">
                    <span></span>
                    What We Do
                </h6>
                <h3 class="title">
                 Services for You
             </h3>
         </div>
     </div>
 </div>
 <!-- end section title  -->
 <div class="row">
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6">
        <div class="services-box animated fadeInDown wow" data-wow-delay=".1s">
            <div class="service-icon">
                <i class="flaticon-020-solution"></i>
            </div>
            <div class="services-text">
                <h5>Business Consulting</h5>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6">
        <div class="services-box  animated fadeInDown wow" data-wow-delay=".2s">
            <div class="service-icon">
               <i class="flaticon-005-cost"></i>
           </div>
           <div class="services-text">
            <h5>Investment Plan</h5>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
        </div>
    </div>
</div>
<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6">
    <div class="services-box  animated fadeInDown wow" data-wow-delay=".3s">
        <div class="service-icon">
            <i class="flaticon-001-advertising"></i>
        </div>
        <div class="services-text">
            <h5>World Marketing</h5>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
        </div>
    </div>
</div>
<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6">
    <div class="services-box  animated fadeInDown wow" data-wow-delay=".4s">
     <div class="service-icon">
        <i class="flaticon-003-business-plan"></i>
    </div>
    <div class="services-text">
        <h5>Business Plan</h5>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
    </div>
</div>
</div>
</div>
</div> <!-- end container -->
</section>
<!-- ========== Services section end ========== -->

<!-- ==========  projects Section========== -->
<section class="project-product projects bg-gray pt80 pb80" id="projects">
    <!-- section title -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title mb25 text-center">
                   <h6 class="sub-title">
                    <span></span>
                    Portfolio
                    </h6>
                    <h3 class="title">
                    Products for You
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="section_body">
        <!-- Filter Controls -->
        <div uk-filter="target: .js-filter">
    
            <ul class="uk-subnav uk-subnav-pill text-center" style="width: max-content;margin: 0 auto;margin-bottom: 2rem;">
                <li class="uk-active" uk-filter-control=".tag-all"><a href="#">all</a></li>
                <li uk-filter-control=".tag-white"><a href="#">White</a></li>
                <li uk-filter-control=".tag-blue"><a href="#">Blue</a></li>
                <li uk-filter-control=".tag-black"><a href="#">Black</a></li>
            </ul>
            <div class="container-fluid">
                <div class="row js-filter">
                    <div class="col-sm-6 col-md-3 col-xs-6 tag-white tag-all">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="img/projects/pro07.png" alt="">
                            </div>
                            <div class="product-text-center">
                                <div class="text-top">
                                    <h2 class="product-title">Product-1</h2>
                                    <p class="product-price">$50</p>
                                </div>
                                <div class="text-bottom">
                                    <a href="#" class="add-button">Add to Car</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-xs-6 tag-blue tag-all">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="img/projects/pro08.png" alt="">
                            </div>
                            <div class="product-text-center">
                                <div class="text-top">
                                    <h2 class="product-title">Product-1</h2>
                                    <p class="product-price">$50</p>
                                </div>
                                <div class="text-bottom">
                                    <a href="#" class="add-button">Add to Car</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-xs-6 tag-white tag-all">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="img/projects/pro09.png" alt="">
                            </div>
                            <div class="product-text-center">
                                <div class="text-top">
                                    <h2 class="product-title">Product-1</h2>
                                    <p class="product-price">$50</p>
                                </div>
                                <div class="text-bottom">
                                    <a href="#" class="add-button">Add to Car</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-xs-6 tag-black tag-all">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="img/projects/pro09.png" alt="">
                            </div>
                            <div class="product-text-center">
                                <div class="text-top">
                                    <h2 class="product-title">Product-1</h2>
                                    <p class="product-price">$50</p>
                                </div>
                                <div class="text-bottom">
                                    <a href="#" class="add-button">Add to Car</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-xs-6 tag-blue tag-all">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="img/projects/pro07.png" alt="">
                            </div>
                            <div class="product-text-center">
                                <div class="text-top">
                                    <h2 class="product-title">Product-1</h2>
                                    <p class="product-price">$50</p>
                                </div>
                                <div class="text-bottom">
                                    <a href="#" class="add-button">Add to Car</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-xs-6 tag-black tag-all">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="img/projects/pro08.png" alt="">
                            </div>
                            <div class="product-text-center">
                                <div class="text-top">
                                    <h2 class="product-title">Product-1</h2>
                                    <p class="product-price">$50</p>
                                </div>
                                <div class="text-bottom">
                                    <a href="#" class="add-button">Add to Car</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-xs-6 tag-white tag-all">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="img/projects/pro09.png" alt="">
                            </div>
                            <div class="product-text-center">
                                <div class="text-top">
                                    <h2 class="product-title">Product-1</h2>
                                    <p class="product-price">$50</p>
                                </div>
                                <div class="text-bottom">
                                    <a href="#" class="add-button">Add to Car</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-xs-6 tag-black tag-all">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="img/projects/pro09.png" alt="">
                            </div>
                            <div class="product-text-center">
                                <div class="text-top">
                                    <h2 class="product-title">Product-1</h2>
                                    <p class="product-price">$50</p>
                                </div>
                                <div class="text-bottom">
                                    <a href="#" class="add-button">Add to Car</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="more-button">
        <a href="product.php" class="btn btn_blue_black more_button">More</a>
    </div>
</section>
<!-- ==========  projects  Section End ========== -->

<!-- ========== Counter Section ========== -->
<section class="counter_section" style="background-image: url('img/bg/bg2.png')">
    <div class="counter_section_inner  pt80 pb80">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-xs-6">
                    <!--counter box-->
                    <div class="counter_box text-center fadeInDown animated wow" data-wow-delay=".1s">
                        <i class="fa fa-tasks"></i>
                        <div class="counter_number counter">276</div>
                        <h4 class="counter_name">Service 1</h4>
                    </div>
                    <!--counter box end-->
                </div>
                <div class="col-sm-3 col-xs-6">
                    <!--counter box-->
                    <div class="counter_box text-center fadeInDown animated wow" data-wow-delay=".2s">
                        <i class="fa fa-users"></i>
                        <div class="counter_number counter">153</div>
                        <h4 class="counter_name">Service 2</h4>
                    </div>
                    <!--counter box end-->
                </div>
                <div class="col-sm-3 col-xs-6">
                    <!--counter box-->
                    <div class="counter_box text-center fadeInDown animated wow" data-wow-delay=".4s">
                        <i class="fa fa-coffee"></i>
                        <div class="counter_number counter">780</div>
                        <h4 class="counter_name">Service 3</h4>
                    </div>
                    <!--counter box end-->
                </div>
                <div class="col-sm-3 col-xs-6">
                    <!--counter box-->
                    <div class="counter_box text-center fadeInDown animated wow" data-wow-delay=".6s">
                        <i class="fa fa-trophy"></i>
                        <div class="counter_number counter">1276</div>
                        <h4 class="counter_name">Service 4</h4>
                    </div>
                    <!--counter box end-->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========== Counter Section End ========== -->

<!-- ========== Blog SECTION ========== -->
<section class="blog bg-light pt80 pb70" id="blog">
    <div class="container-fluid">
       <!-- section title -->
       <div class="row">
        <div class="col-xs-12">
            <div class="section-title mb25 text-center">
               <h6 class="sub-title">
                <span></span>
                Featured
            </h6>
            <h3 class="title">
             Top Sale for You
         </h3>
   </div>
</div>
</div>

<div class="uk-slider-container-offset" uk-slider>

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@s uk-grid" uk-slideshow="autoplay:true">
            <li>
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro07.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Car</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro08.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Car</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro09.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Car</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro07.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Car</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro08.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Car</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/projects/pro09.png" alt="">
                    </div>
                    <div class="product-text-center">
                        <div class="text-top">
                            <h2 class="product-title">Product-1</h2>
                            <p class="product-price">$50</p>
                        </div>
                        <div class="text-bottom">
                            <a href="#" class="add-button">Add to Car</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

    </div>

    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

</div>
</div>
</div>
</section>
<!-- ========== Blog SECTION end  ========== -->
<?php
    include("footer.inc.php");
?>
