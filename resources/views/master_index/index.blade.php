<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 
 @extends('master_index.partials.header')
 @section('sub-title','Home')

<body>
	@include('master_index.partials.navbar')

	@include('master_index.partials.body')

	
	
</body>
</html>





