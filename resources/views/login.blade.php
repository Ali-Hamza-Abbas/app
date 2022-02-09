@extends('layout')

@section('content')
    <div class="container" style="margin-top: 100px">
        <div class="row justify-content-center">
            <div class="col-md-6 col-offset-3" align="center">

                @if ($message = Session::get('fail'))
                    <div class="alert alert-warning alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <p>{{$message}}</p>
                    </div>
                @elseif ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <p>{{$message}}</p>
                    </div>
                @endif

                <img src="{{ asset('img/login-logo.png')}}"><br><br>
                <form action="login" method="POST">
                    @csrf
                    <input type="email" placeholder="Email..." name="email" class="form-control" required><br>
                    <input type="password" placeholder="password..." name="password" class="form-control" required><br>
                    <input type="submit" class="btn btn-primary float-right" value="login">
                </form>
            </div>
        </div>
    </div>
@endsection
