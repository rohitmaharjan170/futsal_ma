@include('master_index.partials.header')
@include('master_index.partials.navbar')

@extends('master_index.partials.body')

@section('content1')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Player Registration') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('player_register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="p_first_name" class="col-md-2 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-3">
                                <input id="name" type="text" class="form-control @error('p_first_name') is-invalid @enderror" name="name" value="{{ old('p_first_name') }}" required autocomplete="name" autofocus>

                                @error('p_first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>First Name is required </strong>
                                    </span>
                                @enderror
                            </div>

                             <label for="p_middle_name" class="col-md-2 col-form-label text-md-right">{{ __('Middle Name') }}</label>

                              <div class="col-md-3">
                                <input id="name" type="text" class="form-control @error('p_middle_name') is-invalid @enderror" name="p_middle_name" value="{{ old('p_middle_name') }}" autocomplete="name" autofocus>

                                @error('p_middle_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong> enter - if no middle name </strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="p_middle_name" class="col-md-4 col-form-label text-md-right">{{ __('Middle Name') }}</label>

                              <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('p_middle_name') is-invalid @enderror" name="p_middle_name" value="{{ old('p_middle_name') }}" autocomplete="name" autofocus>

                                @error('p_middle_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong> enter - if no middle name </strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="p_last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="p_last_name" type="text" class="form-control @error('p_last_name') is-invalid @enderror" name="name" value="{{ old('p_last_name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Last Name is required</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="p_mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label>

                            <div class="col-md-6">
                                <input id="p_mobile" type="text" class="form-control @error('p_mobile') is-invalid @enderror" name="name" value="{{ old('p_mobile') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="p_city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-3">
                                <input id="p_city" type="text" class="form-control @error('p_city') is-invalid @enderror" name="name" value="{{ old('p_city') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                            </div>

                            <div class="form-group row">
                            <label for="p_district" class="col-md-4 col-form-label text-md-right">{{ __('District') }}</label>

                            <div class="col-md-3">
                                <input id="p_district" type="text" class="form-control @error('p_district') is-invalid @enderror" name="name" value="{{ old('p_district') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </div>


                        


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
