<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

 @extends('master_index.partials.header')
 @section('sub-title','Contact Us')

<body>
    @include('master_index.partials.navbar_min')

    @extends('master_index.partials.body')

    @section('content1')

	<div class="container-fluid feature-1 pt-4 pt-md-5">
	  <div class="row">

        <div class="container col-6 pt-5">

            <div class="row">
                <div class="feature-intro text-center col-md-10 col-xl-8 mx-md-auto py-5">
                    <h1 class="feature-title mb-3"><span style="color:green;">Register your Futsal Today !!</span></h1>
                    <p class="lead">The main aim of creating Futsal Admin is to help futsal owners, to manage online futsal booking and create booking systematic and easy...</p>
                    <p>
                    	New to Tech, call us "We will set up your futsal for free !!"
                    </p>
                    <button class="btn btn-lg btn-outline-success mt-4 px-5"> <i class="fas fa-phone-volume">  </i> 9800000000</button>
                </div>
            </div>

            <div class="row feature-list mt-5 pt-md-3">
                <div class="col-md-4">
                    <div class="feature-box text-center p-3 p-md-4 mx-auto">
                        <div class="feature-icon mx-auto">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h5 class="feature-title mb-3">Online Booking</h5>
                        <p class="text-muted">Put your futsal in internet and get yout futsal booking into next level.</p>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    <div class="feature-box text-center p-3 p-md-4 mx-auto">
                        <div class="feature-icon mx-auto">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <h5 class="feature-title mb-3">Your Own Tournament</h5>
                        <p class="text-muted">Get your players engaged in competetive arena with Tournament.</p>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    <div class="feature-box text-center p-3 p-md-4 mx-auto">
                        <div class="feature-icon mx-auto">
                            <i class="fas fa-calendar-day"></i>
                        </div>
                        <h5 class="feature-title mb-3">Exclusive Event</h5>
                        <p class="text-muted">Stand out from crowd with your exclusive event and happenings.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- login form -->
		<div class="container col-6 mx-0 px-0">
    	<div class="container">
        	 <form method="POST" action="{{ route('login') }}">
                        @csrf

                <div class="login-logo" style="text-align: center; color: green">
                                    <i class="fas fa-lock text-primary fa-4x"></i>
                                    <h3 class="box-title m-b-20 text-center mb-4">Login as Futsal Admin</h3>
                                </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-5">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-5">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                   </div>
                </div>

       </div>
    </div>

    @endsection
</body>
</html>


<style>
	.feature-box {
  border: 2px solid #dee2e6;
  border-radius: 0.25rem;
  -webkit-transition: background-color .3s;
  transition: background-color .3s;
  position: relative;
  max-width: 380px;
}

.feature-box:hover {
  background-color: rgba(88, 99, 248, 0.1);
}

.feature-box:hover:before, .feature-box:hover:after {
  width: calc(100% + 4px);
  height: calc(100% + 4px);
}

.feature-box:hover:before {
  -webkit-transition: width .2s linear, height .2s linear .2s;
  transition: width .2s linear, height .2s linear .2s;
  border-top-color: green;
  border-right-color: green;
}

.fa-lock:before {
    content: "\f023";
    color: green;
}
.feature-box:hover:after {
  -webkit-transition: width .2s linear .4s, height .2s linear .6s;
  transition: width .2s linear .4s, height .2s linear .6s;
  border-bottom-color: green;
  border-left-color: green;
}

.feature-box:before, .feature-box:after {
  content: '';
  width: 0;
  height: 0;
  position: absolute;
  border-radius: 0.25rem;
  border: 2px solid transparent;
}

.feature-box:before {
  left: -2px;
  top: -2px;
}

.feature-box:after {
  right: -2px;
  bottom: -2px;
}

.feature-icon {
  width: 60px;
  height: 60px;
  padding: 10px;
}

.feature-icon .fas {
  font-size: 1.5rem;
  line-height: 2.5rem;
  color: green;
}

.btn-outline-primary {
  color: green;
  background-color: transparent;
  background-image: none;
  border-color: green;
  border: 2px solid rgba(67, 232, 141, 0.75);
}

.btn-outline-primary:hover {
  color: #fff;
  background-color: green;
  border-color: green;
}

.btn-outline-primary:focus, .btn-outline-primary.focus {
  -webkit-box-shadow: 0 0 0 0.2rem rgba(67, 232, 141, 0.5);
          box-shadow: 0 0 0 0.2rem rgba(67, 232, 141, 0.5);
}

.btn-outline-primary.disabled, .btn-outline-primary:disabled {
  color: green;
  background-color: transparent;
}

.btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active,
.show > .btn-outline-primary.dropdown-toggle {
  color: #fff;
  background-color: green;
  border-color: green;
}

.btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-primary.dropdown-toggle:focus {
  -webkit-box-shadow: 0 0 0 0.2rem rgba(67, 232, 141, 0.5);
          box-shadow: 0 0 0 0.2rem rgba(67, 232, 141,0.5);
}

</style>


