@extends('layouts.main')
@section('content')
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset('data/employer.png') }})">
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
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreCv', '#create-form') !!}
@endsection
