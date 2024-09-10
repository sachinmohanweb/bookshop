@extends('admin_panel.index_layout.master')
@section('title', 'Admin')

@section('css')
@endsection

@section('style')
@endsection

@section('content')
<main class="main" id="top">
    <div class="container">
        <div class="row flex-center min-vh-100 py-5">
            <div class="col-sm-10 col-md-8 col-lg-5 col-xl-5 col-xxl-3"><a class="d-flex flex-center text-decoration-none mb-4" href="../../../index.html">
                <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block"><img src="{{ asset('website/img/logo.png')}}" alt="Once Upon A Time" /></div>
            </a>
            <div class="text-center mb-7">
                <h3 class="text-body-highlight">Sign In</h3>
                <p class="text-body-tertiary">Get access to your account</p>
                <form action="{{ route('admin.login') }}" method="Post">
                    @csrf

                    @if (Session::has('success'))
                        <div id="flash-message" class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    @if (Session::has('error'))
                        <div id="flash-message" class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>
                    @endif

                    <div class="mb-3 text-start"><label class="form-label" for="email">Email address</label>
                        <div class="form-icon-container">
                            <input class="form-control form-icon-input" id="email" type="email" name="email"
                            placeholder="name@example.com" required />
                            <span class="fas fa-user text-body fs-9 form-icon"></span>
                        </div>
                    </div>
                    <div class="mb-3 text-start"><label class="form-label" for="password">Password</label>
                        <div class="form-icon-container" data-password="data-password">
                            <input class="form-control form-icon-input pe-6" id="password" type="password" name="password"  placeholder="Password" data-password-input="data-password-input" required/>
                            <span class="fas fa-key text-body fs-9 form-icon"></span>
                            <button class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary" data-password-toggle="data-password-toggle"><span class="uil uil-eye show"></span><span class="uil uil-eye-slash hide"></span></button>
                        </div>
                    </div>
                    <div class="row flex-between-center mb-7">
                        <div class="col-auto">
                            <div class="form-check mb-0"><input class="form-check-input" id="basic-checkbox" type="checkbox" checked="checked" /><label class="form-check-label mb-0" for="basic-checkbox">Remember me</label></div>
                        </div>
                        <div class="col-auto"><a class="fs-9 fw-semibold" href="">Forgot Password?</a></div>
                    </div>
                    <button class="btn btn-primary w-100 mb-3" type="submit">Sign In</button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection

@section('script')
@endsection