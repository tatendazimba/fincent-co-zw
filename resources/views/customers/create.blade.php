@extends("layouts.panel");

@section('content')
    @include("partials.nav-admin")
    @include("partials.sidebar")

    <main class="full-height">

        <div class="row">
            <div class="col s12">
                <h4>Customers</h4>
                <p>Manage KYC details.</p>
            </div>
        </div>

        <div class="full-height">
            <div class="row">
                <div class="col s12 m8 white">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('customers.store') }}">

                                @csrf

                                @if (session()->has("code"))
                                    <div class="col s12 {{ session("code") === '00' ? 'blue lighten-5 blue-text' : 'orange lighten-5 orange-text' }} ">
                                        <ul class="">
                                            <li class="{{ session("code") === '00' ? 'blue lighten-4 blue-text' : 'orange lighten-4 orange-text' }} text-darken-4">
                                                <span class="container">&nbsp;&nbsp; {{ session("code") }} {{ session("friendly") }}</span>
                                            </li>
                                        </ul>
                                    </div>

                                    @include("partials.linebreak")

                                @endif

                                @if ($errors->any())
                                    <div class="col s12 orange lighten-5 orange-text">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li class="orange lighten-4 orange-text">&nbsp;&nbsp; {{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    @include("partials.linebreak")

                                @endif

                                <div class="flex row">
                                    <div class="col s6">
                                        <label for="name" class="required">{{ __('First Name') }}</label>
                                        <div class="">
                                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col s6">
                                        <label for="surname" class="required">{{ __('Last Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}" required>

                                            @if ($errors->has('surname'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('surname') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                @include("partials.linebreak")

                                <div class="flex row">
                                    <div class="col s6">
                                        <label for="id_number" class="required">{{ __('ID Number') }}</label>

                                        <div class="col-md-6">
                                            <input id="id_number" type="text" class="form-control{{ $errors->has('id_number') ? ' is-invalid' : '' }}" name="id_number" required>

                                            @if ($errors->has('id_number'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('id_number') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col s6">
                                        <label for="mobile" class="required">{{ __('Mobile Number') }}</label>

                                        <div class="col-md-6">
                                            <input id="mobile" type="text" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" required>

                                            @if ($errors->has('mobile'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('mobile') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col s12">

                                    @include("partials.linebreak")

                                    <div class="">
                                        <button type="submit" class="btn-large black">
                                            Register Customer
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
