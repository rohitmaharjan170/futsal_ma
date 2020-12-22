<header>
    <div id="app">
            <nav>
                <div class="logo">
                    <img src="{{ asset('image/futsal_ma logo_lg green.png') }}" class="vlogo">
                </div>

                    <ul class="navlink"  style="z-index: 3;">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#event">Events</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#contact">Contact Us</a></li>

                        <li>|</li>
                        
                         <li class="nav-item dropdown "><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-user-circle"></i></a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                        @if (auth()->check())
                                            @if (auth()->user()->role_id==1)
                                               <a class="nav-link" href="route('admin.dashbaord')">Dashboard</a>

                                            @endif @endif
                       <a class="nav-link " href="#accounts">Sign Up</a><br>
                       <a class="nav-link " href="#accounts">Log In </a><br>
                       <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                         </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        </div>
                     </li>

                    <li><a href="https://www.instagram.com/rohit.maharzan/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.facebook.com/mhrz.rohit" target="_blank"><i class="fab fa-facebook"></i></a></li>
                </ul>

                    <div class="burger">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div> 

         </nav>
 </div>

</header>