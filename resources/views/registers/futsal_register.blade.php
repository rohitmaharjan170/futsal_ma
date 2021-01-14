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
        
        <!-- register form -->
        <div class="container col-6 mx-0 px-0">
        	<div class="container">
        	<form method="POST" action="{{ route('futsal_register') }}">
                        @csrf

            <div class="login-logo" style="text-align: center; color: green">
                                    <i class="fas fa-lock text-primary fa-4x"></i>
                                    <h3 class="box-title m-b-20 text-center mb-4">Register Your Futsal</h3>
                                </div>

                        <div class="form-group row">
                            <label for="futsal_name" class="col-md-4 col-form-label text-md-right">{{ __('Futsal Name') }}</label>

                            <div class="col-md-6">
                                <input id="futsal_name" type="text" class="form-control @error('futsal_name') is-invalid @enderror" name="futsal_name" value="{{ old('futsal_name') }}" required autocomplete="name" autofocus>

                                @error('futsal_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="futsal_owner" class="col-md-4 col-form-label text-md-right">{{ __('Futsal Owner') }}</label>

                              <div class="col-md-6">
                                <input id="futsal_owner" type="text" class="form-control @error('futsal_owner') is-invalid @enderror" name="futsal_owner" value="{{ old('futsal_owner') }}" autocomplete="name" autofocus>

                                @error('futsal_owner')
                                    <span class="invalid-feedback" role="alert">
                                        <strong> {{ $message }} </strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                         <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="number" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="f_pan" class="col-md-4 col-form-label text-md-right">{{ __('PAN number') }}</label>

                              <div class="col-md-6">
                                <input id="f_pan" type="number" class="form-control @error('f_pan') is-invalid @enderror" name="f_pan" value="{{ old('f_pan') }}" autocomplete="name" autofocus>

                                @error('f_pan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong> {{ $message }} </strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="f_password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-7">
                                <input id="f_password" type="password" class="form-control @error('f_password') is-invalid @enderror" name="f_password" required autocomplete="new-password">

                                @error('f_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="f_password_confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-7">
                                <input id="f_password_confirm" type="password" class="form-control" name="f_password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="futsal_lattitude" class="col-md-4 col-form-label text-md-right">{{ __('Futsal Latitude') }}</label>

                            <div class="col-md-3">
                                <input id="futsal_lattitude" type="decimal" class="form-control @error('futsal_lattitude') is-invalid @enderror" name="futsal_lattitude" value="{{ old('futsal_lattitude') }}" required autocomplete="name" autofocus>

                                @error('futsal_lattitude')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                            </div>


                            <label for="futsal_longitude" class="col-md-1.5 col-form-label text-md-right">{{ __('Longitude') }}</label>

                            <div class="col-md-3">
                                <input id="futsal_longitude" type="decimal" class="form-control @error('futsal_longitude') is-invalid @enderror" name="futsal_longitude" value="{{ old('futsal_longitude') }}" required autocomplete="name" autofocus>

                                @error('futsal_longitude')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="futsal_city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-3">
                                <input id="futsal_city" type="text" class="form-control @error('futsal_city') is-invalid @enderror" name="futsal_city" value="{{ old('futsal_city') }}" required autocomplete="name" autofocus>

                                @error('futsal_city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <label for="u_role_id" class="col-md-4 col-form-label text-md-right" style="display: none;">{{ __('User Role') }}</label>

                            <div class="col-md-3" style="display: none;" >
                                <input id="u_role_id" type="number" value="2" class="form-control @error('u_role_id') is-invalid @enderror" name="u_role_id" value="{{ old('u_role_id') }}" required autocomplete="name" autofocus>

                                @error('u_role_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="futsal_district" class="col-md-4 col-form-label text-md-right" >{{ __('District') }}</label>

                            <div class="col-md-3">
                                <input id="futsal_district" type="text" class="form-control @error('futsal_district') is-invalid @enderror" name="futsal_district" value="{{ old('futsal_district') }}" required autocomplete="name" autofocus>

                                @error('futsal_district')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                            </div>


                            <label for="u_role_name" class="col-md-4 col-form-label text-md-right" style="display: none;">{{ __('User Role') }}</label>

                            <div class="col-md-3" style="display: none;" >
                                <input id="u_role_name" type="number" value="2" class="form-control @error('u_role_name') is-invalid @enderror" name="u_role_name" value="{{ old('u_role_name') }}" required autocomplete="name" autofocus>

                                @error('u_role_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="futsal_zone" class="col-md-4 col-form-label text-md-right">{{ __('Zone') }}</label>

                            <div class="col-md-3">
                                <input id="futsal_zone" type="text" class="form-control @error('futsal_zone') is-invalid @enderror" name="futsal_zone" value="{{ old('futsal_zone') }}" required autocomplete="name" autofocus>

                                @error('futsal_zone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-3 mt-5">
                            <div class="col-md-6 offset-md-5">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Register') }}
                                </button>
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


