<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

 @extends('master_index.partials.header')
 @section('sub-title','About Us')

<body>
    @include('master_index.partials.navbar')

    @extends('master_index.partials.body')

    @section('content1')
			
			<carasoul>
				<div id="demo" class="carousel slide" data-ride="carousel">

				  <!-- Indicators -->
				  <ul class="carousel-indicators">
				    <li data-target="#carousel" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel" data-slide-to="1"></li>
				    <li data-target="#carousel" data-slide-to="2"></li>
				  </ul>
				  
				  <!-- The slideshow -->
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="{{asset('image/pasal/carousel/firstimg.jpeg')}}" width="100%" height="500">
				    </div>
				    <div class="carousel-item">
				      <img src="{{asset('image/pasal/carousel//secondimg.png')}}" width="100%" height="500">
				    </div>
				    <div class="carousel-item">
				      <img src="{{asset('image/pasal/carousel//thirdimg.jpg')}}" width="100%" height="500">
				    </div>
				  </div>
				  
				  <!-- Left and right controls -->
				  <a class="carousel-control-prev" href="#demo" data-slide="prev">
				    <span class="carousel-control-prev-icon"></span>
				  </a>
				  <a class="carousel-control-next" href="#demo" data-slide="next">
				    <span class="carousel-control-next-icon"></span>
				  </a>
				</div>
			</carasoul>

			<!-- section pasal -->
			<div class="pasal" id="pasal" >	
			<div class="container members pt-6">		
			<div class="row justify-content-lg-center">

				@foreach($jersey as $value)


					<div class="card mx-4 my-4" style="width: 18rem;">
					  <img class="card-img-top" src="{{asset('image/pasal/jerseys/jersey.jpg')}}" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title capatilize">{{$value->j_name}}</h5>
					  </div>
					  <ul class="list-group list-group-flush">
					  	<li class="list-group-item capatilize">Code: {{$value->j_code}}</li>
					    <li class="list-group-item capatilize">Size: {{$value->j_size}}</li>
					    <li class="list-group-item">Price: {{$value->j_price}}</li>
					    <li class="list-group-item">Instock: {{$value->j_stock}}</li>
					  </ul>
					  <div class="card-body">
					    <a href="#" class="card-link"><Button class="btn btn-success">Buy Now</Button></a>
					    <a href="#" class="card-link"><Button class="btn btn-primary">Add to Cart</Button></a>
					  </div>
					</div>
					@endforeach
				</div>

				
				</div>
			</div>
			</div>
		</div>
</body>
</html>