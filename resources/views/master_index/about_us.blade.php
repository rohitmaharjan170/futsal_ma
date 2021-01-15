<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

 @extends('master_index.partials.header')
 @section('sub-title','About Us')

<body>
    @include('master_index.partials.navbar')

    @extends('master_index.partials.body')

    @section('content1')

    <div class="aboutus px-0">

      <div class="hero-image">
          <div class="hero-text">
            <h1 style="font-size:50px">About Us</h1>
            <p>Know behind the futsal_ma.</p>
          </div>
    </div>



      <div class="jumbotron members pt-6">

        <div class="row justify-content-lg-center">
          
          <div class="col-lg-3" style="  margin-bottom: 1.5rem; text-align: center;">
            <img class="rounded-circle" src="{{asset('image/rohit.jpg')}}" width="140" height="140">
            <h3>Binaya Maharjan</h3>
            <p>Full-Stack developer <br> Duties: 
                <br>- VueJs
                <br>- Roles
                <br>- Database
                <br>- Authentication
            </p>
            <p style="  margin-right: .75rem; margin-left: .75rem;">
                <a href="https://www.facebook.com/mhrz.rohit" target="_blank"><i class="fab fa-facebook-f pr-3"></i></a>
                <a href="https://www.instagram.com/rohit.maharzan/" target="_blank"><i class="fab fa-instagram pr-3"></i></a>
                <a href="http://rohitmaharjan61.com.np" target="_blank"><i class="fas fa-globe pr-3"></i></a>
            </p>
          </div>   
          
          <div class="col-lg-3" style="  margin-bottom: 1.5rem; text-align: center;">
            <img class="rounded-circle" src="{{asset('image/rohit.jpg')}}" width="140" height="140">
            <h3>Kshitiz Khanal</h3>
            <p>Full-Stack developer <br> Duties: 
                <br>- VueJs
                <br>- Roles
                <br>- Database
                <br>- Authentication
            </p>
            <p style="margin-right: .75rem; margin-left: .75rem;">
                <a href="https://www.facebook.com/mhrz.rohit" target="_blank"><i class="fab fa-facebook-f pr-3"></i></a>
                <a href="https://www.instagram.com/rohit.maharzan/" target="_blank"><i class="fab fa-instagram pr-3"></i></a>
                <a href="http://rohitmaharjan61.com.np" target="_blank"><i class="fas fa-globe pr-3"></i></a>
            </p>
          </div>   
          
          <div class="col-lg-3" style="  margin-bottom: 1.5rem; text-align: center;">
            <img class="rounded-circle" src="{{asset('image/rohit.jpg')}}" width="140" height="140">
            <h3>Pratik Dahal</h3>
            <p>Full-Stack developer <br> Duties: 
                <br>- VueJs
                <br>- Roles
                <br>- Database
                <br>- Authentication
            </p>
            <p style="  margin-right: .75rem; margin-left: .75rem;">
                <a href="https://www.facebook.com/mhrz.rohit" target="_blank"><i class="fab fa-facebook-f pr-3"></i></a>
                <a href="https://www.instagram.com/rohit.maharzan/" target="_blank"><i class="fab fa-instagram pr-3"></i></a>
                <a href="http://rohitmaharjan61.com.np" target="_blank"><i class="fas fa-globe pr-3"></i></a>
            </p>
          </div>   
          
          <div class="col-lg-3" style="  margin-bottom: 1.5rem; text-align: center;">
            <img class="rounded-circle" src="{{asset('image/rohit.jpg')}}" width="140" height="140">
            <h3>Rohit Maharjan</h3>
            <p>Full-Stack Developer <br> Duties: 
                <br>- VueJs
                <br>- Roles
                <br>- Database
                <br>- Authentication
            </p>
            <p style="  margin-right: .75rem; margin-left: .75rem;">
                <a href="https://www.facebook.com/mhrz.rohit" target="_blank"><i class="fab fa-facebook-f pr-3"></i></a>
                <a href="https://www.instagram.com/rohit.maharzan/" target="_blank"><i class="fab fa-instagram pr-3"></i></a>
                <a href="http://rohitmaharjan61.com.np" target="_blank"><i class="fas fa-globe pr-3"></i></a>
            </p>
          </div>       
        </div><!-- /.row -->

</div>

        <!-- START THE FEATURETTES -->
        <div class="row featurette mx-0">
          <div class="col-md-7 mr-0">
            <h2 class="featurette-heading">About Futsal_ma. <span class="text-muted">Know us even more</span></h2>
            <p class="lead">As world changing its state into innovative and technical based scoiety; Where every bit of work is done through internet and IOT, as a matter of fact if we don't cope with the changing technology, we won't be able to survive in this technical world.</p>
          </div>
          <div class="col-md-5  mx-0">
            <img class="featurette-image img-fluid mx-auto" src="{{asset('image/aboutus1.jpg') }}">
          </div>
        </div>

        <hr class="featurette-divider mx-0">

        <div class="row featurette mx-0">
          <div class="col-md-7 order-md-2 px-0 mx-0">
            <h2 class="featurette-heading">How does it works. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Futsal_ma allows Futsal Admins of different profiles to upload their futsal infotmations, bookings tournaments and events. Every futsal have its own booking schedule. A player can search for avaliable futsal mannuly or around their locaion book them and play! Futsal_ma booking system is web-based which Requires Player Registration & Profiles, Futsal Search. Apart from these qualities we are even dedicated towards the effective system that makes it easier, faster and reliable..</p>
          </div>
          <div class="col-md-5 order-md-1  mx-0">
            <img class="featurette-image img-fluid mx-auto" src="{{asset('image/aboutus2.png') }}">
          </div>
        </div>

        <hr class="featurette-divider mx-0">

        <div class="row featurette mx-0">
          <div class="col-md-7 mx-0">
            <h2 class="featurette-heading">And lastly, Mission. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">To step ahead to keep ourselves updated and work according to the needs of our valuable customers, and work differently.</p>
          </div>
          <div class="col-md-5 mx-0">
            <img class="featurette-image img-fluid mx-auto" src="{{asset('image/aboutus3.png') }}">
          </div>
        </div>

      </div><!-- /.container -->

    @endsection

    
    
</body>
</html>


<style>

.aboutus .container-fluid{
    padding-left: 0px;
    padding-right: 0px;
}


.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("{{asset('image/aboutus.png')}}");
  height: 400px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  padding-top: 8%;
  text-align: center;
  color: white;
}

.members h3 {
  font-weight: 200;
}

.fa-facebook-f, .fa-instagram, .fa-globe{
  color: #4B4B4B;
}


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 5rem 0; /* Space out the Bootstrap <hr> more */
}

/* Thin out the members headings */
.featurette-heading {
  font-weight: 300;
  line-height: 1;
  letter-spacing: -.05rem;
}


/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 40em) {


  .featurette-heading {
    font-size: 50px;
  }
}

@media (min-width: 62em) {
  .featurette-heading {
    margin-top: 7rem;
  }
}
</style>


