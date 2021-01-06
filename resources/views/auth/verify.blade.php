@extends('master_index.partials.header')
@section('sub-title','Verify Email')

@include('master_index.partials.navbar')

@extends('master_index.partials.body')

@section('content1')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, you need to verify you are legit.') }}
                    {{ __('Click here to get a Verficication mail') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request email verification') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
