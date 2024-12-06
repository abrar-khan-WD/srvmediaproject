<?php
  include 'link.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Design LP</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="">

    <!-- Favicon -->
    <!-- <link href="images/design/logo/favicon.ico" loading="lazy" rel="icon">  -->
    <!-- Icon Font Stylesheet -->
    <link defer href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= LINK; ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="<?= LINK; ?>css/style.css" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


</head>

<body>
    <!-- ======================================================================================================= -->

        <!-- ======================================================================================================= -->
        <!-- Topbar End -->
        <section class="container-fluid position-relative px-0 text-center overflow-hidden">
            <div class="heroSection" data-bgimg="images/design/hero/bgHero.jpg">
                <div class="row">
                    <div class="col-lg-6 ps-lg-5 ">
                        <div class="heroTextOne">
                            <h1 class="yellowText">Your love is unique, <br>
                            so should be your <span>rin<img src="images/design/hero/ring.png" alt=""></span></h1>
                            <p>India’s First Ever Designer Diamond Ring Studio</p>
                        </div>
                        <div class="heroTextTwo pt-lg-5 pt-2 d-flex flex-column justify-content-left align-items-start">
                            <p>Explore the personalized collection for you</p>
                            <p><span class="yellowText">1200+</span> Designs | <span class="yellowText">16</span> Styles </p>
                            <button class="designBtn">Book an Appointment </button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="diamondRings">
                        <img src="images/design/hero/diamond-rings.png" alt="">
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ---------------------------------------------------------------------------------------------------- -->
        <!-- ---------------------------------------------------------------------------------------------------- -->

        <section class="FormSection bgBlack py-5">
            <div class="px-3" id="about-us">
               <div class="row">
                    <form action="">
                        <div class="d-flex formConatiner">
                            <input type="text" id="name" name="name" placeholder="Name:" required class="me-3"/>
                            <input type="number" id="contact" name="contact" placeholder="Contact Number:" required class="me-3"/>
                            <input type="email" id="email" name="email" placeholder="E-Mail ID:" required class="me-3"/>
                            <input type="text" id="city" name="city" placeholder="City:" required class="me-3"/>
                            <input type="text" id="area" name="area" placeholder="Area:" required />
                            <div class="formArrow"><img src="images/design/hero/arrow1.png" alt=""></div>
                        </div>
                        
                    </form>
               </div>
            </div>
        </section>


        <!-- ---------------------------------------------------------------------------------------------------- -->
        <!-- ----------------------------------------------------------------------------------------------------------- -->
        <section class="discoverSection bgBlack py-5">
            <div class="container">
               <div class="row">
                    <div class="position-relative d-flex flex-column align-items-center">
                        <p>Discover how we are </p>
                        <h2>‘not just another ring jeweler!’</h2>
                        <a href="">Watch Video <img src="images/design/discover/polygon.svg" alt="not found"></a>
                        <img class="position-absolute diamondRing" src="images/design/discover/diamond-ring.png" alt="">
                    </div>
               </div>
            </div>
        </section>
        <!-- ---------------------------------------------------------------------------------------------------- -->
         <section class="bgimg waterDrops"  data-bgimg="images/design/discover/waterDrops.png"></section>

        <section class="personalizationSection py-5">
            <div class="position-relative ">
               <div class="row">
                    <div class=" d-flex flex-column align-items-center">
                        <p>You Won’t Stop Admi<span>ring</span></p>
                        <h2 class="heading bgimg" data-bgimg="images/design/discover/goldenTexture.jpg">personalization</h2>
                    </div>
               </div>
               <div class="row justify-content-between">
                    <div class="col-lg-3">
                        <div class="personalizationCard pb-5 d-flex flex-column align-items-center pe-3">
                            <img src="images/design/personalization/1.png" alt="not found">
                            <p class="yellowText pt-2">Thoughtful range of 16 styles<br> and 1200 designs</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="personalizationCard pb-5 d-flex flex-column align-items-center pe-3">
                            <img src="images/design/personalization/6.png" alt="not found">
                            <p class="yellowText pt-2">Magical experience made memorable <br>with complementary photoshoot</p>
                        </div>
                    </div>
               </div>
               
               <div class="row justify-content-evenly">
                    <div class="col-lg-3">
                        <div class="personalizationCard pb-5 d-flex flex-column align-items-center pe-lg-5">
                            <img src="images/design/personalization/2.png" alt="not found">
                            <p class="yellowText pt-2">Personalization for ideal size,<br> metal work, colour and texture</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="personalizationCard pb-5 d-flex flex-column align-items-center ps-lg-5">
                            <img src="images/design/personalization/5.png" alt="not found">
                            <p class="yellowText pt-2">Guidance at every step, from the<br> diamond cut, clarity, colour to carat weight </p>
                        </div>
                    </div>
               </div>

               <div class="row justify-content-center">
                    <div class="col-lg-3">
                        <div class="personalizationCard pb-5 d-flex flex-column align-items-center">
                            <img src="images/design/personalization/3.png" alt="not found">
                            <p class="yellowText pt-2">GIA certified rings crafted<br> with ultra-modern technology</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="personalizationCard pb-5 d-flex flex-column align-items-center">
                            <img src="images/design/personalization/4.png" alt="not found">
                            <p class="yellowText pt-2">Inhouse manufacturing that ensures<br> a diamond ring never burns a hole in your pocket</p>
                        </div>
                    </div>
               </div>
               
                <img class="personalizationRing position-absolute" src="images/design/discover/personalizationRing.svg" height="500" alt="not found">

            </div>
        </section>
           <!-- ------------------------------------------------------------------------------------------------------------------ -->
           <section class="journeySection bg-white py-5">
            <div class="px-3">
               <div class="row">
                    <div class="col-lg-6">
                        <div class="position-relative ringJourneyParent">
                        <div class="bgimg ringJourney" data-bgimg="images/design/journey/ring.png"></div>
                        <div class="bgimg ringBgJourney" data-bgimg="images/design/journey/bgRing.png"></div>
                    </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="journeyHead">
                            <h2>A <span>Five-Step</span><br> Journey To Your<br> Dream Ring</h2>
                        </div>
                        <div>
                            <div class="journeyNumber">
                                <p>04</p>
                            </div>
                            <div class="journeyDescription col-lg-8">
                                <h3>Perfect fit, for hands, for pockets</h3>
                                <p>We believe that everyone deserves their dream ring, regardless of their budget. That's why we work with you to find a solution that fits your needs without sacrificing quality. And if your dream diamond seems out of reach, we'll discuss and tweak the 4Cs (cut, clarity, color, carat weight) to make it happen.</p>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </section>
        
           <!-- ------------------------------------------------------------------------------------------------------------------ -->
            
           <section class="mainSection position-realtive bgimg" data-bgimg="images/design/main/bgMain.jpg">
            <div class="position-absolute topDiamond">
                <img class="" src="images/design/main/topDiamond.png" alt="">
            </div>
            <div class="px-3 py-5">
               <div class="row">
                    <div class="title mb-3">
                        <h2 class="position-relative">16 Flaunt-Worthy <br> Styles For Every Personality <img src="images/design/main/diamonds.png" alt=""></h2>
                    </div>
               </div>
               <div class="row px-5">
                    <div class="owl-carousel mainSectionCarousel owl-theme">
                        <div class="item itemcarousel px-3">
                            <div class="carouselCard">
                                <p class="number yellowText">01</p>
                                <img src="images/design/main/1.png" alt="">
                                <p class="desc yellowText">Solitaire Ring Style</p>
                            </div>
                        </div>
                        <div class="item itemcarousel px-3">
                            <div class="carouselCard">
                                <p class="number yellowText">02</p>
                                <img src="images/design/main/2.png" alt="">
                                <p class="desc yellowText">Floral Ring Style</p>
                            </div>
                        </div>
                        <div class="item itemcarousel px-3">
                            <div class="carouselCard">
                                <p class="number yellowText">03</p>
                                <img src="images/design/main/3.png" alt="">
                                <p class="desc yellowText">Cluster Ring Style</p>
                            </div>
                        </div>
                        <div class="item itemcarousel px-3">
                            <div class="carouselCard">
                                <p class="number yellowText">04</p>
                                <img src="images/design/main/4.png" alt="">
                                <p class="desc yellowText">Abstract Ring Style</p>
                            </div>
                        </div>
                        <div class="item itemcarousel px-3">
                            <div class="carouselCard">
                                <p class="number yellowText">05</p>
                                <img src="images/design/main/5.png" alt="">
                                <p class="desc yellowText">Cocktail Ring Style</p>
                            </div>
                        </div>
                        <div class="item itemcarousel px-3">
                            <div class="carouselCard">
                                <p class="number yellowText">06</p>
                                <img src="images/design/main/6.png" alt="">
                                <p class="desc yellowText">Inspired Ring Style</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="d-flex mainRingImgConatiner1 justify-content-evenly">
                        <div class="col-lg-3 position-relative">
                            <img class="mainRingImg" src="images/design/main/couple-celebrating-engagement-together 2.png" alt="">
                            <div class="ellipse">
                                <img src="images/design/main/arrowRight.png" class="arrow" alt=""/>
                            </div>
                        </div>
                        
                        <div class="col-lg-2 position-relative">
                            <img class="mainRingImg mt-5" src="images/design/main/wedding-ritual-putting-ring-finger-india (1) 1.png" alt="">
                            <div class="ellipse1">
                                <img src="images/design/main/arrowRight.png" class="arrow" alt=""/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mainRingImgConatiner2">
                    <div class="title1">
                        <h2>Choose the occasion<br>you wish to make special</h2>
                    </div>
                    <div class="title2">
                        <img src="images/design/main/Vector 1.png" alt="">
                        <h2>with a diamond ring</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="d-flex justify-content-evenly mainRingImgConatiner3">
                        <div class="col-lg-3">
                            <img src="images/design/main/top-view-male-female-hands-holding-gift-box-with-ribbon-wooden-background-present-birthday-valentine-day-christmas-new-year-congratulations-background-copy-space 1.png" alt="">
                            <img src="images/design/main/Ellipse 8.png" class="ellipse" alt=""/>
                            <img src="images/design/main/arrowRight.png" alt=""/>
                        </div>
                        <div class="col-lg-3">
                            <img src="images/design/main/hand-newborn-baby-that-holds-fingers-mother 1.png" alt="">
                            <img src="images/design/main/Ellipse 8.png" class="ellipse" alt=""/>
                            <img src="images/design/main/arrowRight.png" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        
        <section class="bg-white position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8   py-5">
                        <h2 class="title_001 text-dark">It’s NOT PERFECT <br> UNTIL  YOU SAY IT IS</h2>
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="images/design/section_01/1.png" class="sect_01_img_01" alt="">
                            </div>
                            <div class="col-lg-7">
                                <p class="text-dark">You can thoroughly inspect your diamond ring at our studio with our real-time Diamond Inspection service. This includes a one-on-one consultation with our ring expert, who will guide you through a high-definition magnifying glass to examine everything from the specifications to the diamond's gradients and certifications</p>
                            </div>
                        </div> 
                    </div>
                </div>
                <img src="images/design/section_01/2.png" class="sect_01_img" alt="">
            </div>
        </section>
        
        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <section>
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <h2 class="title_001 text-white text-center">AND HERE’S HOW WE SPRINKLE <br> SOME EXTRA SPARKLES</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- ------------------------------------------------------------------------------------------------------------------ -->

        <?php include 'footer.php';?>

        <a href="#Program" class="btn c_btn rounded-pill px-4 left_button bg-red">Programs</a>
        <button type="button" class="btn c_btn rounded-pill px-4 right_button bg-red" data-bs-toggle="modal"
            data-bs-target="#exampleModal">Apply Now</button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog p-0">
                <div class="modal-content ">
                    <div class="modal-header">
                        <div class="about_logo pb-2">
                            <img src="images/design/logo/3.webp" height="50" loading="lazy" alt="">
                            <img src="images/design/logo/naac.webp" height="20" loading="lazy" alt="">
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0">
                        <?php include 'form_01.php';?>
                    </div>
                </div>
            </div>
        </div>

        <!-- JavaScript Libraries -->
        <button type="button" class="btn c_btn rounded-pill px-4 d-none  bg-red" data-bs-toggle="modal"
            data-bs-target="#vaterns_01">Apply Now</button>
        <div class="modal fade" id="vaterns_01" tabindex="-1" aria-labelledby="vaterns_01Label" aria-hidden="true">
            <div class="modal-dialog p-0">
                <div class="modal-content ">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0">
                        <video class="mgauto" width="100%" controls="">
                            <source
                                src="https://design-edu-cms.s3.ap-south-1.amazonaws.com/wp-content/uploads/2023/02/28121523/videoplayback-1.mp4"
                                type="video/mp4" alt="">
                        </video>
                    </div>
                </div>
            </div>
        </div>

        <button type="button" class="btn c_btn rounded-pill px-4 d-none  bg-red" data-bs-toggle="modal"
            data-bs-target="#vaterns_02">Apply Now</button>
        <div class="modal fade" id="vaterns_02" tabindex="-1" aria-labelledby="vaterns_02Label" aria-hidden="true">
            <div class="modal-dialog p-0">
                <div class="modal-content ">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0">
                        <video class="mgauto" width="100%" controls="">
                            <source
                                src="https://design-edu-cms.s3.ap-south-1.amazonaws.com/wp-content/uploads/2023/03/01102819/Shree-Kapil-Dev-speech-1.mp4"
                                type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>

        <button type="button" class="btn c_btn rounded-pill px-4 d-none  bg-red" data-bs-toggle="modal"
            data-bs-target="#vaterns_03">Apply Now</button>
        <div class="modal fade" id="vaterns_03" tabindex="-1" aria-labelledby="vaterns_03Label" aria-hidden="true">
            <div class="modal-dialog p-0">
                <div class="modal-content ">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0">
                        <video class="mgauto" width="100%" controls="">
                            <source src="https://videos.files.wordpress.com/PI2MTs90/dr.-mashelkar1080p.mp4"
                                type="video/mp4" alt="">
                        </video>
                    </div>
                </div>
            </div>
        </div>


        <!-- Owl Carousel JS and Jquery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>




        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script defer src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script defer src="js/main.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/formstplivejs.5598e1e583c1d09fc270b76b7bc87fed.js"></script>
        <script defer src="https://forms.zohopublic.com/form/script.js" async></script>
        <script>
            $(' [data-bgimg]').each(function () {
                $(this).css('background-image', 'url(' + $(this).data('bgimg') + ')')
            })
        </script>
</body>

</html>