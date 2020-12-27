@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Blog</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('blogtests.create') }}" title="Create a blog post"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Blog Title</th>
            <th>Short Desciption</th>
            <th>Description</th>
        </tr>
        @foreach ($blogtests as $blogtest)
            <tr>
                <td>{{ $blogtest->blog_id }}</td>
                <td>{{ $blogtest->blog_title }}</td>
                <td>{{ $blogtest->blog_short_description }}</td>
                <td>{{ $blogtest->blog_description }}</td>
                <td>
                    <form action="{{ route('blogtests.destroy', $blogtest->blog_id) }}" method="POST">

                        <a href="{{ route('blogtests.show', $blogtest->blog_id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('blogtests.edit', $blogtest->blog_id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $blogtests->links() !!}

@endsection
