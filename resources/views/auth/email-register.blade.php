@extends('layouts.app')
@section('title', 'Email Verification')
@section('content')

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header text-center bg-primary text-white">
                    <h4 class="mb-0">X-Factor</h4>
                </div>
                <div class="card-body text-center p-5">
                    <h5 class="card-title fw-bold" style="font-size: 1.75rem;">Email Verification</h5>
                    <p class="card-text mt-3 mb-4" style="font-size: 1.1rem;">
                        Welcome! Please check your email and click the verification link to activate your account.
                    </p>
                    <a href="{{ route('verification.resend') }}" class="btn btn-primary px-4 py-2">
                        Resend Verification
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
