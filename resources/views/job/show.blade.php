@extends('layouts.main')
@section('title', 'Jobs')
@section('content')
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset('data/activities_banner.webp') }})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>
                    Manpower Services
                </h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><span>-</span></li>
                    <li>
                        Manpower Services & Sending Country
                    </li>
                    <li><span>-</span></li>
                    <li class="active">
                        {{ $country->country ?? '' }}
                    </li>
                </ul>
            </div>
        </div>
    </section>



    <section class="countries-one">
        <div class="countries-one__bg"
            style="background-image: url({{ asset('assets/images/backgrounds/countries-one-bg.png') }});"></div>
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Our Sending countries list</span>
                    <div class="section-title__border-box"></div>
                </div>
                <h2 class="section-title__title">Select the Country of
                    <br> Your Choice
                </h2>
            </div>
            <div class="row d-flex justify-content-center">
                @foreach ($countries as $country)
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="countries-one__single">
                            <div class="countries-one__img-box">
                                <div class="countries-one__img">
                                    <img src="{{ $country->photo ?? '' }}" alt=""
                                        style="width: 50px; height: 50px; background-size: center; object-fit: cover;">
                                </div>
                            </div>
                            <h3 class="countries-one__title">
                                <a href="">
                                    {{ $country->country ?? '' }}
                                </a>
                            </h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    <section class="services-five">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">
                        Jobs
                    </span>
                    <div class="section-title__border-box"></div>
                </div>
                <h2 class="section-title__title">
                    JOB AVAILABLE IN {{ $country->country ?? '' }}
                </h2>
            </div>
            <div class="row">
                @foreach ($jobs as $job)
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="services-three__single">
                            <div class="services-three__img-box">
                                <div class="services-three__img">
                                    <img src="{{ $job->photo }}" alt="">
                                    <div class="services-three__icon-two">
                                        <span class="icon-tour-guide"></span>
                                    </div>
                                </div>
                                <div class="services-three__icon">
                                    <span class="icon-tour-guide"></span>
                                </div>
                            </div>
                            <div class="services-three__content">
                                <div class="services-three__title-box">
                                    <h3 class="services-three__title">
                                        {{ $job->title ?? '' }}
                                    </h3>
                                </div>
                                <p class="services-three__text">
                                    Available Job in 
                                    <span style="color: black">
                                        {{ $job->country->country ?? '' }}
                                    </span>
                                </p>
                                <div class="services-three__arrow">
                                    <a href="{{ route('cv.index') }}"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
