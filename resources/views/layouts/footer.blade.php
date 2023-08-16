<footer class="site-footer">
    <div class="container">
        <div class="site-footer__top">
            <div class="site-footer__map float-bob-x">
                <img src="{{ asset('assets/images/shapes/site-footer-map-1.png') }}" alt="">
            </div>
            <div class="site-footer__top-left">
                <div class="site-footer__visa-box">
                    <ul class="list-unstyled site-footer__visa-list">
                        <li>
                            <div class="site-footer__visa-img">
                                <img src="{{ asset('data/myanmar.png') }}" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="site-footer__visa-img">
                                <img src="{{ asset('data/thailand.png') }}" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="site-footer__visa-img">
                                <img src="{{ asset('data/malaysia.png') }}" alt="">
                            </div>
                        </li>
                    </ul>
                    <div class="site-footer__visa-content">
                        <p class="site-footer__visa-text">
                            If you have any queries about recruitments, vacancies, or anything else, <br> our team is
                            ready
                            to response all your queries.
                        </p>
                    </div>
                </div>
            </div>
            <div class="site-footer__call">
                <div class="site-footer__call-icon">
                    <img src="{{ asset('assets/images/icon/site-footer-icon-comment.png') }}" alt="">
                </div>
                <div class="site-footer__call-content">
                    <p class="site-footer__call-sub-title">Have Question?</p>
                    <h5 class="site-footer__call-number">
                        <a href="tel:+959 - 772 987 997">
                            +959 - 772 987 997 (Office)
                        </a>
                    </h5>
                </div>
            </div>
        </div>

        <div class="site-footer__middle">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__about">
                        <div class="footer-widget__title-box">
                            <h3 class="footer-widget__title">
                                Social Media
                            </h3>
                        </div>
                        <div class="site-footer__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__column footer-widget__link">
                        <div class="footer-widget__title-box">
                            <h3 class="footer-widget__title">
                                Quick Links
                            </h3>
                        </div>
                        <ul class="footer-widget__link-list list-unstyled">
                            <li>
                                <a href="{{ route('about.index') }}">
                                    Our Company
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('ceo_message') }}">
                                    Who We Are
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('team') }}">
                                    Professional Team
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('cv.index') }}">
                                    Job Application
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('employer.index') }}">
                                    Employers
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="footer-widget__column footer-widget__visa">
                        <div class="footer-widget__title-box">
                            <h3 class="footer-widget__title">Our Sending Country</h3>
                        </div>
                        <ul class="footer-widget__visa-list list-unstyled">
                            @foreach ($countries as $country)
                                <li>
                                    <a href="{{ route('job.show', $country->id) }}">
                                        {{ $country->country ?? '' }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <div class="footer-widget__column footer-widget__Contact">
                        <div class="footer-widget__title-box">
                            <h3 class="footer-widget__title">Contact</h3>
                        </div>
                        <ul class="footer-widget__Contact-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="fas fa-envelope"></span>
                                </div>
                                <div class="text">
                                    <p>
                                        <a href="mailto:toetatlamin9@gmail.com">
                                            toetatlamin9@gmail.com
                                        </a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fas fa-map-marker-alt"></span>
                                </div>
                                <div class="text">
                                    <p>
                                        No.245(Ka/Kha), Hlaing Yadanar Street, 13 Ward,
                                        Hlaing Thar Yar Township, Yangon Region, Union of Myanmar.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fas fa-phone-alt"></span>
                                </div>
                                <div class="text">
                                    <p>
                                        <a href="tel:+959 - 772 987 997 ">
                                            +959 - 772 987 997 (Office)
                                        </a>
                                        <br>
                                        <a href="tel:+959 - 420 304 768">
                                            +959 - 420 304 768
                                        </a>
                                        <br>
                                        <a href="tel:+959 - 769 098 398">
                                            +959 - 769 098 398
                                        </a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <p class="site-footer__bottom-text">
                            Copyright © {{ now()->year }} TOE TET LA MIN CO.,LTD. All Rights Reserved
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
