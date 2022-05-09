<!doctype html>
<html lang="en">
<head>
<?php include './include/head.php' ?>
</head>

<body>
    <?php include './include/nav.php' ?>
    
    
    <!-- Map Area Start -->
    
 <div class="google-map">
  <div class="gmap3-area" data-lat="24.592631" data-lng="88.269891" data-mrkr="images/bg/map-marker.png">
  </div><!-- /.google-map -->
 </div><!-- /#map -->
    
    <!-- Map Area end -->
    
    <!-- Contact-info area Start -->
    <section class="contact-info">
        <div class="container-fluid no-pad">
           <div class="contact-info-inner">
               <div class="row no-gutters">
                  <div class="col-md-4">
                      
                       <div class="email-info sin-cont-info d-flex align-items-center">
                          <div class="center-wrap">
                           <i class="flaticon-at"></i>
                           <h3>Email Us</h3>
                           <p>Mail:<a href="mailto:name@email.com"> etdockery@yahoo.com</a></p>
                           <a href="mailto:name@email.com"> etdockery@yahoo.com</a>
                           </div>
                           
                       </div>
                   </div>
                   <div class="col-md-4">
                        <div class="office-location sin-cont-info d-flex align-items-center">
                           <div class="center-wrap">
                            <i class="flaticon-map-pin-marked"></i>
                            <h3>office location</h3>
                            <p>Address: 10 Country Club Lane Hattiesburg Mississippi 39402</p>
                           </div> 
                        </div>
                    </div>
                   <div class="col-md-4">
                        <div class="call-us sin-cont-info d-flex align-items-center">
                            <div class="center-wrap">
                                <i class="flaticon-telephone-of-old-design"></i>
                                <h3>call Us</h3>
                                <p>Phone: <a href="tel:158-659-8546"> +1 (301) 233-7836</a></p>
                                <a href="tel:158-659-8546">+1(301) 233-7836</a>
                            </div>
                        </div>
                   </div>
                
               </div>
           </div>
        </div>
    </section>
    <!-- Contact-info area End -->
     
    
    <!-- Contact bottom area Start -->
    <section class="contuct-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                   <div class="con-bottom-inner">
                       <h4>CONTACT <span>US</span></h4>
                       <div class="per-social">
                           <ul>
                               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                               <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                               <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                               <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                               <li><a href="#"><i class="fa fa-behance"></i></a></li>
                               <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                           </ul>
                        </div>
                        <!--<p>Dummy text of the printing and typesetting industry. Lorem Ipsum has been the </p>-->
                      
                        <form class="con-page-form" id="contact-form" method="post">
                            <textarea name="message" placeholder="Message"></textarea>
                            <input type="text" name="name"  placeholder="Name *" class="mar-r">
                            <input type="text" name="email" placeholder="Email *">
                            <button  type="submit" >Submit</button>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Contact bottom area end -->
    
    
    
    <!-- Clint logo Part Start -->
    <section class="clint-logo-3 section-p bg_dark">
        <div class="container">
            <div class="row">
                <div class="swiper-container clint-logo-3-slider" data-swiper-config='{"loop": true, "effect": "slide", "speed": 900, "autoplay": 1500, "paginationClickable": true, "slidesPerView" : 4 ,"breakpoints": { "575": { "slidesPerView": 2},"767": { "slidesPerView": 3 }}}'>
                    <div class="swiper-wrapper">
                        <!-- Single Client -->
                        <div class="swiper-slide clints-logo-3-item">
                            <a href="#"><img src="images/c41.png" alt=""></a>
                        </div>
                        <!-- Single Client -->
                        <div class="swiper-slide clints-logo-3-item">
                            <a href="#"><img src="images/c42.png" alt=""></a>
                        </div>
                        <!-- Single Client -->
                        <div class="swiper-slide clints-logo-3-item">
                            <a href="#"><img src="images/c43.png" alt=""></a>
                        </div>
                        <!-- Single Client -->
                        <div class="swiper-slide clints-logo-3-item">
                            <a href="#"><img src="images/c44.png" alt=""></a>
                        </div>
                        <!-- Single Client -->
                        <div class="swiper-slide clints-logo-3-item">
                            <a href="#"><img src="images/c45.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clint logo Part End -->


    <?php include './include/footer.php'; ?>
    
</body>
</html>