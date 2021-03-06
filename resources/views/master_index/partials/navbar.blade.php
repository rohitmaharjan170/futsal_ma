<header>
    <div id="app">
            <nav id="navbar">
                <div class="logo">
                   <a href="/"> <img src="{{ asset('image/futsal_ma logo_lg green.png') }}" class="vlogo"> </a>
                </div>

                    <ul class="navlink"  style="z-index: 3;">
                        <li><a href="/index">Home</a></li>
                        <li><a href="/tournaments">Tournaments</a></li>
                        <li><a href="/events">Events</a></li>
                        <li><a href="/pasal">Pasal</a></li>
                        <li><a href="/aboutus">About Us</a></li>
                        <li><a href="/contactus">Contact Us</a></li>

                        <li>||</li>
                        
                         <li class="nav-item dropdown "><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-user-circle"></i></a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                        @if (auth()->check())
                                            @if (auth()->user()->u_role_id==3)
                                               <a class="nav-link" href="/playerdashboard">Player Dashboard</a>
                                               <div class="dropdown-divider"></div>

                                               <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                                 </a>

                                            @elseif (auth()->user()->u_role_id==2)
                                               <a class="nav-link" href="/futsaldashboard">Player Dashboard</a>

                                               <div class="dropdown-divider"></div>
                                               
                                               <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                                 </a>

                                            @elseif (auth()->user()->u_role_id==1)
                                               <a class="nav-link" href="/superdashboard">Super Dashboard</a>

                                               <div class="dropdown-divider"></div>
                                               
                                               <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                                 </a>
                                            @endif 
                                    @else
                                                
                                    <a class="nav-link" href="" data-toggle="modal" data-target="#registerModal">Register</a>

                                     <a class="nav-link " href="" data-toggle="modal" data-target="#loginModal">Login</a>
                                    @endif
                    

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        </div>
                     </li>

<!--                     <li><a href="https://www.instagram.com/rohit.maharzan/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.facebook.com/mhrz.rohit" target="_blank"><i class="fab fa-facebook"></i></a></li> -->
                </ul>

                    <div class="burger">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div> 

         </nav>
 </div>


<!-- player register and login modal -->
<!-- register modal -->
 <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registerModalLabel"> <span style="color: green; font-weight: bold; text-shadow: 0px 0px #000;"> Player Register </span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                    <form method="POST" action="{{ route('player_register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="p_first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="p_first_name" type="text" class="form-control @error('p_first_name') is-invalid @enderror" name="p_first_name" value="{{ old('p_first_name') }}" required autocomplete="name" autofocus>

                                @error('p_first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="p_middle_name" class="col-md-4 col-form-label text-md-right">{{ __('Middle Name') }}</label>

                              <div class="col-md-6">
                                <input id="p_middle_name" type="text" class="form-control @error('p_middle_name') is-invalid @enderror" name="p_middle_name" value="{{ old('p_middle_name') }}" autocomplete="name" autofocus>

                                @error('p_middle_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong> {{ $message }} </strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="p_last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="p_last_name" type="text" class="form-control @error('p_last_name') is-invalid @enderror" name="p_last_name" value="{{ old('p_last_name') }}" required autocomplete="name" autofocus>

                                @error('p_last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
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
                            <label for="p_u_password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-7">
                                <input id="p_password" type="password" class="form-control @error('p_password') is-invalid @enderror" name="p_password" required autocomplete="new-password">

                                @error('p_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="p_password_confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-7">
                                <input id="p_password_confirm" type="password" class="form-control" name="p_password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="p_city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-3">
                                <input id="p_city" type="text" class="form-control @error('p_city') is-invalid @enderror" name="p_city" value="{{ old('p_city') }}" required autocomplete="name" autofocus>

                                @error('p_city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                            </div>


                            <label for="p_district" class="col-md-1.5 col-form-label text-md-right">{{ __('District') }}</label>

                            <div class="col-md-3">
                                <input id="p_district" type="text" class="form-control @error('p_district') is-invalid @enderror" name="p_district" value="{{ old('p_district') }}" required autocomplete="name" autofocus>

                                @error('p_district')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="p_zone" class="col-md-4 col-form-label text-md-right">{{ __('Zone') }}</label>

                            <div class="col-md-3">
                                <input id="p_zone" type="text" class="form-control @error('p_zone') is-invalid @enderror" name="p_zone" value="{{ old('p_zone') }}" required autocomplete="name" autofocus>

                                @error('p_zone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row" style="display: none;">
                            <label for="u_role_id" class="col-md-4 col-form-label text-md-right">{{ __('User Role') }}</label>

                            <div class="col-md-3" >
                                <input id="u_role_id" type="number" value="3" class="form-control @error('u_role_id') is-invalid @enderror" name="u_role_id" value="{{ old('u_role_id') }}" required autocomplete="name" autofocus>

                                @error('u_role_id')
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

<!-- login modal -->

 <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">

  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel"> <span style="color: green; font-weight: bold; text-shadow: 0px 0px #000;"> Player Login </span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-8">
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

                            <div class="col-md-8">
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



</header>

<!-- for sticky nav bar -->
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

</script>
