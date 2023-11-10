<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Chromeco</title>

    <!-- CSS FILES -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('frontend/css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('frontend/css/templatemo-kind-heart-charity.css') }}" rel="stylesheet">
    <!--

TemplateMo 581 Kind Heart Charity

https://templatemo.com/tm-581-kind-heart-charity

-->

</head>

<body id="section_1">

    <header class="site-header">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 d-flex flex-wrap">
                    <p class="d-flex me-4 mb-0">
                        <i class="bi-geo-alt me-2"></i>
                        ALX - Chromeco
                    </p>

                    <p class="d-flex mb-0">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:info@company.com">
                            info@company.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                    <ul class="social-icon">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-facebook"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-youtube"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-whatsapp"></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('frontend/images/logo.png') }}" class="logo img-fluid"
                    alt="Chronic Medication Collection">
                <span>
                    Chronic Medication Collection
                    <small>YEmpowering Health, One Pill at a Time</small>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#top">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_2">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_2">Our Team</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_6">Contact</a>
                    </li>

                    @auth
                    <li class="nav-item ms-3">
                        <a class="nav-link custom-btn custom-border-btn btn" href="/admin/login">Dashboard</a>
                    </li>

                    @else
                    <li class="nav-item ms-3">
                        <a class="nav-link custom-btn custom-border-btn btn" href="/admin/login">Sign In</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link custom-btn custom-border-btn btn" href="/admin/register">Sign Up</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <main>

        <section class="hero-section hero-section-full-height">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12 col-12 p-0">
                        <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('frontend/images/slide/home_one.png') }}"
                                        class="carousel-image img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>Chromeco</h1>

                                        <p>Empowering Health, One Pill at a Time</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 text-center mx-auto">
                        <h2 class="mb-5">Welcome to Chromeco</h2>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="donate.html" class="d-block">
                                <img src="{{ asset('frontend/images/icons/hands.png') }}"
                                    class="featured-block-image img-fluid" alt="">

                                <!-- <p class="featured-block-text">Become a <strong>volunteer</strong></p> -->
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="donate.html" class="d-block">
                                <img src="{{ asset('frontend/images/icons/heart.png') }}"
                                    class="featured-block-image img-fluid" alt="">

                                <!-- <p class="featured-block-text"><strong>Caring</strong> Earth</p> -->
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="donate.html" class="d-block">
                                <img src="{{ asset('frontend/images/icons/receive.png') }}"
                                    class="featured-block-image img-fluid" alt="">

                                <!-- <p class="featured-block-text">Make a <strong>Donation</strong></p> -->
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="donate.html" class="d-block">
                                <img src="{{ asset('frontend/images/icons/scholarship.png') }}"
                                    class="featured-block-image img-fluid" alt="">

                                <!-- <p class="featured-block-text"><strong>Scholarship</strong> Program</p> -->
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="section-padding section-bg" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                        <img src="{{ asset('frontend/images/about_us.png') }}" class="custom-text-box-image img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="custom-text-box">
                            <h2 class="mb-2">About Us</h2>

                            <h5 class="mb-3">"Empowering Health, One Pill at a Time: Your Journey to Wellness Starts
                                Here."</h5>

                            <p class="mb-0">Chromeco is a web app designed to enable patients to receive their chronic
                                medication without enduring long queues in South African healthcare sectors.
                                The creators of this project both hail from the rural township of KZN. Having been
                                raised by elderly individuals who regularly collected their repeat medication
                                from public clinics or hospitals, the elders experienced the pressure of waking
                                up early to secure timely service. Unfortunately, they often returned home without
                                assistance due to overcrowded health sectors where regular and new clients were
                                indistinguishable. <br><br><br>
                                Observing this recurring issue without effective solutions prompted the inspiration
                                for Chromeco. The goal is to assist individuals with chronic medication needs by
                                providing a more convenient collection process. The creators were motivated by
                                personal experiences and the lack of mitigations in place over the years.
                                The project aims to streamline the medication collection process through
                                technology, ensuring that individuals can access their medication at more
                                suitable times.
                                This initiative serves as our Portfolio Project, marking the conclusion of our
                                Foundations year at ALX Africa. Following three weeks of development, a functional
                                program was presented as a result of our efforts. You can downalod our project here <a
                                    href="https://github.com/Kwenziwa/chromecoapp" class="social-icon-link
                                    bi-github"></a> <a href="https://github.com/Kwenziwa/chromecoapp"
                                    class="custom-btn custom-border-btn btn">Download Now</a>
                            </p>
                        </div>

                    </div>

                </div>
            </div>
        </section>


        <section id="section_2" class="about-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12 text-center mb-4">
                        <h2>Our Team</h2>
                    </div>


                    <div class="col-lg-5 col-md-7 col-12">
                        <div class="custom-text-block">
                            <h2 class="mb-0">Nosipho Khumalo</h2>

                            <p class="text-muted mb-lg-4 mb-md-4">Front-End Developer</p>

                            <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito Professional
                                charity theme based</p>

                            <p>You are not allowed to redistribute this template ZIP file on any other template
                                collection website. Please contact TemplateMo for more information.</p>

                            <ul class="social-icon mt-4">
                                <li class="social-icon-item">
                                    <a href="https://twitter.com/Nosipho1208" class="social-icon-link bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="www.linkedin.com/in/nosipho-simphiwe-khumalo"
                                        class="social-icon-link bi-linkedin"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="https://github.com/NosiphoSK1208" class="social-icon-link bi-github"></a>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <div class="col-lg-5 col-md-7 col-12">
                        <div class="custom-text-block">
                            <h2 class="mb-0">Kwenziwa Khanyile</h2>

                            <p class="text-muted mb-lg-4 mb-md-4">Backend Developer</p>

                            <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito Professional
                                charity theme based</p>

                            <p>You are not allowed to redistribute this template ZIP file on any other template
                                collection website. Please contact TemplateMo for more information.</p>

                            <ul class="social-icon mt-4">
                                <li class="social-icon-item">
                                    <a href="https://github.com/Kwenziwa" class="social-icon-link bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="https://www.linkedin.com/in/kwenziwa-khanyile"
                                        class="social-icon-link bi-linkedin"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="https://github.com/Kwenziwa" class="social-icon-link bi-github"></a>
                                </li>
                            </ul>
                        </div>
                    </div>



                </div>

            </div>
        </section>

        <section class="cta-section section-padding section-bg">
            <div class="container">
                <div class="row justify-content-center align-items-center">

                    <div class="col-lg-5 col-12 ms-auto">
                        <h2 class="mb-0">Make an impact. <br> Save Time.</h2>
                    </div>

                    <div class="col-lg-5 col-12">
                        <a href="/admin/register" class="custom-btn btn smoothscroll">Sign Up Now!</a>
                    </div>

                </div>
            </div>
        </section>


        <section class="section-padding" id="section_3">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center mb-4">
                        <h2>Our Key Features</h2>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">
                            <img src="{{ asset('frontend/images/causes/one.png') }}"
                                class="custom-block-image img-fluid" alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">Medication Tracking</h5>

                                    <p>Allow users to track their medication intake, providing a
                                        digital log that includes dosage, frequency, and any additional
                                        notes. Implement reminders to help users stay consistent with their
                                        medication schedule.</p>


                                </div>
                                <a class="custom-btn btn"></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">
                            <img src="{{ asset('frontend/images/causes/two.png') }}"
                                class="custom-block-image img-fluid" alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">Pharmacy Integration</h5>

                                    <p>Integrate with local pharmacies to facilitate seamless medication collection.
                                        Users can choose their preferred pharmacy, place medication orders, and receive
                                        notifications when their prescriptions are ready for pickup.</p>


                                </div>
                                <a class="custom-btn btn"></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="custom-block-wrap">
                            <img src="{{ asset('frontend/images/causes/three.png') }}"
                                class="custom-block-image img-fluid" alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">Medication Pick-up Reminder</h5>

                                    <p>The Medication Pick-up Reminder feature is designed to enhance user
                                        adherence and convenience by
                                        sending timely reminders for users to collect their prescribed medications
                                        from the chosen pharmacy. </p>



                                </div>

                                <a class="custom-btn btn"></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        < <section class="contact-section section-padding" id="section_6">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
                        <div class="contact-info-wrap">
                            <h2>Get in touch</h2>



                            <div class="contact-info">
                                <h5 class="mb-3">Contact Infomation</h5>

                                <p class="d-flex mb-2">
                                    <i class="bi-geo-alt me-2"></i>
                                    ALX Office , South Africa
                                </p>

                                <p class="d-flex mb-2">
                                    <i class="bi-telephone me-2"></i>

                                    <a href="tel: 120-240-9600">
                                        120-240-9600
                                    </a>
                                </p>

                                <p class="d-flex">
                                    <i class="bi-envelope me-2"></i>

                                    <a href="mailto:info@yourgmail.com">
                                        support@example.com
                                    </a>
                                </p>


                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12 mx-auto">
                        <form class="custom-form contact-form" action="#" method="post" role="form">
                            <h2>Contact form</h2>

                            <p class="mb-4">Or, you can just send an email:
                                <a href="#">info@example.com</a>
                            </p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="first-name" id="first-name" class="form-control"
                                        placeholder="Jack" required>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="last-name" id="last-name" class="form-control"
                                        placeholder="Doe" required>
                                </div>
                            </div>

                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control"
                                placeholder="user@example.com" required>

                            <textarea name="message" rows="5" class="form-control" id="message"
                                placeholder="What can we help you?"></textarea>

                            <button type="submit" class="form-control">Send Message</button>
                        </form>
                    </div>

                </div>
            </div>
            </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 mb-4">
                    <img src="{{ asset('frontend/images/logo.png') }}" class="logo img-fluid" alt="">
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <h5 class="site-footer-title mb-3">Quick Links</h5>

                    <ul class="footer-menu">
                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">About Us</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Our Team</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Our Features</a></li>

                        <li class="footer-menu-item"><a href="/admin/register" class="footer-menu-link">Sign Up</a></li>

                        <li class="footer-menu-item"><a href="/admin/login" class="footer-menu-link">Sign In</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mx-auto">
                    <h5 class="site-footer-title mb-3">Contact Infomation</h5>

                    <p class="text-white d-flex mb-2">
                        <i class="bi-telephone me-2"></i>

                        <a href="tel: 123-456-7890" class="site-footer-link">
                            123-456-7890
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:info@yourgmail.com" class="site-footer-link">
                            support@example.com
                        </a>
                    </p>

                    <p class="text-white d-flex mt-3">
                        <i class="bi-geo-alt me-2"></i>
                        ALX Office , South Africa
                    </p>

                    <a href="#" class="custom-btn btn mt-3">Get Direction</a>
                </div>
            </div>
        </div>

        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-7 col-12">
                        <p class="copyright-text mb-0">Copyright © 2023 <a href="#">Chromico</a>
                    </div>

                    <div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
                        <ul class="social-icon">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-twitter"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-instagram"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-linkedin"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="" class="social-icon-link bi-youtube"></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>
