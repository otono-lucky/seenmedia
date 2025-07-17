<?php
    include "header.php";
?>
<div id="popup-search-box">
    <div class="box-inner-wrap d-flex align-items-center">
        <form id="form" action="#" method="get" role="search">
            <input id="popup-search" type="text" name="s" placeholder="Type keywords here...">
        </form>
        <div class="search-close"><i class="fa-sharp fa-regular fa-xmark"></i></div>
    </div>
</div>
<!-- Header area end -->

<!-- Body main wrapper start -->
 <div id="smooth-wrapper">
    <div id="smooth-content">
        <main>
            <!-- breadcrumb__area start -->
            <section class="breadcrumb__area breadcrumb__area-2 heading-bg p-relative overflow-hidden">
                <div class="container custom-container">
                    <div class="breadcrumb__title-wrapper">
                        <h1 class="breadcrumb__title-wrapper__title">HOW CAN <br> <span>WE HELP?</span></h1>
                    </div>
                </div>
            </section>
            <!-- breadcrumb__area end-->

            <!-- contact-area start -->
            <section class="contact-area heading-bg ">
                <div class="custom-container">
                    <div class="contact-wrapper">
                    <div class="row">
                        <div class="col-xl-6 ">
                        <div class="contact-thumb return fix">
                            <img src="assets/imgs/contact/contact-img-1.png" alt="img not found">
                        </div>
                        </div>
                        <div class="col-xl-6 ">
                        <div class="contact-us__area ">
                            <div class="contact-us__form-wrapper contact-us__form-wrapper-2 contact-us__form-wrapper-3">
                            <h2 class="title">Send us a Message</h2>
                            <form class="contact-us__form" id="contact-us__form" method="POST" action="https://monas-main.netlify.app/mail.php">
                                <div class="contact-us__input wow fadeInLeft animated" data-wow-delay=".4s">
                                <input name="Name" id="name" type="text" placeholder="Name">
                                </div>
                                <div class="contact-us__input wow fadeInLeft animated" data-wow-delay=".5s">
                                <input name="email" id="email" type="email" placeholder="Email">
                                </div>
                                <div class="col-12">
                                <div class="contact-us__textarea wow fadeInLeft animated" data-wow-delay=".7s">
                                    <textarea name="textarea" id="textarea" cols="30" rows="10" placeholder="Write Your Message"></textarea>
                                </div>
                                </div>
                                <button type="submit" class="rr-btn rr-btn-3">Send Message <i class="fa-solid fa-arrow-right-long"></i></button>
                            </form>
                            </div>
                        </div>
                        </div>
                        <div class="container section-space fade-wrapper">
                        <div class="contact-title mb-50 hero">
                            <h2 class="_split_text">Got any Questions?</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 ">
                            <div class="contact-item text-center mb-30 fade-top">
                                <div class="contact-icon">
                                <i class="far fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-content">
                                <span>Address</span>
                                <p class="dec">Yes, we exist outside the screen. Come see for yourself 😎</p>
                                <h3><a href="#">Track Location</a></h3>
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-4 ">
                            <div class="contact-item text-center mb-30 fade-top">
                                <div class="contact-icon">
                                <i class="fal fa-phone"></i>
                                </div>
                                <div class="contact-content">
                                <span>Contact Number</span>
                                <p class="dec">Real voices, real convos. Dial us in 🧠</p>
                                <h3><a href="#">+234 7035838759</a></h3>
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-4 ">
                            <div class="contact-item text-center mb-30 fade-top">
                                <div class="contact-icon">
                                <i class="far fa-envelope"></i>
                                </div>
                                <div class="contact-content">
                                <span>Send Us an Email</span>
                                <p class="dec">Send us your thoughts, ideas, or memes — we accept all. 📬</p>
                                <h3><a href="#">chat@seenmedia.ng</a></h3>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div> <!-- .container section-space -->
                    </div> <!-- .row -->
                    </div> <!-- .contact-wrapper -->
                </div> <!-- .custom-container -->
            </section>

            <!-- contact-area end -->
            <!-- faq-area start -->
            <!-- <section class="faq-area section-space  heading-bg">
                <div class="container">
                    <div class="faq-title text-center hero">
                        <h3 class="_split_text">Questions? You Need Answer</h3>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="rr-accordion-item">
                          <h2 class="rr-accordion-header">
                            <button class="rr-accordion-button rr-accordion-button-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <label>001. <span class="dec"> What is the difference between raster and vector graphics?</span></label> 
                                <span><i class="fas fa-arrow-down"></i></span>
                            </button>
                          </h2>
                          <div id="collapseOne" class="rr-accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="rr-accordion-body">
                              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                          </div>
                        </div>
                        <div class="rr-accordion-item">
                          <h2 class="rr-accordion-header">
                            <button class="rr-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <label>002. <span class="dec"> What is the meaning of UX Design?</span></label> 
                                <span><i class="fas fa-arrow-down"></i></span>
                            </button>
                          </h2>
                          <div id="collapseTwo" class="rr-accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="rr-accordion-body">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                          </div>
                        </div>
                        <div class="rr-accordion-item">
                          <h2 class="accordion-header">
                            <button class="rr-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <label>003.<span class="dec">Why is user research important in UX design?</span></label> 
                                <span><i class="fas fa-arrow-down"></i></span>
                            </button>
                          </h2>
                          <div id="collapseThree" class="rr-accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="rr-accordion-body">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                          </div>
                        </div>
                        <div class="rr-accordion-item">
                          <h2 class="accordion-header">
                            <button class="rr-accordion-button  collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                <label>004. <span class="dec">What trends are currently popular in web design?</span></label> 
                                <span><i class="fas fa-arrow-down"></i></span>
                            </button>
                          </h2>
                          <div id="collapsefour" class="rr-accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="rr-accordion-body">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </section> -->
            <!-- faq-area end -->
        </main>
        <!-- Footer area start -->
        <?php
            include "footer.php";
        ?>
        <!-- Footer area end -->
    </div>
</div>
<div id="scroll-percentage"><span id="scroll-percentage-value"></span></div>




<!-- JS here -->
<script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
<script src="assets/js/vendor/chroma.min.js"></script>
<script src="assets/js/plugins/waypoints.min.js"></script>
<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="assets/js/plugins/meanmenu.min.js"></script>
<script src="assets/js/plugins/swiper.min.js"></script>
<script src="assets/js/plugins/gsap.js"></script>
<script src="assets/js/plugins/ScrollSmoother.js"></script>
<script src="assets/js/plugins/ScrollToPlugin.js"></script>
<script src="assets/js/plugins/ScrollTrigger.js"></script>
<script src="assets/js/plugins/SplitText.js"></script>
<script src="assets/js/plugins/wow.js"></script>
<script src="assets/js/vendor/magnific-popup.min.js"></script>
<script src="assets/js/vendor/type.js"></script>
<script src="assets/js/vendor/vanilla-tilt.js"></script>
<script src="assets/js/plugins/nice-select.min.js"></script>
<script src="assets/js/vendor/odometer.min.js"></script>
<script src="assets/js/vendor/jarallax.min.js"></script>
<script src="assets/js/vendor/jquery-ui.min.js"></script>
<script src="assets/js/vendor/jquery.counterup.min.js"></script>
<script src="assets/js/plugins/parallax-scroll.js"></script>
<script src="assets/js/plugins/jquery.countdown.min.js"></script>
<script src="assets/js/plugins/isotope-docs.min.js"></script>
<script src="assets/js/vendor/ajax-form.js"></script>
<script src="assets/js/plugins/throwable.js"></script>
<script src="assets/js/plugins/magiccursor.js"></script>
<script src="assets/js/plugins/matter.js"></script>
<script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from monas-main.netlify.app/contact-us by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Jul 2025 13:08:47 GMT -->
</html>