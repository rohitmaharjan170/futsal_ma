<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 
@extends('master_index.partials.header')
@section('title','Player Dashboard')

<body>


@include('master_index.partials.navbar')



@extends('master_index.partials.body')

@section('content1')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Player Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are Player!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




</body>
</html>

    


