@extends('layouts.main')
@section('title', 'Activities')
@section('content')
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset('data/activities_banner.webp') }})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>
                    Gallery & Activities
                </h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><span>-</span></li>
                    <li>
                        Gallery
                    </li>
                    <li><span>-</span></li>
                    <li class="active">
                        {{ $category->title ?? '' }}
                    </li>
                </ul>
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
                                        <a class="img-popup" href="{{ $image }}"><span class="icon-plus"></span></a>
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
