@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>


                            </div>
                        </div>
                    </form>
                </div>
                </div>
                <div class="form-group">

                <label for="inputPassword3" class="col-sm-3 control-label" style="font-size: 18px;">Password</label>
                <div class="col-sm-9">
                    <input id="password" type="password" id="inputPassword3" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password..."
                    style="font-size: 16px;
                    margin-top: 10px;">
                    @error('password')
                        <span class="invalid-feedback" role="alert" style="font-size: 15px">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-block btn-flat"
                style="width: 94%;
                        margin: auto;
                        font-size: 15px;">
                    {{ __('Login') }}
                </button>
            </div>
            <!-- /.box-footer -->
            </form>
        </div>
    </div>
@endsection
