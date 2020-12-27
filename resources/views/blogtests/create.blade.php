@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Blogpost</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('blogtests.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('blogtests.store') }}" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title</strong>
                    <input type="text" name="blog_title" class="form-control" placeholder="Title(not more than 20 Characters)">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Short Description:</strong>
                    <input type="text" name="blog_short_description" class="form-control" placeholder="S">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                
                    <strong>Description:</strong>
                    <textarea rows="5" cols="35" class="form-control" style="height:50px" name="blog_description"
                    placeholder="Description"></textarea>
                
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
