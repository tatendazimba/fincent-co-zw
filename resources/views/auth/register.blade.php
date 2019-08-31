@extends('layouts.register')

@section('content')
    <div class="row h-100 m-0 justify-content-center">
        <div class="col-sm-12 col-md-8 my-auto p-3">
            <div class="card">
                <div class="card-body">

                    <div class="row mb-4">
                        <div class="col-sm-6">
                            <img class="w-50" src="{{ asset("images/poscloud.svg") }}">
                        </div>
                    </div>

                    <form method="POST" action="{{ route('register.store') }}">
                        @csrf

                        <div class="row">
                            <div class="form-group col-sm-12 col-md-6">
                                <label for="fullName" class="">{{ __('Full name') }}</label>

                                <div class="">
                                    <input id="fullName" type="text" class="form-control @error('fullName') is-invalid @enderror" name="fullName" value="{{ old('fullName') }}" required autocomplete="fullName" autofocus>

                                    @error('fullName')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group col-sm-12 col-md-6">
                                <label for="key" class="">{{ __('Pre-shared Key') }}</label>

                                <div class="input-group">

                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-secondary text-white" id="">@TAP-</span>
                                    </div>

                                    <input id="key" type="text" class="form-control @error('key') is-invalid @enderror" name="key" value="{{ old('key') }}" required autocomplete="key" autofocus>

                                    @error('key')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-12 col-md-6">
                                <label for="username" class="">{{ __('Username') }}</label>

                                <div class="">
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group col-sm-12 col-md-6">
                                <label for="email" class="">{{ __('E-Mail') }}</label>

                                <div class="">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-12 col-md-6">
                                <label for="password" class="">{{ __('Password') }}</label>

                                <div class="">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group col-sm-12 col-md-6">
                                <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>

                                <div class="">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                {{ session("code") }}
                                {{ session("description") }}
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <div class="col">
                                <button type="submit" class="btn btn-primary poscloud">
                                    {{ __('Submit Details') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
