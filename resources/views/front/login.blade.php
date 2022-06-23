@extends('template.front.layout')
@section('content')
    <div class="container" style="">
        @if (\Session::has('danger'))
            <div class="alert alert-danger">
                <ul>
                    <li>{!! \Session::get('danger') !!}</li>
                </ul>
            </div>
        @endif
        <div class="card mb-5" style="">
            <form method="POST" action="{{url('login')}}">
                @csrf
                <div class="mb-3 mt-5">
                    <label for="exampleInputEmail" class="form-label">Email Address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword" aria-describedby="passwordHelp">
                </div>    
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div> 
@endsection