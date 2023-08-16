@extends('layouts.main')
@section('content')
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset('data/employer.png') }})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Employer Form</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><span>-</span></li>
                    <li class="active">Employer Form</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="checkout-page">
        <div class="container">
            <div class="row">

                <div class="col-xl-6 col-lg-6">
                    <div class="fx animated fadeInLeft" data-animate="fadeInLeft">
                        <div class="alert  p-a-3" style="background-color: white;box-shadow: 5px 5px 6px 6px gray;">
                            <div class="heading style3 m-b-3 sm">
                                <h3 class="uppercase">What a client signs up for when partnering with us</h3>
                            </div>
                            <p>Top line candidate sourcing with the means of</p>
                            <ul>
                                <li>
                                    Our Extensive database
                                </li>
                                <li>
                                    Global Network
                                </li>
                                <li>
                                    Social media outreach
                                </li>
                                <li>
                                    Advertisements
                                </li>
                                <li>
                                    Associates
                                </li>
                                <li>
                                    Company job portal
                                </li>

                            </ul>
                            <p>
                                Multi-level screening of candidates which include
                            </p>
                            <ul>
                                <li>
                                    Telephonic interviews
                                </li>
                                <li>
                                    Digital online interviews
                                </li>
                                <li>
                                    Document checks and verification Trade testing Skill evaluation
                                </li>
                                <li>
                                    Procurement of complete data &amp; documents.
                                </li>
                            </ul>
                            <p>
                                Post Interview quick and efficient deployment. Our services team instantly starts
                            </p>
                            <ul>
                                <li>
                                    Processing and procuring required documents
                                </li>
                                <li>
                                    Visa application Fulfilling additional applications if applicable
                                </li>
                                <li>
                                    Preparing candidates for departure Candidate briefing
                                </li>
                                <li>
                                    Assistance in candidate departure and arrival documents.
                                </li>
                            </ul>
                        </div>

                        <div class="heading style3">
                            <h3>Documents Required</h3>
                        </div>

                        <div id="acc_10" class="accordion radius margin">
                            <h6>
                                As a recruitment organization, there’s certain documentation required from the clients end
                                to
                                procure workforce from Myanmar.
                            </h6>
                            <hr>
                            <p>
                                To help us find and expedite the recruitment of the personnel need by our overseas clients,
                                we
                                desire some documents from you. Document requirements vary from country to country. Hence it
                                is
                                important for your organization to check if you have gone through the necessary process.
                            </p>
                            <p>
                                Kindly Register with Embassy through e-migrate system for recruitment.
                                <a target="_blank" href="https://www.mol.gov.mm/my/" style="color: blue">
                                    https://www.mol.gov.mm/my/
                                </a>
                            </p>
                            <ul>
                                <li>
                                    Demand letter
                                </li>
                                <li>
                                    Power of Attorney
                                </li>
                            </ul>
                            <p>
                                Above all documents required are auto generated through e-migrate system.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6">
                    <div class="billing_details ship_different_address">
                        <div class="billing_title ship_different_address_title">
                            <h2>Employer Application Form<span class="fa fa-check"></span></h2>
                            <h6>
                                <br>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit; font-size: 20px;">
                                        Post a job
                                    </font>
                                </font>
                                <span style="color:#f7931E;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit; font-size: 20px;">
                                            and hire talent worker.
                                        </font>
                                    </font>
                                </span>
                            </h6>
                        </div>

                        <form class="billing_details_form" autocomplete="off" method="POST"
                            action="{{ route('employer.store') }}" id="create-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group billing_input_box">
                                        <label for="nameInput" class="form-label">Company Name</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('company_name') is-invalid @enderror"
                                            placeholder="Company Name" name="company_name"
                                            value="{{ old('company_name') }}">
                                        @error('company_name')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                    <div class="form-group billing_input_box">
                                        <label for="nameInput" class="form-label">Type of Company</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('company_type') is-invalid @enderror"
                                            placeholder="Type Of Company" name="company_type"
                                            value="{{ old('company_type') }}">
                                        @error('company_type')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                    <div class="form-group billing_input_box">
                                        <label for="nameInput" class="form-label">Company Email Address</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Company Email Address" name="email" value="{{ old('email') }}">
                                        @error('email')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                    <div class="form-group billing_input_box">
                                        <label for="nameInput" class="form-label">Company Phone Number</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('phone') is-invalid @enderror"
                                            placeholder="Company Phone Number" name="phone" value="{{ old('phone') }}">
                                        @error('phone')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                    <div class="form-group billing_input_box">
                                        <label for="nameInput" class="form-label">Company Website</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('website') is-invalid @enderror"
                                            placeholder="Company Website" name="website" value="{{ old('website') }}">
                                        @error('website')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-4 col-sm-4 col-lg-12">
                                    <div class="form-group billing_input_box">
                                        <label for="nameInput" class="form-label">Company Location</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('location') is-invalid @enderror"
                                            placeholder="Company Location" name="location"
                                            value="{{ old('location') }}">
                                        @error('location')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-4 col-sm-12 col-lg-6">
                                    <div class="form-group billing_input_box">
                                        <label for="nameInput" class="form-label">Job Category</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('job_category') is-invalid @enderror"
                                            placeholder="Job Category" name="job_category"
                                            value="{{ old('job_category') }}">
                                        @error('job_category')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-4 col-sm-12 col-lg-6">
                                    <div class="form-group billing_input_box">
                                        <label for="nameInput" class="form-label">Age Limit: 20-40</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('age_limit') is-invalid @enderror"
                                            placeholder="Age Limit: 20-40" name="age_limit"
                                            value="{{ old('age_limit') }}">
                                        @error('age_limit')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-xl-12 col-md-12 col-lg-12 col-sm-6">
                                    <div class="form-group ship_different_input">
                                        <label for="nameInput" class="form-label">
                                            Educational Requirement
                                        </label>
                                        <textarea class="form-control @error('educational_requirement') is-invalid @enderror" name="educational_requirement"
                                            placeholder="Educational Requirement">{{ old('educational_requirement') }}</textarea>
                                        @error('educational_requirement')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-12 col-md-12 col-lg-12 col-sm-6">
                                    <div class="form-group billing_input_box">
                                        <label for="nameInput" class="form-label">
                                            Working Experience
                                        </label>
                                        <textarea class="form-control @error('working_experience_requirement') is-invalid @enderror"
                                            name="working_experience_requirement" placeholder="Working Experience">{{ old('working_experience_requirement') }}</textarea>
                                        @error('working_experience_requirement')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-12 col-md-12 col-lg-12 col-sm-6">
                                    <div class="form-group billing_input_box">
                                        <label for="nameInput" class="form-label">
                                            Other Additional
                                        </label>
                                        <textarea class="form-control @error('other_additional_requirement') is-invalid @enderror"
                                            name="other_additional_requirement" placeholder="Other Additional">{{ old('other_additional_requirement') }}</textarea>
                                        @error('other_additional_requirement')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group billing_input_box">
                                        <label for="nameInput" class="form-label">Estimate Salary Offer</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('estimate_salary_offer') is-invalid @enderror"
                                            placeholder="Estimate Salary Offer" name="estimate_salary_offer"
                                            value="{{ old('estimate_salary_offer') }}">
                                        @error('estimate_salary_offer')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group billing_input_box">
                                        <label for="nameInput" class="form-label">Other Allowance</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('other_allowance') is-invalid @enderror"
                                            placeholder="Other Allowance" name="other_allowance"
                                            value="{{ old('other_allowance') }}">
                                        @error('other_allowance')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group billing_input_box">
                                        <label for="nameInput" class="form-label">
                                            Gender: M/10, F/10
                                        </label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('gender') is-invalid @enderror"
                                            placeholder="Gender: M/10, F/10" name="gender" value="{{ old('gender') }}">
                                        @error('gender')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group billing_input_box">
                                        <label for="nameInput" class="form-label">Interview Type</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('interview_type') is-invalid @enderror"
                                            placeholder="Interview Type: Online" name="interview_type"
                                            value="{{ old('interview_type') }}">
                                        @error('interview_type')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12 py-2">
                                    <button type="submit" class="thm-btn contact-five__btn">
                                        Submit Now
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreEmployer', '#create-form') !!}
@endsection
