@extends('layouts.main')
@section('content')
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset('data/md_banner.jpg') }})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Who We Are</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><span>-</span></li>
                    <li class="active">
                        Message
                    </li>
                </ul>
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
@endsection
