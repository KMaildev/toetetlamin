@extends('layouts.main')
@section('content')
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset('data/about_banner.jpg') }})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>About of Our Company</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><span>-</span></li>
                    <li class="active">
                        About Us
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="about-four">
        <div class="about-four__shape-2 img-bounce">
            <img src="{{ asset('assets/images/shapes/about-four-shape-2.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-8 col-lg-8 col-sm-12">
                    <div class="about-four__left">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">
                                    About Us
                                </span>
                                <div class="section-title__border-box"></div>
                            </div>
                            <h2 class="section-title__title">
                                TOE TET LA MIN CO.,LTD
                            </h2>
                        </div>
                        <div class="about-four__top">
                            <div class="about-four__icon">
                                <span class="icon-group"></span>
                            </div>
                            <div class="about-four__content">
                                <h4>
                                    Overseas Employment Agency
                                </h4>
                            </div>
                        </div>
                        <p class="about-four__text-1" style="text-align: justify; color: black;">
                            <span style="font-weight: bold;">TOE TET LA MIN Overseas Employment Agency</span> ,despite being
                            granted permission to establish
                            in 2017, we embark on our journey as an overseas employment agency company in 2023 due to a
                            multitude of reasons. Our mission is to connect job seekers with employment opportunities in
                            other
                            countries and help them navigate the complex process of working abroad.
                            <br><br>
                            With our extensive experience and vast network of international employers, we are dedicated to
                            helping individuals find rewarding careers in their desired countries.
                            <br><br>
                            We specialize in matching qualified candidates with suitable positions in their desired
                            countries. Our
                            extensive network of international employers allows us to offer a wide range of job
                            opportunities
                            across industries.
                            <br><br>
                            Trust is the foundation of our relationships, and we strive to build long-lasting partnerships
                            based on
                            mutual respect. We approach our work with the highest level of professionalism, ensuring
                            confidentiality, reliability, and timely delivery of services. We embrace diversity and
                            inclusion, valuing
                            individuals from all backgrounds and promoting equal opportunities for all candidates.
                        </p>
                    </div>
                </div>

                <div class="col-xl-4 col-md-4 col-lg-4 col-sm-12">
                    <br><br>

                    <img src="{{ asset('data/office.jpg') }}" alt=""
                        style="box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px; width: 100%; height: auto; background-size: center; object-fit: cover;">

                    <div class="about-four__btn-box">
                        <a href="{{ route('contact.index') }}" class="thm-btn about-four__btn">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery-two" style="padding-top: 0px;">
        <div class="container">
            <div class="gallery-one__carousel owl-carousel owl-theme thm-owl__carousel"
                data-owl-options='{
                "loop": true,
                "autoplay": true,
                "margin": 10,
                "nav": false,
                "dots": false,
                "smartSpeed": 500,
                "autoplayTimeout": 10000,
                "navText": ["<span class=\"icon-up-arrow\"></span>","<span class=\"icon-down-arrow\"></span>"],
                "responsive": {
                    "0": {
                        "items": 1
                    },
                    "768": {
                        "items": 3
                    },
                    "992": {
                        "items": 4
                    },
                    "1200": {
                        "items": 5
                    }
                }
            }'>

                <div class="item">
                    <div class="gallery-one__single">
                        <div class="gallery-one__img">
                            <img src="{{ asset('data/1.png') }}" alt="">
                            <div class="gallery-one__icon">
                                <a href="{{ asset('data/1.png') }}" class="img-popup"><i class="icon-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="gallery-one__single">
                        <div class="gallery-one__img">
                            <img src="{{ asset('data/2.png') }}" alt="">
                            <div class="gallery-one__icon">
                                <a href="{{ asset('data/2.png') }}" class="img-popup"><i class="icon-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="gallery-one__single">
                        <div class="gallery-one__img">
                            <img src="{{ asset('data/3.png') }}" alt="">
                            <div class="gallery-one__icon">
                                <a href="{{ asset('data/3.png') }}" class="img-popup"><i class="icon-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="gallery-one__single">
                        <div class="gallery-one__img">
                            <img src="{{ asset('data/4.png') }}" alt="">
                            <div class="gallery-one__icon">
                                <a href="{{ asset('data/4.png') }}" class="img-popup"><i class="icon-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <br>
    <section class="faq-one">
        <div class="faq-one__shape-1 float-bob-y">
            <img src="{{ asset('assets/images/shapes/faq-one-shape-1.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="faq-one__left">
                        <div class="faq-one__bg" style="background-image: url({{ asset('data/office.jpg') }});">
                        </div>
                        <div class="faq-one__inner">
                            <div class="faq-one__icon">
                                <span class="icon-deal"></span>
                            </div>
                            <h3 class="faq-one__title">
                                Our Vision, <br> Mission & Value
                            </h3>

                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="faq-one__right">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">
                                    Reason of Our Success
                                </span>
                                <div class="section-title__border-box"></div>
                            </div>
                            <h2 class="section-title__title">
                                Company Statement
                            </h2>
                        </div>
                        <div class="faq-one__faq-box">
                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>
                                            OUR MISSION
                                        </h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>
                                                Our mission is to bridge the gap between job seekers and international
                                                employers, fostering
                                                mutually beneficial relationships that lead to successful careers and
                                                organizational growth. We
                                                strive to provide exceptional service to both candidates and employers,
                                                ensuring a seamless and
                                                efficient recruitment process.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion active">
                                    <div class="accrodion-title">
                                        <h4>
                                            OUR VISION
                                        </h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>
                                                Our vision to bridge the gap between talented job seekers and international
                                                employers, fostering
                                                mutually beneficial relationships that lead to successful careers and
                                                organizational growth. We
                                                envision a world where individuals can explore global opportunities, develop
                                                their skills, and
                                                contribute to the growth of diverse industries worldwide.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>OUR VALUE</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <ul class="list-icons">
                                                <li>
                                                    Excellence - We strive for excellence in every aspect of our services,
                                                    aiming to
                                                    exceed expectations.
                                                </li>
                                                <li>
                                                    Respect - We value and respect the diverse backgrounds and perspectives
                                                    of
                                                    all
                                                    individuals we work with.
                                                </li>
                                                <li>
                                                    Collaboration - We foster strong partnerships, working together to
                                                    achieve
                                                    mutual success.
                                                </li>
                                                <li>
                                                    Responsiveness - We are responsive to the needs of our clients,
                                                    providing
                                                    timely
                                                    solutions and support.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br>
    <section class="excellence-one">
        <div class="container">
            <div class="excellence-one__inner">
                <div class="excellence-one__bg"
                    style="background-image: url({{ asset('assets/images/backgrounds/excellence-one-bg.png') }});"></div>
                <div class="excellence-one__shape-1 img-bounce">
                    <img src="{{ asset('assets/images/shapes/excellence-one-shape-1.png') }}" alt="">
                </div>
                <div class="excellence-one__shape-2 float-bob-x">
                    <img src="{{ asset('assets/images/shapes/excellence-one-shape-2.png') }}" alt="">
                </div>
                <h3 class="excellence-one__title">
                    TOE TET LA MIN CO.,LTD
                </h3>
                <p style="color: white;">
                    TOE TET LA MIN CO.,LTD is the leading Manpower Recruiting Agency based in Myanmar, licensed and <br>
                    authorized by the Ministry of Labor, Employment and Social Security of Myanmar.
                </p>
                <div class="excellence-one__btn-box">
                    <a href="{{ route('contact.index') }}" class="excellence-one__btn thm-btn">
                        Contact Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <br><br>
    <section class="testimonial-three">
        <div class="testimonial-three__map float-bob-y">
            <img src="{{ asset('assets/images/shapes/testimonial-three-map.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">

                <div class="col-xl-7 col-lg-7">
                    <h3 class="faq-one__title" style="color: black">
                        Organization Chart
                    </h3>
                    <div class="testimonial-three__left">
                        <div class="testimonial-three__shape-2 img-bounce">
                            <img src="assets/images/shapes/testimonial-three-shape-2.png" alt="">
                        </div>
                    </div>
                    <img src="{{ asset('data/org.png') }}" alt="" style="width: 70%;">
                </div>

                <div class="col-xl-5 col-lg-5">
                    <div class="testimonial-three__right">
                        <div class="testimonial-three__shape-1">
                            <img src="assets/images/shapes/testimonial-three-shape-1.png" alt="">
                        </div>
                        <ul class="list-unstyled testimonial-three__counter-box">
                            <li>
                                <div class="testimonial-three__counter-single">
                                    <div class="testimonial-three__counter-icon">
                                        <span class="icon-life-insurance"></span>
                                    </div>
                                    <div class="testimonial-three__counter-content-box">
                                        <div class="testimonial-three__counter-count-box count-box">
                                            <h3 class="count-text" data-stop="1500" data-speed="1500">00</h3>
                                            <span class="testimonial-three__counter-plus">+</span>
                                        </div>
                                        <p>
                                            Sending Labour
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="testimonial-three__counter-single">
                                    <div class="testimonial-three__counter-icon">
                                        <span class="icon-success"></span>
                                    </div>
                                    <div class="testimonial-three__counter-content-box">
                                        <div class="testimonial-three__counter-count-box count-box">
                                            <h3 class="count-text" data-stop="4" data-speed="1500">00</h3>
                                            <span class="testimonial-three__counter-plus"></span>
                                        </div>
                                        <p>
                                            Sending Countries
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="testimonial-three__counter-single">
                                    <div class="testimonial-three__counter-icon">
                                        <span class="icon-group"></span>
                                    </div>
                                    <div class="testimonial-three__counter-content-box">
                                        <div class="testimonial-three__counter-count-box count-box">
                                            <h3 class="count-text" data-stop="23" data-speed="1500">00</h3>
                                            <span class="testimonial-three__counter-plus">+</span>
                                        </div>
                                        <p>
                                            jobs
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
