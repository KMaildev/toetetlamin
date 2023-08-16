@extends('layouts.main')
@section('content')
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset('data/team_banner.jpg') }})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Submit CV</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><span>-</span></li>
                    <li class="active">Apply for your job</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="team-page" style="padding: 20px 0 90px;">
        <div class="container">
            <div class="row">

                <div class="col-xl-12 col-lg-12">
                    <div class="billing_details ship_different_address">
                        <div class="billing_title ship_different_address_title">
                            <center>
                                <h2>
                                    Our Team Member
                                    <span class="fa fa-check"></span>
                                </h2>
                            </center>
                            <br>
                            <p class="animate__animated animate__lightSpeedInRight"
                                style="text-align: justify; font-size: 18px; color: black;">
                                Our overseas employment agency consists of a skilled team dedicated to connecting talented
                                individuals with international job opportunities. We have a deep understanding of global
                                markets,
                                immigration laws, and visa processes. Our extensive network of contacts allows us to offer a
                                wide
                                range of employment opportunities in various sectors. We prioritize transparency, ethical
                                practices,
                                and open communication, providing personalized guidance and support to job seekers. Our
                                commitment
                                to excellence ensures successful placements and long-term relationships with clients.
                            </p>
                        </div>
                    </div>
                </div>

                @foreach ($teams as $team)
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{ $team->photo }}" alt="#"
                                        style="width: 100%; height: 330px; background-size: center; object-fit: cover;">
                                </div>
                                <div class="team-one__share-btn">
                                    <a href="team-details.html"><i class="fa fa-share-alt"></i></a>
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">
                                    {{ $team->position ?? '' }}
                                </p>
                                <h3 class="team-one__title">
                                    <a href="javascript::void(0)">
                                        {{ $team->name ?? '' }}
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
