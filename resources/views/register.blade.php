@extends("layouts.app")

@include("partials.nav")

@section("content")
    <main class="center-align">

        @include("partials.linebreak")
        @include("partials.linebreak")

        <div class="full-width">
            <h3 class="no-margin varela capitalise">Set a new PIN.</h3>
            <strong class="container">Secure your TapCard Web account.</strong>

            @include("partials.linebreak")
            @include("partials.linebreak")
        </div>

        <div class="light-grey">

            @include("partials.linebreak")

            <div class="container left-align">

                <div class="container">

                    <div class="row container">
                        <div class="col s12 no-pad">
                            <div class="no-margin full-width">
                                <div class="">
                                    <div class="col s12">
                                        @if(true)
                                            <strong class="red-text">{{ session("description") }}</strong>
                                        @endif
                                    </div>

                                    @if ($errors->any())
                                        <div class="col s12">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li class="red-text">{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <form class="col s12" action="{{ route('registrations.store') }}" method="POST">
                                        @csrf

                                        <div class="input-field">
                                            <label class="black-text">
                                                Mobile Number <i>(0712345678)</i>
                                            </label>
                                            <input class="bordered" type="text" name="mobile" value="{{ session('mobile') }}" required autofocus>
                                        </div>

                                        @if (session()->has("otp"))
                                            <div class="input-field">
                                                <label class="black-text">
                                                    New PIN <i>(4 digits)</i>
                                                </label>
                                                <input class="bordered" type="password" name="pin" value="{{ old('pin') }}" required>
                                            </div>

                                            <div class="input-field">
                                                <label class="black-text">
                                                    PIN Confirmation <i>(4 digits)</i>
                                                </label>
                                                <input class="bordered" type="password" name="pin_confirmation" value="{{ old('pin_confirmation') }}" required>
                                            </div>

                                            <div class="input-field">
                                                <label class="black-text">
                                                    Enter the code sent to your phone <i>(It may take up to 3 mins to arrive.)</i>
                                                </label>
                                                <input class="bordered" type="text" name="otp" value="{{ old('otp') }}" required>
                                            </div>
                                        @endif

                                        <div class="input-field col s12">
                                            <button type="submit" class="btn primary full-width">Submit Details</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include("partials.linebreak")
            @include("partials.linebreak")

        </div>

    </main>
@endsection

