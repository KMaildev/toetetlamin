@extends('layouts.main')
@section('content')
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset('data/submit_cv.jpg') }})">
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


    <section class="feature-two">
        <div class="feature-two__shape-3 float-bob-y">
            <img src="{{ asset('assets/images/shapes/feature-two-shape-3.png') }}" alt="">
        </div>
        <div class="feature-two__wrap">
            <div class="container">
                <div class="row">

                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-two__single">
                            <div class="feature-two__single-inner">
                                <div class="feature-two__shape-1">
                                    <div class="feature-two__shape-2">
                                        <div class="feature-two__icon">
                                            <span class="icon-passport"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="feature-two__content-box">
                                    <p class="feature-two__sub-title">
                                        Choose Country
                                    </p>
                                    <h3 class="feature-two__title">
                                        <a href="javascript::void(0)">
                                            Choose the country you want to work in
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="feature-two__single">
                            <div class="feature-two__single-inner">
                                <div class="feature-two__shape-1">
                                    <div class="feature-two__shape-2">
                                        <div class="feature-two__icon">
                                            <span class="icon-application"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="feature-two__content-box">
                                    <p class="feature-two__sub-title">
                                        Find a Job
                                    </p>
                                    <h3 class="feature-two__title">
                                        <a href="javascript::void(0)">
                                            Find a job <br> that suits you
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="feature-two__single">
                            <div class="feature-two__single-inner">
                                <div class="feature-two__shape-1">
                                    <div class="feature-two__shape-2">
                                        <div class="feature-two__icon">
                                            <span class="icon-exchange"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="feature-two__content-box">
                                    <p class="feature-two__sub-title">
                                        Submit CV
                                    </p>
                                    <h3 class="feature-two__title">
                                        <a href="javascript::void(0)">
                                            Apply for your job
                                            <br><br>
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="checkout-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="billing_details ship_different_address">
                        <div class="billing_title ship_different_address_title">
                            <h2> Apply Now<span class="fa fa-check"></span></h2>
                            <br><br>
                            <p class="p-b-3" style="font-size: 19px; text-align: justify;">
                                When it comes to choosing an employment agency, there are several factors to consider. Here
                                are
                                some reasons why you may choose us:
                            </p>
                            <br>
                            <div class="right-content-about">
                                <p style="text-align: justify; font-size: 19px;">
                                    <span style="color: black; font-weight: bold">
                                        Expertise and Experience:
                                    </span> We have a team of experienced professionals who specialize in
                                    recruitment and talent acquisition. Our expertise allows us to understand the
                                    intricacies of various industries and job markets, enabling us to find the best
                                    candidates for your organization.
                                </p>
                                <br>
                                <p style="text-align: justify; font-size: 19px;">
                                    <span style="color: black; font-weight: bold">
                                        Time and Cost Savings:
                                    </span>
                                    Recruiting and hiring can be time-consuming and expensive. As an
                                    employment agency, we handle the entire process for you, from sourcing candidates to
                                    conducting initial screenings and interviews. This saves you valuable time and resources
                                    that can be better utilized for other core business activities.
                                </p>
                                <br>
                                <p style="text-align: justify; font-size: 19px;">
                                    <span style="color: black; font-weight: bold">
                                        Extensive Network:
                                    </span>
                                    A reputable overseas employment agency often has a broad network of
                                    international employers and job opportunities, increasing the chances of finding
                                    suitable
                                    positions for candidates.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="billing_details ship_different_address">
                        <div class="billing_title ship_different_address_title">
                            <h2> Apply Now<span class="fa fa-check"></span></h2>
                            <br>
                            <p class="p-b-3"
                                style="font-size: 20px; text-align: justify; color: black; font-weithg: bold;">
                                To apply for the desired job, we recommend reading the job requirements
                                carefuly then if you found yourself qualified for it, simply fill in the below form and
                                click APPLY NOW.
                            </p>
                        </div>
                    </div>

                    <form autocomplete="off" method="POST" action="{{ route('cv.store') }}" enctype="multipart/form-data"
                        id="create-form" autocomplete="off">
                        @csrf

                        <style>
                            input[type=text] {
                                width: 100%;
                                padding: 12px 20px;
                                margin: 8px 0;
                                box-sizing: border-box;
                                border: 1px solid black;
                                -webkit-transition: 0.5s;
                                transition: 0.5s;
                                outline: none;
                            }

                            input[type=text]:focus {
                                border: 1px solid black;
                            }
                        </style>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="text-black" style="color: black;">Name*</label>
                                <input type="text" name="name" class="form-control" value="" autofocus>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="text-black" style="color: black;">Phone</label>
                                <input type="text" name="phone" class="form-control" value="">
                            </div>
                        </div>

                        <div class="col-lg-12 py-3">
                            <div class="form-group">
                                <label class="text-black" style="color: black;">Additional Note</label>
                                <input type="text" name="additional_note" class="form-control" value="">
                            </div>
                        </div>

                        <div class="col-lg-12 py-3">
                            <div class="form-group">
                                <label for="img" style="color: black;">
                                    Select your CV to upload
                                </label>
                                <br>
                                <input type="file" name="attachment_file" accept=".doc, .docx, .pdf"
                                    class="form-control-file" required>
                                <br>
                                <a download="" href="{{ asset('data/CV sample.pdf') }}" style="color: blue;">
                                    CV Format Download
                                </a>
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="thm-btn contact-five__btn">
                                Submit Now
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreCv', '#create-form') !!}
@endsection
