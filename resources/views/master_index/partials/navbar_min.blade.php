<header>
    <div id="app">
            <nav id="navbar">
                <div class="logo">
                   <a href="/"> <img src="{{ asset('image/futsal_ma logo_lg green.png') }}" class="vlogo"> </a>
                </div>

                    <ul class="navlink"  style="z-index: 3;">
                        <li><a href="/index">Home</a></li>
                        <li><a href="#">Tournaments</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="/aboutus">About Us</a></li>
                        <li><a href="/contactus">Contact Us</a></li> 

                        <li>||</li>
                        
                         <li class="nav-item dropdown "><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-user-circle"></i></a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                                  <a class="nav-link" href="/">Back
                                                  </a>
                        </div>
                     </li>

                       

                </ul>

                    <div class="burger">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div> 

         </nav>
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
