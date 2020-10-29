@extends('layouts.app')

@section('content')
<div class="box box-info"
style="width: 45%;
margin: auto;
margin-top: 10%;
background-color: #eee;
box-shadow: 1px 1px 8px #6d6666b0;
padding: 16px;
">
    <div class="box-header with-border">
        <h3 class="box-title">Hotel Dashboard</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form method="POST" action="{{ route('login') }}" class="form-horizontal">
    @csrf
        <div class="box-body">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label" style="text-align: left">Email</label>
            <div class="col-sm-10">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label" style="text-align: left">Password</label>
            <div class="col-sm-10">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="box-footer" style="background-color: #eee">
        <button type="submit" class="btn btn-primary" style="width: 22%;height: 40px;">
            {{ __('Login') }}
        </button>
    </div>
    </form>
</div>
@endsection
