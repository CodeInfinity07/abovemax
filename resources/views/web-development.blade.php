@extends('layouts.app')

@section('content')
    <div id="content" class="site-content">
        <div class="page-header flex-middle">
            <div class="container">
                <div class="inner flex-middle">
                    <h1 class="page-title">Web Development</h1>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="/web-development">IT Services</a></li>
                        <li class="active">Web Development</li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="service-web">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center mb-5 mb-lg-0 align-self-center">
                        <img src="images/pic1-service1.png" alt="">
                    </div>
                    <div class="col-lg-6">
                        <div class="service-process">
                            <div class="ot-heading">
                                <span>// about service</span>
                                <h2 class="main-heading">We Provide Best <br>Web Development</h2>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="process-box">
                                        <div class="step">01.</div>
                                        <h6 class="mb-0">Java Development</h6>
                                        <p>We’re committed to building sustainable and high-quality Java solutions.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="process-box">
                                        <div class="step">02.</div>
                                        <h6 class="mb-0">PHP Development</h6>
                                        <p>We’re committed to building sustainable and high-quality Java solutions.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="process-box">
                                        <div class="step">03.</div>
                                        <h6 class="mb-0">C++ Development</h6>
                                        <p>We’re committed to building sustainable and high-quality Java solutions.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="process-box">
                                        <div class="step">04.</div>
                                        <h6 class="mb-0">.NET Development</h6>
                                        <p>We’re committed to building sustainable and high-quality Java solutions.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="service">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <div class="service-box s-box">
                            <span class="big-number">01</span>
                            <div class="icon-main color-s1"><span class="flaticon-correct"></span></div>
                            <div class="content-box">
                                <h5>Machine Learning</h5>
                                <p>Support and Evolution</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <div class="service-box s-box">
                            <span class="big-number">02</span>
                            <div class="icon-main color-s2"><span class="flaticon-correct"></span></div>
                            <div class="content-box">
                                <h5>Artificial Intelligence</h5>
                                <p>Support and Evolution</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-box s-box">
                            <span class="big-number">03</span>
                            <div class="icon-main color-s3"><span class="flaticon-correct"></span></div>
                            <div class="content-box">
                                <h5>Augmented Reality</h5>
                                <p>Support and Evolution</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="service-web-video">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="tab-video">
                            <div class="ot-heading">
                                <span>// technology index</span>
                                <h2 class="main-heading">We Organize Our <br>Production Process</h2>
                            </div>
                            <div class="space-15"></div>
                            <div class="ot-tabs">
                                <ul class="tabs-heading unstyle">
                                    <li class="tab-link octf-btn current" data-tab="tab-1518">Analysis</li>
                                    <li class="tab-link octf-btn" data-tab="tab-2518">Design</li>
                                    <li class="tab-link octf-btn" data-tab="tab-3518">Testing</li>
                                </ul>
                                <div id="tab-1518" class="tab-content current">
                                    <p>AboveMax is the partner of choice for many of the world’s leading enterprises, SMEs
                                        and technology challengers. We help businesses elevate their value through custom
                                        software development, product design, QA and consultancy services. Our product
                                        design service lets you prototype, test and validate your ideas.</p>
                                    <p><a class="btn-details" href="/it-services"><i class="flaticon-right-arrow-1"></i>
                                            LEARN MORE</a></p>
                                </div>
                                <div id="tab-2518" class="tab-content">
                                    <p>While integrating the security with the DevOps approach has always been of high
                                        demand, this requires a completely different range of processes and tools. DevOps is
                                        already known to boast of an agile development methodology. Now when the inputs of
                                        the security experts I’ll be brought in a collaborative environment, the project
                                        will have an array of effective security safeguards.</p>
                                    <p><a class="btn-details" href="/web-development"><i
                                                class="flaticon-right-arrow-1"></i> LEARN MORE</a></p>
                                </div>
                                <div id="tab-3518" class="tab-content">
                                    <p>In spite of disturbing the agile development process of the DevOps approach, the
                                        additional security inputs only enhance the safeguards and reliability of the
                                        project. So, in a way, DevSecOps will only extend the benefits of a DevOps approach
                                        further with security inputs. DevOps is already known to boast of an agile
                                        development methodology.</p>
                                    <p><a class="btn-details" href="/mobile-development"><i
                                                class="flaticon-right-arrow-1"></i> LEARN MORE</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offset-xl-1 col-xl-6 col-lg-6 split-right-img">
                        <div class="video-popup">
                            <div class="btn-inner">
                                <a class="btn-play" href="https://vimeo.com/94686522">
                                    <i class="flaticon-play"></i>
                                    <span class="circle-1"></span>
                                    <span class="circle-2"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <br>
        <br>

        <div class="service-partner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="partners">
                            <div class="owl-carousel owl-theme home-client-carousel">
                                <div class="partners-slide">
                                    <a href="#" class="client-logo">
                                        <figure class="partners-slide-inner">
                                            <img class="partners-slide-image" src="images/client-logos/client1.svg"
                                                alt="">
                                        </figure>
                                    </a>
                                </div>
                                <div class="partners-slide">
                                    <a href="#" class="client-logo">
                                        <figure class="partners-slide-inner">
                                            <img class="partners-slide-image" src="images/client-logos/client2.svg"
                                                alt="">
                                        </figure>
                                    </a>
                                </div>
                                <div class="partners-slide">
                                    <a href="#" class="client-logo">
                                        <figure class="partners-slide-inner">
                                            <img class="partners-slide-image" src="images/client-logos/client3.svg"
                                                alt="">
                                        </figure>
                                    </a>
                                </div>
                                <div class="partners-slide">
                                    <a href="#" class="client-logo">
                                        <figure class="partners-slide-inner">
                                            <img class="partners-slide-image" src="images/client-logos/client4.png"
                                                alt="">
                                        </figure>
                                    </a>
                                </div>
                                <div class="partners-slide">
                                    <a href="#" class="client-logo">
                                        <figure class="partners-slide-inner">
                                            <img class="partners-slide-image" src="images/client-logos/client5.svg"
                                                alt="">
                                        </figure>
                                    </a>
                                </div>
                                <div class="partners-slide">
                                    <a href="#" class="client-logo">
                                        <figure class="partners-slide-inner">
                                            <img class="partners-slide-image" src="images/client-logos/client6.svg"
                                                alt="">
                                        </figure>
                                    </a>
                                </div>
                                <div class="partners-slide">
                                    <a href="#" class="client-logo">
                                        <figure class="partners-slide-inner">
                                            <img class="partners-slide-image" src="images/client-logos/client1.svg"
                                                alt="">
                                        </figure>
                                    </a>
                                </div>
                                <div class="partners-slide">
                                    <a href="#" class="client-logo">
                                        <figure class="partners-slide-inner">
                                            <img class="partners-slide-image" src="images/client-logos/client2.svg"
                                                alt="">
                                        </figure>
                                    </a>
                                </div>
                                <div class="partners-slide">
                                    <a href="#" class="client-logo">
                                        <figure class="partners-slide-inner">
                                            <img class="partners-slide-image" src="images/client-logos/client3.svg"
                                                alt="">
                                        </figure>
                                    </a>
                                </div>
                                <div class="partners-slide">
                                    <a href="#" class="client-logo">
                                        <figure class="partners-slide-inner">
                                            <img class="partners-slide-image" src="images/client-logos/client4.png"
                                                alt="">
                                        </figure>
                                    </a>
                                </div>
                                <div class="partners-slide">
                                    <a href="#" class="client-logo">
                                        <figure class="partners-slide-inner">
                                            <img class="partners-slide-image" src="images/client-logos/client5.svg"
                                                alt="">
                                        </figure>
                                    </a>
                                </div>
                                <div class="partners-slide">
                                    <a href="#" class="client-logo">
                                        <figure class="partners-slide-inner">
                                            <img class="partners-slide-image" src="images/client-logos/client6.svg"
                                                alt="">
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="service-web-clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ot-heading text-center">
                            <span>// our clients</span>
                            <h2 class="main-heading">We are Trusted <br>15+ Countries Worldwide</h2>
                        </div>
                    </div>
                </div>
                <div class="space-35"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="ot-testimonials">
                            <div class="owl-carousel owl-theme testimonial-inner ot-testimonials-slider">
                                <div class="testi-item">
                                    <div class="layer1"></div>
                                    <div class="layer2">
                                        <div class="t-head flex-middle">
                                            <img src="images/testi2.png" alt="">
                                            <div class="tinfo">
                                                <h6>SoftTech,</h6>
                                                <span>Manager of Company</span>
                                            </div>
                                        </div>
                                        <div class="ttext">
                                            "Patience. Infinite patience. No shortcuts. Very well thought out and articulate
                                            communication. Clear milestones, deadlines and fast work. Even if the client is
                                            being careless. The best part...always solving problems with great original
                                            ideas!."
                                        </div>
                                    </div>
                                </div>
                                <div class="testi-item">
                                    <div class="layer1"></div>
                                    <div class="layer2">
                                        <div class="t-head flex-middle">
                                            <img src="images/testi1.png" alt="">
                                            <div class="tinfo">
                                                <h6>Moonkle LTD,</h6>
                                                <span>Client of Company</span>
                                            </div>
                                        </div>
                                        <div class="ttext">
                                            "Very well thought out and articulate communication. Clear milestones, deadlines
                                            and fast work. Patience. Infinite patience. No shortcuts. Even if the client is
                                            being careless. The best part...always solving problems with great original
                                            ideas!."
                                        </div>
                                    </div>
                                </div>
                                <div class="testi-item">
                                    <div class="layer1"></div>
                                    <div class="layer2">
                                        <div class="t-head flex-middle">
                                            <img src="images/testi2.png" alt="">
                                            <div class="tinfo">
                                                <h6>SoftTech,</h6>
                                                <span>Manager of Company</span>
                                            </div>
                                        </div>
                                        <div class="ttext">
                                            "Patience. Infinite patience. No shortcuts. Very well thought out and articulate
                                            communication. Clear milestones, deadlines and fast work. Even if the client is
                                            being careless. The best part...always solving problems with great original
                                            ideas!."
                                        </div>
                                    </div>
                                </div>
                                <div class="testi-item">
                                    <div class="layer1"></div>
                                    <div class="layer2">
                                        <div class="t-head flex-middle">
                                            <img src="images/testi1.png" alt="">
                                            <div class="tinfo">
                                                <h6>Moonkle LTD,</h6>
                                                <span>Client of Company</span>
                                            </div>
                                        </div>
                                        <div class="ttext">
                                            "Very well thought out and articulate communication. Clear milestones, deadlines
                                            and fast work. Patience. Infinite patience. No shortcuts. Even if the client is
                                            being careless. The best part...always solving problems with great original
                                            ideas!."
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
