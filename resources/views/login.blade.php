@extends("layouts.app")

@include("partials.nav")

@section("content")
    <main class="center-align">

        @include("partials.linebreak")
        @include("partials.linebreak")

        <div class="full-width">
            <h3 class="no-margin varela capitalise">TapCard Owner Login</h3>
            <strong class="container">Manage & monitor your TapCards and track your spending.</strong>

            @include("partials.linebreak")
        </div>

        <div class="light-grey">

            @include("partials.linebreak")

            <div class="container left-align">
                <div class="row container">
                    <div class="col s12 no-pad" style="">
                        <div class="no-margin left-align" style="">
                            <div class="container">
                                <form class="col s12" action="{{ route('login.store') }}" method="POST">

                                    @csrf

                                    <div class="input-field">
                                        <label class="black-text">Mobile Number <i>(0712345678)</i></label>
                                        <input class="bordered" type="text" name="mobile" value="{{ old('mobile') }}" required autofocus>
                                    </div>

                                    <div class="input-field">
                                        <label class="black-text">PIN <a class="" href="{{ route('registrations.index') }}"><u>Click here if you don't have a PIN.</u></a></label>
                                        <input class="bordered" type="password" name="password" value="" required>
                                    </div>

                                    <div class="col s12">
                                        @if(true)
                                            <strong class="red-text">{{ session("description") }}</strong>
                                        @endif
                                    </div>

                                    <div class="input-field col s12">
                                        <button class="btn primary full-width" type="submit">Submit Details</button> <br>
                                        <a class="" href="{{ route('registrations.index') }}"><u>Click here to register.</u></a> <br>
                                        <a class="" href="{{ route('registrations.index') }}"><u>Forgot your PIN?</u></a>
                                    </div>
                                </form>

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

