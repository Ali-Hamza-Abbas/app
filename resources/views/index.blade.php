@extends('layout')
@extends('header')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <p>{{$message}}</p>
        </div>
    @endif

    <h1>Index Page</h1>
@endsection
