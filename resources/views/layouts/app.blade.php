<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <title>{{ config('app.name', 'AboveMax') }}</title>
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />

        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/royal-preload.css') }}" />
    </head>

    <body class="royal_preloader">
        <div id="page" class="site">
            <header id="site-header" class="site-header header-style-2 header-fullwidth sticky-header header-static">
                <!-- Main Header start -->
                <div class="header-topbar">
                    <div class="octf-area-wrap">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="topbar-info">
                                        <li><i class="fas fa-envelope"></i><a href="mailto:help@abovemax.com">
                                                help@abovemax.com</a></li>
                                        <li><i class="fas fa-clock"></i> Mon - Sat: 8.00 am - 7.00 pm</li>
                                    </ul>
                                </div>
                                <div class="col-md-6 text-right">
                                    <div class="topbar-right">
                                        <ul class="extra-text">
                                            <li>We are creative, ambitious and ready for challenges! <a
                                                    href="/contact">Hire Us</a></li>
                                        </ul>
                                        <ul class="social-list">
                                            <li><a href="http://twitter.com" target="_self"><i
                                                        class="fab fa-twitter"></i></a></li>
                                            <li><a href="http://facebook.com" target="_self"><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="http://linkedin.com" target="_self"><i
                                                        class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="http://instagram" target="_self"><i
                                                        class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="octf-main-header">
                    <div class="octf-area-wrap">
                        <div class="container-fluid octf-mainbar-container">
                            <div class="octf-mainbar">
                                <div class="octf-mainbar-row octf-row">
                                    <div class="octf-col logo-col">
                                        <div id="site-logo" class="site-logo">
                                            <a href="/">
                                                <img src="images/logo.png" alt="AboveMax" class="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="octf-col menu-col">
                                        <nav id="site-navigation" class="main-navigation">
                                            <ul class="menu">
                                                <li><a href="/">Home</a></li>
                                                <li class="menu-item-has-children"><a href="#">Company</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="/about-us">About us</a></li>
                                                        <li><a href="/why-choose-us">Why Choose Us</a></li>
                                                        <li><a href="/our-team">Our team</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#">Services</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="/it-services">It Services</a></li>
                                                        <li><a href="/web-development">Web Development</a></li>
                                                        <li><a href="/mobile-development">Mobile Development</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="/portfolio">Portfolio</a></li>
                                                <li><a href="/contact">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="octf-col cta-col text-right">
                                        <!-- Call To Action -->
                                        <div class="octf-btn-cta">

                                            <div class="octf-header-module">
                                                <div class="toggle_search octf-cta-icons">
                                                    <i class="flaticon-search"></i>
                                                </div>
                                                <!-- Form Search on Header -->
                                                <div class="h-search-form-field collapse">
                                                    <div class="h-search-form-inner">
                                                        <form role="search" method="get" id="hsearch-form"
                                                            class="search-form">
                                                            <label><span class="screen-reader-text">Search for:</span>
                                                                <input type="search" class="search-field"
                                                                    placeholder="Search …" value=""
                                                                    name="s"></label>
                                                            <button type="submit" class="search-submit"><i
                                                                    class="flaticon-search"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="octf-header-module">
                                                <div class="btn-cta-group contact-header">
                                                    <i class="fas fa-phone"></i>
                                                    <div class="cinfo-header">
                                                        <span>Have Any Questions?</span>
                                                        <span class="main-text"><a
                                                                href="tel:+1-800-456-478-23">+1-800-456-478-23</a></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="octf-header-module">
                                                <div class="btn-cta-group btn-cta-header">
                                                    <a class="octf-btn octf-btn-third" href="/contact">Free
                                                        Quote</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header_mobile">
                    <div class="container">
                        <div class="mlogo_wrapper clearfix">
                            <div class="mobile_logo">
                                <a href="/">
                                    <img src="images/logo.png" alt="AboveMax">
                                </a>
                            </div>
                            <div id="mmenu_toggle">
                                <button></button>
                            </div>
                        </div>
                        <div class="mmenu_wrapper">
                            <div class="mobile_nav collapse">
                                <ul id="menu-main-menu" class="mobile_mainmenu">
                                    <li><a href="/contact">Contact</a></li>
                                    <li class="menu-item-has-children"><a href="#">Company</a>
                                        <ul class="sub-menu">
                                            <li><a href="/about-us">About us</a></li>
                                            <li><a href="/why-choose-us">Why Choose Us</a></li>
                                            <li><a href="/our-team">Our team</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="/it-services">It Services</a></li>
                                            <li><a href="/web-development">Web Development</a></li>
                                            <li><a href="/mobile-development">Mobile Development</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/portfolio">Projects</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            @yield('content')
            <footer id="site-footer" class="site-footer footer-v2">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-4 col-sm-6">
                            <div class="contact-info box-style2 ft-contact-info">
                                <div class="box-icon"><i class="flaticon-world-globe"></i></div>
                                <p>Eden Valley, Faisalabad, Pakistan</p>
                                <h6>Our Address</h6>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="contact-info box-style2 ft-contact-info">
                                <div class="box-icon"><i class="flaticon-envelope"></i></div>
                                <p>helpdesk@abovemax.com</p>
                                <h6>Our Mailbox</h6>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="contact-info box-style2 ft-contact-info">
                                <div class="box-icon"><i class="flaticon-phone-1"></i></div>
                                <p>+1 -800-456-478-23</p>
                                <h6>Our Phone</h6>
                            </div>
                        </div>
                    </div>
                    <div class="space-65"></div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/it-services">Services</a></li>
                                    <li><a href="/portfolio">Portfolio</a></li>
                                    <li><a href="/contact">Contacts</a></li>
                                </ul>
                            </div>
                            <div class="space-20"></div>
                            <p class="copyright-text v2">Copyright © 2012 AboveMax. All Rights Reserved.
                            </p>
                            <div class="space-26"></div>
                            <div class="ft-list-icon">
                                <a class="twitter" href="twitter.com"><i class="fab fa-twitter"></i></a>
                                <a class="facebook" href="facebook.com"><i class="fab fa-facebook-f"></i></a>
                                <a class="linkedin" href="linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                                <a class="instagram" href="instagram.com"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <a id="back-to-top" href="#" class="show"><i class="flaticon-up-arrow"></i></a>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/jquery.isotope.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/easypiechart.min.js') }}"></script>
        <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="{{ asset('js/header-mobile.js') }}"></script>
        <script src="{{ asset('js/royal_preloader.min.js') }}"></script>
        <script>
        window.jQuery = window.$ = jQuery;  
        (function($) { "use strict";
            //Preloader
            Royal_Preloader.config({
                mode           : 'logo',
                logo           : '{{ asset('images/logo.png') }}',
                logo_size      : [160, 75],
                showProgress   : true,
                showPercentage : true,
                text_colour: '#000000',
                background:  '#ffffff'
            });
        })(jQuery);
    </script> 
    </body>

</html>
