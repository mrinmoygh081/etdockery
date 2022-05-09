<!doctype html>
<html lang="en">
<head>
<?php include './include/head.php' ?>
<style>
    .relative {
        position: relative;
    }
    .video_btn {
        display: none;
        background-color: rgb(0 0 0 / 80%);
        color: #fff;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 9;
        transform: translate(-50%, -50%);
        transition: transform 0.35s, top 0.2s ease-out, left 0.2s ease-out;
    }
</style>
</head>

<body>
    <?php include './include/nav.php' ?>

    <!--<section class="banner-part">-->
    <!--    <div class="swiper-container banner-slider home-one" data-swiper-config='{"loop": true, "effect": "fade", "speed": 800, "autoplay": 5000, "paginationClickable": true }'>-->
    <!--        <div class="swiper-wrapper">-->
    <!--            <div class="swiper-slide banner-item" data-bg-image="images/bg/2.jpg">-->
    <!--                <div class="container">-->
    <!--                    <div class="row d-flex justify-content-center">-->
    <!--                        <div class="col-xl-12 banner-caption">-->
                                <!--<h2 class="brand-color" data-animate="fadeInUp">welcome to </h2>-->
    <!--                            <h1 data-animate="fadeInUp">LIFEMAP</h1>-->
    <!--                            <p data-animate="fadeInUp">FiveStar comes with a collection of six astounding and fully customizable <br>.Lorem Ipsum is simply the world dummy text of the printing and typesetting industry.</p>-->
                                <!--<a href="#" class="btn-1" data-animate="fadeInUp">EXPLORE MORE</a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="swiper-pagination"></div>-->
    <!--    </div>-->
    <!--</section>-->
    
    <section>
        <img src="./images/own/lifemap/lifemap.jpg" class="w-100" >
    </section>
    
    
    <!--video-->
    <section class="lifemap_about section-p bg_dark" data-aos="fade-up" data-aos-duration="1500">
        <div class="container ">
            <div id="video_start"></div>
            <video id="video" width="100%" height="auto" autoplay muted loop>
              <source src="./images/video/video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!--<iframe width="100%" height="615" src="https://www.youtube.com/embed/rc2vgjyF3RI?autoplay=1&mute=1&controls=0&showinfo=0&rel=0&loop=1&playlist=rc2vgjyF3RI" title="Lifemap video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
            <button id="video_btn" class="video_btn">UNMUTE</button>
            <div id="video_end"></div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        var video_btn = document.getElementById('video_btn');
        var video = document.getElementById('video');
        
        document.getElementById('video_btn').addEventListener('click', function() {
          console.log()
            if(video.muted){
                video.muted = false;
                video_btn.innerText = "MUTE";
            }else {
                video.muted = true;
                video_btn.innerText = "UNMUTE";
            }
        });
        document.addEventListener("mousemove", function(e) {
            // video_btn.style.display = "block";
            video_btn.style.cssText = "left: " + e.clientX + "px; top: " + e.clientY + "px;";
            
            // console.log("Cursor Possition Y", e.pageY );
            // console.log("Video Start Section", $('#video').offset().top);
            // console.log("Video Section Height", $('#video').outerHeight());
            var mouseY = e.pageY;
            var video_start = $('#video').offset().top;
            var video_height = $('#video').outerHeight();
            if (mouseY > video_start && mouseY < video_start + video_height){
                video_btn.style.display = "block";
            } else {
                video_btn.style.display = "none";
            }
        });
        // $(window).scroll(function() {
        //   var hT = $('#video_start').offset().top,
        //       hH = $('#video_start').outerHeight(),
        //       wH = $(window).height(),
        //       wS = $(this).scrollTop();
        //   if (wS > (hT+hH-wH)){
        //       console.log('H1 on the view!');
        //   }
        // });
    </script>
    <!--/video-->

     <!--About us  Part Start -->
    <section class="lifemap_about section-p">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12" data-aos="fade-right" data-aos-duration="2000">
                    <div class="section-head-2">
                        <h2>WHY LIFE MAP? </h2>
                        <p>In an emergency situation, ready access to information can mean the difference between Iife and death. The LIFE MAP system was designed to provide information about faciIities where emergencies are taking pIace to first responders whiIe on route to the event. BuiIding architecture, structure, room, personneI information, and the Iocation of aII vitaI equipment needed to respond to any type of emergency, on screen instantIy, with a cIick of a button. </p>
                        <img src="./images/own/lifemap/lifemap1.jpeg" class="img-fluid" />
                    </div>
                </div>
                <div class="col-md-4 col-12" data-aos="fade-left" data-aos-duration="2000">
                    <img src="./images/logo.png" class="img-fluid" style="margin: auto" />
                    <h2>Government Sales: </h2>
                    <h3>VPS Technologies and Design Studios, Inc. SDVOSB</h3>
                    <p>Contact: Eddie T. Dockery C.W.O. U.S. Army (Retired)</p>
                    <p>Address: 10 Country Club Lane Hattiesburg Mississippi 39402</p>
                    <p>Phone: <b>301-233-7836</b></p>
                    <p>Email: gov.sales@3dlifemap.com</p>
                </div>
            </div>
        </div>

    </section>
    <!-- About us  Part End -->
    
    <!-- Case Study Part Start -->
    <section class="lifemap_about section-p bg_dark">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-12" data-aos="fade-right" data-aos-duration="2000">
                    <div class="section-head-2">
                        <h2>Case Study: </h2>
                        <h3>Harris County Joint Processing Center</h3>
                        <p>LIFE MAP Makes the difference: </p>
                        <p>When an inmate went missing at Iights out, a massive search was undertaken to Iocate the missing prisoner. As the search started, buiIding operations used the LIFE MAP modeI to determine possibIe areas where the inmate may be hiding and to eIiminate the possibiIity that the inmate had Ieft the faciIity. The LIFE MAP modeI was a vitaI asset in the Iocation and capture of the inmate. </p>
                    </div>
                </div>
                <div class="col-md-5 col-12" data-aos="fade-left" data-aos-duration="2000">
                    <img src="./images/own/lifemap/lifemap2.jpeg" class="img-fluid" />
                </div>
            </div>
        </div>

    </section>
    <!-- Case Study  Part End -->
    
    
    <section class="lifemap_about section-p bg_dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12" data-aos="fade-right" data-aos-duration="2000">
                    <div class="section-head-2">
                        <h2>The Benefits of LIFEMAP </h2>
                        <ul class="normal_ul mt-4">
                            <li>Gives Owner complete control of facilities using an accessible 3D interface. </li>
                            <li>Provides a single environment for accessing Life Safety and Maintenance data. </li>
                            <li>Provides 3-D modeling of building designs and fully immersive walkthroughs before, to facilitate effective planning and response. </li>
                            <li>Provides advanced laser scanning for historical preservation. </li>
                            <li>Converts construction documents to a 3-D set of as-builts incorporating an inventory of all building components </li>
                            <li>Allows virtual renderings to generate in one-tenth of the time as that of similar software programs. </li>
                            <li>Internet transmission is one-third of the time as that of similar software programs </li>
                            <li>Provides a collaborative virtual environment that minimizes the gap between planning and cost-effective implementation.</li>
                            <li>Provides reliable and efficient system data and inventory management for new and existing buildings. </li>
                            <li>Captures current conditions and gives the user access to strategic maintenance in virtual environment. </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-12" data-aos="fade-left" data-aos-duration="2000">
                    <div class="section-head-2">
                        <h2>Financing </h2>
                        <ul class="normal_ul mt-4">
                            <li>Has established financing and operating capital. </li>
                            <li>Funding goals include allocations to establish training program for VET to become certified LIFE MAP modeling technicians, professional project and program managers. </li>
                            <li>Funded to bring the VIMTrek visual impact, space use and cost-effective building modeling  required by the modern building owner</li>
                            <li>FAssist with securing Federal Grants for HBCUs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>
    
    <!--Lifemap Projects-->
    <section class="clint-logo-3 section-p">
        <div class="container">
            <div class="section-head-2">
                <h2>LIFEMAP Projects</h2>
            </div>
            <div class="row">
                <div class="swiper-container clint-logo-3-slider" data-swiper-config='{"loop": true, "effect": "slide", "speed": 900, "autoplay": 1500, "paginationClickable": true, "slidesPerView" : 4 ,"breakpoints": { "575": { "slidesPerView": 2},"767": { "slidesPerView": 3 }}}'>
                    <div class="swiper-wrapper">
                        <!-- Single Client -->
                        <div class="swiper-slide clints-logo-3-item">
                            <a href="#"><img src="./images/own/projects/p1.jpg" alt=""></a>
                        </div>
                        <div class="swiper-slide clints-logo-3-item">
                            <a href="#"><img src="./images/own/projects/p2.jpg" alt=""></a>
                        </div>
                        <div class="swiper-slide clints-logo-3-item">
                            <a href="#"><img src="./images/own/projects/p3.jpg" alt=""></a>
                        </div>
                        <div class="swiper-slide clints-logo-3-item">
                            <a href="#"><img src="./images/own/projects/p4.jpg" alt=""></a>
                        </div>
                        <div class="swiper-slide clints-logo-3-item">
                            <a href="#"><img src="./images/own/projects/p5.jpg" alt=""></a>
                        </div>
                        <div class="swiper-slide clints-logo-3-item">
                            <a href="#"><img src="./images/own/projects/p6.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Lifemap Projects Part End -->

    <?php include './include/footer.php'; ?>
</body>
</html