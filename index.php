<?php
error_reporting(0);
$source='';
$source=$_GET['utm_source'];
$medium='';
$medium=$_GET['utm_medium'];
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title  -->
    <title>Make Over </title>

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- cookiealert css -->
    <link rel="stylesheet" href="assets/css/cookiealert.css">

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K3R9LPR');</script>
<!-- End Google Tag Manager -->

</head>

<body class="homepage-1">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K3R9LPR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <div class="main">
        <!-- ***** Header Start ***** -->
        <header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
            <div class="container position-relative">
                <a class="navbar-brand" href="index.html">
                    <img class="navbar-brand-regular" src="assets/img/logo/makeover-logo.png" alt="stuid logo">
                    <img class="navbar-brand-sticky" src="assets/img/logo/makeover-logo.png" alt="stuid sticky logo">
                </a>
                <div class="strip-button">
                    <button class="enq-top d-none" data-toggle="modal" data-target="#exampleModal0">Enquire Now
                    </button>
                </div>

                <div class="navbar-inner">
                </div>
            </div>
        </header>

        <!-- ***** Welcome Area Start ***** -->
        <section id="home" class="section welcome-area d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-between">
                    <!-- Welcome Intro Start -->
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="inner-banner">
                            <p>ഇനി താരം നിങ്ങളാകും</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="welcome-form">
                            <form name="form1" method="post" action="email.php">
                                <div class="form-title">
                                    <h4>Get in touch with us</h4>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Name" class="form-control" name="name" required>
                                </div>
                                <div class="form-group">
                                    <input placeholder="Phone" class="form-control" name="phone" required type="tel"
                                        pattern="[0-9]{10}" maxlength="10"
                                        oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')"
                                        onchange="this.setCustomValidity('')">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Email" class="form-control">
                                </div>
                                <div class="form-group form-group-btn">
                                    <input type="hidden" name="esource" value="<?php echo $source;?>">
                                    <input type="hidden" name="emedium" value="<?php echo $medium;?>">
                                    <input type="submit" value="submit" class="form-control" name="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** BRIDAL Area Start ***** -->
        <section class="bridal-area section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bridal-head">
                            <h1>Bridal Ornaments & Rentals</h1>
                            <p>Make your special moments extraordinary with our exhaustive collection of exquisite bridal jewellery sets offered at attractive prices. Lend yourself the most charming looks on your D-day by renting our trendiest pieces.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="ornaments-area">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="bridal-img">
                                        <img src="assets/img/bridal/01.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bridal-img">
                                        <img src="assets/img/bridal/2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bridal-img">
                                        <img src="assets/img/bridal/03.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bridal-img">
                                        <img src="assets/img/bridal/04.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bridal-img">
                                        <img src="assets/img/bridal/05.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bridal-img bridal-img2">
                                        <p><span>View</span> <br>2000+ <br><span>Products</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="model-area">
                            <img src="assets/img/bridal/bridal-lady.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** COSMETICS Area Start ***** -->
        <section class="cosmetics-area section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bridal-head">
                            <h1>Accessories & Cosmetics</h1>
                            <p>Express your personal style and spice up your outfits, adorning our trendy collection of fashion accessories. Explore the wide range of premium cosmetics from top-notch brands at amazing prices.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="model-area">
                            <img src="assets/img/cosmetics/cosmetic-lady.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="ornaments-area">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="bridal-img">
                                        <img src="assets/img/cosmetics/01.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bridal-img">
                                        <img src="assets/img/cosmetics/02.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bridal-img">
                                        <img src="assets/img/cosmetics/03.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bridal-img">
                                        <img src="assets/img/cosmetics/04.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bridal-img">
                                        <img src="assets/img/cosmetics/05.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bridal-img bridal-img2">
                                        <p><span>View</span> <br>2000+ <br><span>Products</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Video Area Start ***** -->
        <section class="video-section section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="video-area">
                            <!-- <iframe width="1100" height="620" src="https://www.youtube.com/embed/55CyQM0o2Wc"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe> -->
                                <iframe width="1100" height="620" src="https://www.youtube.com/embed/jFdJnXkJe20" 
                                title="YouTube video player" frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="video-btn">
                            <a href="#"  data-toggle="modal" data-target="#exampleModal0">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** ABOUT Area Start ***** -->
        <section class="about-area section">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-5 p-0">
                        <div class="about-img">
                            <img src="assets/img/about-bg.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="about-content">
                            <h2>About</h2>
                            <h1>Makeover Avenue</h1>
                            <p>We present before you an enthralling world of the trendiest, ethnic, and elegant bridal jewellery. Discover a huge collection of dream designs that will add beauty to your celebrations. Bridal jewellery sets are available for rent, at the most affordable rates. Our premium range of accessories and cosmetics are sure to step up your persona. What suits you best, is taken care of by our Style Advisors.</p>
                            <div class="about-btn">
                                <a href="#" data-toggle="modal" data-target="#exampleModal0">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** TESTIMONIALS Area Start ***** -->
        <section class="testi-area section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="testi-head">
                            <h2>Client</h2>
                            <h1>Testimonials</h1>
                        </div>
                        <div class="testi-slider owl-carousel">
                            <div class="single-testi row">
                                <div class="col-lg-4">
                                    <div class="testi-img">
                                        <img src="assets/img/testi-img1.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="testi-inner">
                                        <p> <img src="assets/img/quote.png" alt=""> I opted for Makeover Avenue when it came to purchasing jewellery for my wedding day. I was astonished by the variety, designs and the prices. They rendered quality service too. The Style Advisor had a detailed eye for my preferences and helped me in choosing the ornaments and accessories. I was very confident on my special day, as I knew I had selected the best
                                        </p>
                                        <h4>Chithra</h4>
                                        <span>Calicut</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testi row">
                                <div class="col-lg-4">
                                    <div class="testi-img">
                                        <img src="assets/img/testi-img2.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="testi-inner">
                                        <p> <img src="assets/img/quote.png" alt=""> It was a great experience at Makeover Avenue. I went to shop for some accessories. I could find a wide selection and found the perfect match. That too at reasonable prices. I was impressed by the service offered and would recommend Makeover Avenue to all, who are in search of some trendy accessories
                                        </p>
                                        <h4>Shalini</h4>
                                        <span>Bepoor</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testi row">
                                <div class="col-lg-4">
                                    <div class="testi-img">
                                        <img src="assets/img/testi-img3.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="testi-inner">
                                        <p> <img src="assets/img/quote.png" alt="">I wanted to keep my wedding budget-friendly and so decided to rent bridal ornaments. At Makeover Avenue, I found the designs I was looking for. The rents are quite affordable. The ornaments added the perfect glitter to the whole ceremony.
                                        </p>
                                        <h4>Maneesha</h4>
                                        <span>Mukkam</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** contact Area Start ***** -->
        <section class="contact-area section">
            <div class="contact-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact-inner">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <div class="form-header-box">
                                            <h2>Book <br> Now</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 p-0">
                                        <form name="form2" method="post" action="email.php">
                                            <div class="row w-100">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Name" class="form-control"
                                                            name="name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input placeholder="Phone" class="form-control"
                                                            name="phone" required type="tel"
                                                            pattern="[0-9]{10}" maxlength="10"
                                                            oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')"
                                                            onchange="this.setCustomValidity('')">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Email" class="form-control"
                                                            >
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="hidden" name="esource" value="<?php echo $source;?>">
                                                        <input type="hidden" name="emedium" value="<?php echo $medium;?>">
                                                        <input type="submit" class="form-control" value="submit" name="submit">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Footer Area Start ***** -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets/img/logo/footer-logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="call-footer">
                            <p>call</p>
                            <a href="tel:+919633612211">+91 96336 12211</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="call-footer call-footer2">
                            <p>Email</p>
                            <a href="mailto:makeoveravenueclt@gmail.com">makeoveravenueclt@gmail.com</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="copyright">
                            <p>Copyright &copy; 2022 Makeover. All Rights Reserved. Deigned by <a
                                    href="http://www.theviralmafia.com/?utm_source=makeover" target="_blank"> <img
                                        src="assets/img/logo/viralmafia.svg"></a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- ***** Popup Area Start ***** -->
        <div class="appoint-model">
            <div class="container">
                <div class="col-12">
                    <div class="row">
                        <div class="modal fade order-model" id="exampleModal0" tabindex="-1" role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog log-sign modal-mookambika" role="document">
                                <div class="col-lg-6 p-0 text-center pp-left">
                                    <div class="popupleft-content">
                                        <p>ഇനി താരം നിങ്ങളാകും</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-0">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <a href="#" class="download-close" data-dismiss="modal"
                                                aria-label="Close"><span>X</span></a>
                                        </div>
                                        <div id="letter5">
                                            <div class="letter_inner">
                                                <div class="heading color-b">
                                                    <h2>Request a call back</h2>
                                                </div>
                                                <div class="model-project-details">
                                                    <div class="heading color-b">
                                                        <div class="tab-content">
                                                            <div role="tabpanel" class="tab-pane active tab-log"
                                                                id="profile2">
                                                                <form name="form3" method="post" action="email.php">
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Name" name="name"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input class="form-control"
                                                                                    placeholder="Phone" name="phone"
                                                                                    required type="tel"
                                                                                    pattern="[0-9]{10}" maxlength="10"
                                                                                    oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')"
                                                                                    onchange="this.setCustomValidity('')">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Email">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="hidden" name="esource"
                                                                                    value="<?php echo $source;?>">
                                                                                <input type="hidden" name="emedium"
                                                                                    value="<?php echo $medium;?>">
                                                                                <input type="submit"
                                                                                    class="form-control" value="Submit"
                                                                                    name="submit">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


        <!-- Right Side Bottom Fixed Buttons -->
        <div class="cont_link_box">
            <a id="" href="tel:+919633612211" class="callnow_inte" target="">
            <i class="fas fa-phone-alt" aria-hidden="true"></i>
            </a>
            <a id="" href="https://wa.me/+919633612211" class="whatsapp_inte" target="_blank">
            <i class="fab fa-whatsapp"></i>
            </a>
        </div> 

        <!-- Right Side Enquiry Buttons -->
        <div class="enq-btn">
            <a href="#" data-toggle="modal" data-target="#exampleModal0">Enquire Now</a>
        </div>

        <!-- about Form-->
        <div class="modal fade popsec onload_pop" id="myModal3">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-body">
                        <button type="button" class="btn-close pop_button" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="privacy_onload">

                            <div class="pop-privacy-box">

                                <h4>Privacy Policy</h4>

                                <p>This privacy policy applies to the website( name). We may collect personal information such as your name, address, phone number and email address. We use this information to offer services, deliver services on your request and inform you about events and promotions. We use "cookies" to personalize your online experience. We secure the personal information you provide.</p>

                                <h4>Cookies Policy</h4>

                                <p>We use cookies to improve your experience of our website and to analyze performance and traffic in our website.</p>

                            </div>

                        </div>    
                        
                    </div>

                </div>
            </div>
    </div>

    <!-- START Bootstrap-Cookie-Alert -->
    <div class="alert text-center cookiealert" role="alert">
        <b>Do you like cookies?</b> &#x1F36A; <a href="#" data-toggle="modal" data-target="#myModal3">Learn more</a>

        <button type="button" class="btn btn-primary btn-sm acceptcookies">
            I agree
        </button>
    </div>


    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="assets/js/jquery/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Active js -->
    <script src="assets/js/active.js"></script>

    <!-- cookiealert js -->
    <script src="assets/js/cookiealert.js"></script>

    <script type="text/javascript">
            $(document).ready(function() {
                setTimeout(function() {
                    $("#exampleModal0").modal('show');
                }, 10000);
            });
    </script>

</body>

</html>