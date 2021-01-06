<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

 @extends('master_index.partials.header')
 @section('sub-title','Contact Us')

<body>
    @include('master_index.partials.navbar')

    @extends('master_index.partials.body')

    @section('content1')

    <div class="contactus px-0">

      <div class="hero-image">
          <div class="hero-text">
            <h1 style="font-size:50px">Contact Us</h1>
            <p>Contact us for more information and queries.</p>
          </div>
    </div>

    <div class="container">
            <div class="row justify-content-center section-paddings">
                <div class="col-md-10 ">
                    <div class="row bg-white shadow">
                        <div class="col-md-4 text-center   border-right">
                            <div class="icon">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <h6>Address</h6>
                            <p>Kathmandu, Nepal</p>
                        </div>
                        <div class="col-md-4 text-center  border-right ">
                            <div class="icon">
                                <i class="fas fa-phone-volume"></i>
                            </div>
                            <h6>Contact</h6>
                            <p> <a href="tel://1234567920">  
                                Mobile : +977-9800000000
                            </a></p>
                        </div>
                        <div class="col-md-4 text-center   ">
                            <div class="icon">
                                <i class="far fa-envelope-open"></i>
                            </div>
                            <h6>Email</h6>
                            <p><span>support@futsal_ma.com
                            </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @endsection

    
    
</body>
</html>


<style>

.contactus .container-fluid{
    padding-left: 0px;
    padding-right: 0px;
}


.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("{{asset('image/contactus.jpg')}}");
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

</style>