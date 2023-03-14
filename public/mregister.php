<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>OAR &lt;&sol;WebDev&gt; - Forms Page</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Place favicon.ico in the root directory -->

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="../../assets/img/favicon.png" type="image/png">

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="../../assets/css/bootstrap-5.0.0-beta1.min.css" />
    <link rel="stylesheet" href="bootstrap.5.1.3.css" />
    <link rel="stylesheet" href="../../assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="../../assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="../../assets/css/animate.css" />
    <link rel="stylesheet" href="fonts,_icomoon,_style.css+css,_owl.carousel.min.css+css,_bootstr.css" />   
    <link rel="stylesheet" href="../../assets/css/lindy-uikit.css" />   
    
    <style>
        .center {
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- ========================= preloader start ========================= -->
    <div class="preloader">
        <div class="loader">
            <div class="spinner">
                <div class="spinner-container">
                    <div class="spinner-rotator">
                        <div class="spinner-left">
                            <div class="spinner-circle"></div>
                        </div>
                        <div class="spinner-right">
                            <div class="spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========================= preloader end ========================= -->

    <!-- ========================= hero-section-wrapper-5 start ========================= -->
    <section id="home" class="hero-section-wrapper-5">

        <!-- ========================= header-6 start ========================= -->
        <header class="header header-6">
            <div class="navbar-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg">
                                <a class="navbar-brand" href="http://cs210.byethost33.com">
                                    <img src="../../assets/img/logo/orLogoMenu.png" alt="Logo" />
                                </a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent6" aria-controls="navbarSupportedContent6" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                  </button>

                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent6">
                                    <ul id="nav6" class="navbar-nav ms-auto">
                                        <li class="nav-item">
                                            <a class="page-scroll active" href="http://cs210.byethost33.com/#home">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="http://cs210.byethost33.com/#projects">Projects</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="http://cs210.byethost33.com/#aboutme">About Me</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="page-scroll" href="http://cs210.byethost33.com/#interests">Interest</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="http://cs210.byethost33.com/#contact">Contact Me</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="http://cs210.byethost33.com/#clients">Clients</a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- navbar collapse -->
                            </nav>
                            <!-- navbar -->
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </div>
            <!-- navbar area -->
        </header>
        <!-- ========================= header-6 end ========================= -->
        <section id="contact" class="contact-section contact-style-3 img-bg" style="background-image: url('../../assets/img/hero/hero-5/hero-bg.svg')">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-5 col-xl-5 col-lg-7 col-md-10">
                        <div class="section-title text-center mb-50">
                            <br>
                            <h3 class="mb-15">&lt;&sol;WebApp Sign-Up Form&gt;</h3>
                            <p>Please fill the following form to create an account.</p>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-4">
                        <div class="contact-form-wrapper" style="padding: 20px; border-radius: 10px; border: 4px solid #6466aa; background-color: rgba(235, 194, 110, 0.5);">
                            <form action="register.php" method="POST">
                                <div class="row">                                    
                                    <div class="col-md-12">
                                        <label>Username:</label>
                                        <div class="single-input">
                                            <input type="text" id="username" name="username" class="form-input" placeholder="Username">
                                            <i class="lni lni-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label>Email:</label>
                                        <div class="single-input">
                                            <input type="email" id="email" name="email" class="form-input" placeholder="Email">
                                            <i class="lni lni-envelope"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label>Password:</label>
                                        <div class="single-input">
                                            <input type="password" id="password" name="password" class="form-input" placeholder="Password">
                                            <i class="lni lni-phone"></i>
                                        </div>
                                    </div>  
                                    <div class="col-md-12">
                                        <label>Re-type Password:</label>
                                        <div class="single-input">
                                            <input type="password" id="password2" name="password2" class="form-input" placeholder="Re-Type Password">
                                            <i class="lni lni-lock"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="agree">
                                            <input type="checkbox" name="agree" id="agree" value="yes"/> I agree with the <a href="#" title="term of services">term of services</a>
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <label>&nbsp;</label>
                                        <div class="form-button">
                                            <button type="submit" class="button"> <i class="lni lni-enter"></i>Register</button>
                                        </div>
                                    </div>
                                </div>
                                <footer>Already a member? <a href="login.php">Login here</a></footer>
                            </form>
                        </div>
    
                    </div>
                    <div class="col-lg-4">
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= contact-style-3 end ========================= -->
        
    <!-- ========================= footer style-4 start ========================= -->
    <footer class="footer footer-style-4">
        <div class="container">
            <div class="widget-wrapper">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-widget wow fadeInUp" data-wow-delay=".2s">
                            <div class="logo">
                                <a href="#0"> <img src="../../assets/img/logo/orLogo.svg" alt=""> </a>
                            </div>
                            <p class="desc">Website Landing page for CS210 - Web Development. Students can visit and observe the result of meeting the requirements of various practical activities and exercises.</p>
                            <ul class="socials">
                                <li><a href="http://www.facebook.com" target="_blank"><i class="lni lni-facebook-filled"></i> </a> </li>
                                <li><a href="http://www.whatsapp.com" target="_blank"><i class="lni lni-whatsapp"></i> </a> </li>
                                <li><a href="http://www.google.com" target="_blank"><i class="lni lni-google"></i> </a> </li>
                                <li><a href="http://www.ubuntu.com" target="_blank"><i class="lni lni-ubuntu"></i> </a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-1 col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget wow fadeInUp" data-wow-delay=".3s">
                            <h6>&lt;&sol;OAR&gt;</h6>
                            <ul class="links">
                                <li> <a href="#home">Home</a> </li>
                                <li> <a href="#projects">Projects</a> </li>
                                <li> <a href="#aboutme">About Me</a> </li>
                                <li> <a href="#interests">Interests</a> </li>
                                <li> <a href="#contact">Contact Me</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget wow fadeInUp" data-wow-delay=".4s">
                            <h6>Quick Links</h6>
                            <ul class="links">
                                <li> <a href="http://www.w3schools.com" target="_blank">W3Schools</a> </li>
                                <li> <a href="https://www.codecademy.com/" target="_blank">Code Academy</a> </li>
                                <li> <a href="https://c4technologies.bz/" target="_blank">C4 Technologies Ltd</a> </li>
                                <li> <a href="https://skoolmobile.com/" target="_blank">Skool Mobile</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget wow fadeInUp" data-wow-delay=".5s">
                            <h6>Download App</h6>
                            <ul class="download-app">
                                <li>
                                    <a href="#0">
                                        <span class="icon"><i class="lni lni-apple"></i></span>
                                        <span class="text">Download on the <b>App Store</b> </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <span class="icon"><i class="lni lni-play-store"></i></span>
                                        <span class="text">GET IT ON <b>Play Store</b> </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-wrapper wow fadeInUp" data-wow-delay=".2s">
                <p>&copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> Omar Riverol. All Rights Reserved. <br /> Template designed and developed by <a href="https://uideck.com" rel="nofollow" target="_blank">UIdeck</a> Built-with <a href="https://uideck.com/templates/nova/" rel="nofollow" target="_blank">Nova Template & Lindy UI Kit</a></p>
            </div>
        </div>
    </footer>
    <!-- ========================= footer style-4 end ========================= -->

    <!-- ========================= scroll-top start ========================= -->
    <a href="#home" class="scroll-top"> <i class="lni lni-chevron-up"></i> </a>
    <!-- ========================= scroll-top end ========================= -->


    <!-- ========================= JS here ========================= -->
    <script src="../../assets/js/bootstrap-5.0.0-beta1.min.js"></script>
    <script src="../../assets/js/tiny-slider.js"></script>
    <script src="../../assets/js/wow.min.js"></script>
    <script src="../../assets/js/main.js"></script>
</body>

</html>