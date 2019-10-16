@extends('layouts.auth')

@section('content')

    <main class="full-height no-margin no-pad" style="background-color: #f3f4f5; overflow-y: auto;">

        <p>&nbsp;</p>
        <p>&nbsp;</p>

        <div class="container">
            <div class="row">
                <div class="col s12 m8 offset-m2 white">
                    <div class="card">

                        <div class="col s12 bottom-margin" style="height: 96px !important;">
                            <ul>
                                <li class="" style="height: 96px !important;">
                                    <a href="{{ url('/') }}" class="full-height">
                                        <div class="full-height valign-wrapper">
                                            <div class="full-width">
                                                <img src="{{ asset('/images/fincent.svg') }}" class="left-align" style="height: 64px !important;">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        @include("partials.linebreak")

                        <div class="card-body">

                            <div class="col s12">
                                <h3 class="no-margin primary-text">Register</h3>
                                <h4 class="no-margin">Access Exclusive Client Content.</h4>
                            </div>

                            <p>&nbsp;</p>

                            <form method="POST" action="{{ route('register') }}">

                                @csrf

                                @if ($errors->any())
                                    <div class="col s12">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li class="red-text">{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="col s12">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col s12">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col s12">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col s12">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="full-width" name="password_confirmation" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col s12">

                                    @include("partials.linebreak")

                                    <div class="flex">
                                        <button type="submit" class="btn-large primary">
                                            Register
                                        </button>

                                        <div class="valign-wrapper left-small-padding">
                                            &nbsp;Already have an account?
                                            <a class="primary-text" href="/login">&nbsp;Login</a>
                                        </div>
                                    </div>
                                </div>


                                @if (Route::has('password.request'))
                                    <div class="col s12 top-padding">

                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
