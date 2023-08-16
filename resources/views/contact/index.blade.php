@extends('layouts.main')
@section('title', 'Contact Us')
@section('content')

    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset('data/contact.avif') }})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Contact</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><span>-</span></li>
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="contact-five">
        <div class="contact-five__bg" style="background-image: url(assets/images/backgrounds/contact-five-bg.png);">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">contact with us</span>
                    <div class="section-title__border-box"></div>
                </div>
                <h2 class="section-title__title">
                    TOE TET LA MIN CO.,LTD
                </h2>
                <p style="color: black; font-weight: bold;">

                    Alternatively, you may contact us by filling up the contact form. Our team will response you
                    shortly.
                </p>
            </div>
            <div class="contact-five__form-box">

                <form class="contact-five__form contact-form-validated" method="post" action="{{ route('contact.store') }}"
                    autocomplete="off" id="create-form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-3 contact-five__input-box">
                                <input name="name" type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-3 contact-five__input-box">
                                <input name="email" type="text" class="form-control" placeholder="Email">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-3 contact-five__input-box">
                                <input name="phone" type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-3 contact-five__input-box">
                                <input name="subject" type="text" class="form-control" placeholder="Subject">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group mb-3 contact-five__input-box">
                                <textarea name="message" class="form-control" rows="3" placeholder="Message"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <button type="submit" class="thm-btn contact-five__btn">
                                Send a
                                Message
                            </button>
                        </div>
                    </div>
                </form>

                <div class="result"></div>
            </div>
        </div>
    </section>

    <section class="location-one">
        <div class="container">
            <div class="location-one__top">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="location-one__top-left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">checkout our locations</span>
                                    <div class="section-title__border-box"></div>
                                </div>
                                <h2 class="section-title__title">
                                    Head Office
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="location-one__top-right">
                            <h2 class="section-title__title">
                                Let Us Know How We Can Help You
                            </h2>
                            <p class="ocation-one__top-text">
                                If you have any queries about recruitments, vacancies, or anything else, our team is ready
                                to
                                response all your queries.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="location-one__bottom">
                <div class="location-one__main-tab-box tabs-box">
                    <ul class="tab-buttons clearfix list-unstyled">
                        <li data-tab="#south-america" class="tab-btn active-btn">
                            <span>Myanmar</span>
                        </li>
                    </ul>
                    <div class="tabs-content">
                        <!--tab-->
                        <div class="tab active-tab" id="south-america">
                            <div class="location-one__tab-content-box">
                                <div class="location-one__tab-content-box-inner">
                                    <div class="location-one__bg"
                                        style="background-image: url({{ asset('assets/images/backgrounds/location-one-bg.png') }});">
                                    </div>
                                    <div class="location-one__tab-content-left">
                                        <div class="location-one__tab-content-img">
                                            <img src="{{ asset('data/office1.jpg') }}" alt="">
                                        </div>

                                        <div class="location-one__tab-content-contact">
                                            <h5 class="location-one__tab-content-contact-title">
                                                We’re Always Here for You
                                            </h5>
                                            <ul class="list-unstyled location-one__tab-content-contact-list">
                                                <li>
                                                    <div class="icon">
                                                        <i class="fas fa-map-marker-alt"></i>
                                                    </div>
                                                    <div class="content">
                                                        <p>
                                                            No.245(Ka/Kha), Hlaing Yadanar Street, 13 Ward, <br> Hlaing Thar
                                                            Yar
                                                            Township, Yangon Region, Union of Myanmar.
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <i class="fas fa-envelope"></i>
                                                    </div>
                                                    <div class="content">
                                                        <p>
                                                            <a
                                                                href="mailto:toetatlamin9@gmail.com">toetatlamin9@gmail.com</a>
                                                        </p>
                                                        <p>
                                                            <a href="mailto:info@toetetlamin.com">info@toetetlamin.com</a>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <i class="fas fa-phone"></i>
                                                    </div>
                                                    <div class="content">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Location One End-->

    <!--Google Map Two Start-->
    {{-- <section class="google-map-two">
    </section> --}}
    <!--Google Map Two End-->
    <br>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact', '#create-form') !!}
@endsection
