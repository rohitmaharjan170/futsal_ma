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

        <div class="container my-5">
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
                                <p>   
                                    Mobile : +977-9800000000
                                </p>
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

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56516.31625948829!2d85.29111341980705!3d27.708955944453827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu%2044600!5e0!3m2!1sen!2snp!4v1609965515693!5m2!1sen!2snp" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
       

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

.contactus i {
    font-size: 55px;
    color: green;
    padding: 20px;
}

</style>