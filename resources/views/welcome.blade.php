@extends('layouts.main')
@section('content')
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

                        <a href="{{ route('about.index') }}" class="thm-btn about-four__btn">
                            More Detail
                        </a>

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




    <section class="success-stories">
        <div class="container">
            <div class="row">

                <div class="col-xl-6 col-md-6">
                    <div class="testimonial-two__single">
                        <div class="testimonial-two__inner">
                            <div class="testimonial-two__img">
                                <img src="{{ asset('data/md1.png') }}" alt="">
                                <div class="testimonial-two__shape-1">
                                    <img src="assets/images/shapes/testimonial-two-shape-1.png" alt="">
                                </div>
                            </div>
                            <div class="testimonial-two__client-details-and-quote">
                                <div class="testimonial-two__client-details">
                                    <div class="testimonial-two__client-rate">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <h4 class="testimonial-two__client-name">
                                        <a href="javascript::void(0)">
                                            Mr. Tun Tun Aye
                                        </a>
                                    </h4>
                                    <p class="testimonial-two__client-sub-title">
                                        Managing Director
                                    </p>
                                </div>
                                <div class="testimonial-two__quote">
                                    <span class="icon-chat"></span>
                                </div>
                            </div>
                            <p class="testimonial-two__text" style="text-align: justify">
                                Welcome to our overseas employment agency! As the Managing Director, I am delighted to lead
                                a dedicated team that is passionate about connecting talented individuals with rewarding job
                                opportunities worldwide. Together, let's unlock your potential and embark on a fulfilling
                                global career journey.
                            </p>
                            <p style="color: blue;">
                                <i>
                                    Warm regards,
                                </i>
                            </p>
                            <br><br>
                        </div>
                    </div>
                </div>


                <div class="col-xl-6 col-md-6">
                    <div class="testimonial-two__single">
                        <div class="testimonial-two__inner">
                            <div class="testimonial-two__img">
                                <img src="{{ asset('data/md4.png') }}" alt="">
                                <div class="testimonial-two__shape-1">
                                    <img src="{{ asset('assets/images/shapes/testimonial-two-shape-1.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="testimonial-two__client-details-and-quote">
                                <div class="testimonial-two__client-details">
                                    <div class="testimonial-two__client-rate">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <h4 class="testimonial-two__client-name">
                                        <a href="javascript::void(0)">
                                            Mr.Kyaw Lin
                                        </a>
                                    </h4>
                                    <p class="testimonial-two__client-sub-title">
                                        Director
                                    </p>
                                </div>
                                <div class="testimonial-two__quote">
                                    <span class="icon-chat"></span>
                                </div>
                            </div>
                            <p class="testimonial-two__text" style="text-align: justify">
                                Greetings! As the Director of our overseas employment agency, I am excited to introduce you
                                to a world of opportunities. Our team is dedicated to helping you navigate the complexities
                                of international employment, ensuring a seamless experience from start to finish. Trust us
                                to match your skills with the right positions, provide ongoing support, and celebrate your
                                success along the way.
                            </p>
                            <p style="color: blue;">
                                <i>
                                    Best regards,
                                </i>
                            </p>
                        </div>
                    </div>
                </div>




                <div class="col-xl-6 col-md-6">
                    <div class="testimonial-two__single">
                        <div class="testimonial-two__inner">
                            <div class="testimonial-two__img">
                                <img src="{{ asset('data/md3.png') }}" alt="">
                                <div class="testimonial-two__shape-1">
                                    <img src="{{ asset('assets/images/shapes/testimonial-two-shape-1.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="testimonial-two__client-details-and-quote">
                                <div class="testimonial-two__client-details">
                                    <div class="testimonial-two__client-rate">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <h4 class="testimonial-two__client-name">
                                        <a href="javascript::void(0)">
                                            Mr.Pan Aung
                                        </a>
                                    </h4>
                                    <p class="testimonial-two__client-sub-title">
                                        Director
                                    </p>
                                </div>
                                <div class="testimonial-two__quote">
                                    <span class="icon-chat"></span>
                                </div>
                            </div>
                            <p class="testimonial-two__text" style="text-align: justify">
                                First of all, we would like to extend warmth and gratitude greetings to all concerned,
                                especially to our clients, foreign employment seeker, and well wishers. We, as the
                                Directors of Toe Tet La Min Co.,Ltd., Consider it our pride to introduce this
                                Organization as one of the prominent and outstanding manpower recruitment
                                agencies of this country.
                            </p>
                            <p style="color: blue;">
                                <i>
                                    Warm regards,
                                </i>
                            </p>
                            <br><br><br><br><br><br>
                        </div>
                    </div>
                </div>


                <div class="col-xl-6 col-md-6">
                    <div class="testimonial-two__single">
                        <div class="testimonial-two__inner">
                            <div class="testimonial-two__img">
                                <img src="{{ asset('data/md2.png') }}" alt="">
                                <div class="testimonial-two__shape-1">
                                    <img src="{{ asset('assets/images/shapes/testimonial-two-shape-1.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="testimonial-two__client-details-and-quote">
                                <div class="testimonial-two__client-details">
                                    <div class="testimonial-two__client-rate">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <h4 class="testimonial-two__client-name">
                                        <a href="javascript::void(0)">
                                            Mr. Mg Thein Nyunt
                                        </a>
                                    </h4>
                                    <p class="testimonial-two__client-sub-title">
                                        General Manager
                                    </p>
                                </div>
                                <div class="testimonial-two__quote">
                                    <span class="icon-chat"></span>
                                </div>
                            </div>
                            <p class="testimonial-two__text" style="text-align: justify">
                                Welcome to our overseas employment agency! As the General Manager, I am thrilled to lead a
                                dynamic team dedicated to connecting talented individuals with international job
                                opportunities. Our goal is to provide you with top-notch service, ensuring a smooth and
                                successful experience as you embark on your global career journey.
                            </p>
                            <p style="color: blue;">
                                <i>
                                    Best regards,<br>
                                    Principal(Aurora Language Center) – (Since -2020) <br>
                                    Shinbun Scholarship (Tokyo Nihongo Gakkoo) – (2008-2010) <br>
                                    Volunteer Nihongo Sensei - (2011 – Present)
                                </i>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="visa-offers" style="padding-top: 0px;">
        <div class="container">
            <div class="row">

                <div class="col-xl-6 col-lg-6">
                    <div class="visa-offers__single">
                        <div class="visa-offers__shape-1"
                            style="background-image: url({{ asset('assets/images/shapes/visa-offers-shape-1.jpg') }});">
                        </div>
                        <div class="visa-offers__shape-2"
                            style="background-image: url({{ asset('assets/images/shapes/visa-offers-texture-shape.jpg') }});">
                        </div>
                        <div class="visa-offers__img">
                            <img src="{{ asset('data/mm.png') }}" alt="">
                        </div>
                        <div class="visa-offers__dot float-bob-x">
                            <img src="{{ asset('assets/images/shapes/visa-offers-dot.png') }}" alt="">
                        </div>
                        <div class="visa-offers__plane float-bob-y">
                            <img src="{{ asset('assets/images/shapes/visa-offers-plane.png') }}" alt="">
                        </div>
                        <div class="visa-offers__flag">
                            <img src="{{ asset('data/myanmar.png') }}" alt="">
                        </div>
                        <div class="visa-offers__time">
                            <p>
                                Overseas Jobs
                            </p>
                        </div>
                        <div class="visa-offers__sub-title-box">
                            <h5 class="visa-offers__sub-title">
                                Overseas Employment Agency
                            </h5>
                        </div>
                        <h3 class="visa-offers__title">
                            Toe Tet La Min Co.,Ltd
                        </h3>
                        <ul class="list-unstyled visa-offers__points">
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>
                                        Expert guidance
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>
                                        Job connections
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>
                                        Streamlined process
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>
                                        Excellence
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <div class="visa-offers__price-box">
                            <p class="visa-offers__price-start">
                                Apply for Job
                            </p>
                            <div class="visa-offers__price">
                                <a href="{{ route('cv.index') }}">
                                    <p>
                                        Submit
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6">
                    <div class="visa-offers__single visa-offers__single--2">
                        <div class="visa-offers__shape-1"
                            style="background-image: url({{ asset('assets/images/shapes/visa-offers-shape-2.jpg') }});">
                        </div>
                        <div class="visa-offers__shape-2"
                            style="background-image: url({{ asset('assets/images/shapes/visa-offers-texture-shape.jpg') }});">
                        </div>
                        <div class="visa-offers__img">
                            <img src="{{ asset('data/thai.jpg') }}"
                                style="width: 100%; height: 230px; background-size: center; object-fit: cover;"
                                alt="">
                        </div>
                        <div class="visa-offers__dot float-bob-x">
                            <img src="{{ asset('assets/images/shapes/visa-offers-dot.png') }}" alt="">
                        </div>
                        <div class="visa-offers__plane float-bob-y">
                            <img src="{{ asset('assets/images/shapes/visa-offers-plane-2.png') }}" alt="">
                        </div>
                        <div class="visa-offers__flag">
                            <img src="{{ asset('data/thailand.png') }}" alt="">
                        </div>
                        <div class="visa-offers__time">
                            <p>
                                OVERSEAS JOBS
                            </p>
                        </div>
                        <div class="visa-offers__sub-title-box">
                            <h5 class="visa-offers__sub-title">
                                Overseas Employment Agency
                            </h5>
                        </div>
                        <h3 class="visa-offers__title">
                            Jobs available in Thailand
                        </h3>
                        <ul class="list-unstyled visa-offers__points">
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>
                                        Factory
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>
                                        Construction
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>
                                        Restaurant
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>
                                        Planting, Etc...
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <div class="visa-offers__price-box">
                            <p class="visa-offers__price-start">
                                Apply for Job
                            </p>
                            <div class="visa-offers__price">
                                <a href="{{ route('cv.index') }}">
                                    <p>
                                        Submit
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Visa Offers Single Start-->
                <div class="col-xl-6 col-lg-6">
                    <div class="visa-offers__single visa-offers__single--5">
                        <div class="visa-offers__shape-1"
                            style="background-image: url({{ asset('assets/images/shapes/visa-offers-shape-5.jpg') }});">
                        </div>
                        <div class="visa-offers__shape-2"
                            style="background-image: url({{ asset('assets/images/shapes/visa-offers-texture-shape.jpg') }});">
                        </div>
                        <div class="visa-offers__img">
                            <img src="{{ asset('data/malay.webp') }}" alt=""
                                style="width: 100%; height: 230px; background-size: center; object-fit: cover;">
                        </div>
                        <div class="visa-offers__dot float-bob-x">
                            <img src="{{ asset('assets/images/shapes/visa-offers-dot.png') }}" alt="">
                        </div>
                        <div class="visa-offers__plane float-bob-y">
                            <img src="{{ asset('assets/images/shapes/visa-offers-plane-5.png') }}" alt="">
                        </div>
                        <div class="visa-offers__flag">
                            <img src="{{ asset('data/malaysia.png') }}" alt="">
                        </div>
                        <div class="visa-offers__time">
                            <p>OVERSEAS JOBS</p>
                        </div>
                        <div class="visa-offers__sub-title-box">
                            <h5 class="visa-offers__sub-title">
                                OVERSEAS EMPLOYMENT AGENCY
                            </h5>
                        </div>
                        <h3 class="visa-offers__title">
                            Jobs available in Malaysia
                        </h3>
                        <ul class="list-unstyled visa-offers__points">
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>
                                        Factory
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>
                                        Construction
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>
                                        Restaurant
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>
                                        Planting, Etc...
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <div class="visa-offers__price-box">
                            <p class="visa-offers__price-start">
                                Apply for Job
                            </p>
                            <div class="visa-offers__price">
                                <a href="{{ route('cv.index') }}">
                                    <p>
                                        Submit
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Visa Offers Single End-->
                <!--Visa Offers Single Start-->
                <div class="col-xl-6 col-lg-6">
                    <div class="visa-offers__single visa-offers__single--6">
                        <div class="visa-offers__shape-1"
                            style="background-image: url({{ asset('assets/images/shapes/visa-offers-shape-6.jpg') }});">
                        </div>
                        <div class="visa-offers__shape-2"
                            style="background-image: url({{ asset('assets/images/shapes/visa-offers-texture-shape.jpg') }});">
                        </div>
                        <div class="visa-offers__img">
                            <img src="{{ asset('data/japan.avif') }}" alt=""
                                style="width: 100%; height: 230px; background-size: center; object-fit: cover;">
                        </div>
                        <div class="visa-offers__dot float-bob-x">
                            <img src="{{ asset('assets/images/shapes/visa-offers-dot.png') }}" alt="">
                        </div>
                        <div class="visa-offers__plane float-bob-y">
                            <img src="{{ asset('assets/images/shapes/visa-offers-plane-6.png') }}" alt="">
                        </div>
                        <div class="visa-offers__flag">
                            <img src="{{ asset('data/japan.png') }}" alt="">
                        </div>
                        <div class="visa-offers__time">
                            <p>OVERSEAS JOBS</p>
                        </div>
                        <div class="visa-offers__sub-title-box">
                            <h5 class="visa-offers__sub-title">
                                OVERSEAS EMPLOYMENT AGENCY
                            </h5>
                        </div>
                        <h3 class="visa-offers__title">
                            Jobs available in Japan
                        </h3>
                        <ul class="list-unstyled visa-offers__points">
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>
                                        Factory
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>
                                        Construction
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>
                                        Restaurant
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>
                                        Planting, Etc...
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <div class="visa-offers__price-box">
                            <p class="visa-offers__price-start">
                                Apply for Job
                            </p>
                            <div class="visa-offers__price">
                                <a href="{{ route('cv.index') }}">
                                    <p>
                                        Submit
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Visa Offers Single End-->
            </div>
        </div>
    </section>


    <section class="gallery-page" style="padding: 20px 0 110px;">
        <div class="container">
            <div class="row">
                @foreach ($activities as $activity)
                    <div class="col-md-12 py-3">
                        <div class="section-title text-center">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">
                                    {{ $activity->title ?? '' }}
                                </span>
                                <div class="section-title__border-box"></div>
                            </div>
                            <h2 class="section-title__title">
                                {!! $activity->description ?? '' !!}
                            </h2>
                        </div>
                    </div>
                    @php
                        $images = explode(',', $activity->images);
                    @endphp
                    @foreach ($images as $image)
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="gallery-page__single">
                                <div class="gallery-page__img">
                                    <img src="{{ $image }}" alt=""
                                        style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                    <div class="gallery-page__icon">
                                        <a class="img-popup" href="{{ $image }}"><span
                                                class="icon-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>
@endsection
