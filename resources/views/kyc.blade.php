@extends("layouts.app")

@include("partials.customer-nav")

@section("content")
    <main class="center-align">

        @include("partials.linebreak")
        @include("partials.linebreak")

        <div class="full-width">
            <h3 class="no-margin varela capitalise">Complete your profile.</h3>
            <strong class="container">Help us provide you great service.</strong><br>
            <a class="" href="{{ route('customer.transactions') }}"><u>Skip this step.</u></a>

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

                                    @if ($errors->any())
                                        <div class="col s12">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li class="red-text">{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <form class="col s12" action="{{ route('customer.kyc.update') }}" method="POST">
                                        @csrf

                                        <div class="input-field">
                                            <label class="required">
                                                First Name
                                            </label>
                                            <input class="bordered" type="text" name="firstname" value="{{ old('firstname', $firstname) }}" required autofocus>
                                        </div>

                                        <div class="input-field">
                                            <label>
                                                Last Name
                                            </label>
                                            <input class="bordered" type="text" name="lastname" value="{{ old('lastname', $lastname) }}" required autofocus>
                                        </div>

                                        <div class="input-field">
                                            <label>
                                                ID Number
                                            </label>
                                            <input class="bordered" type="text" name="idNumber" value="{{ old('mobile', $idNumber) }}" required autofocus>
                                        </div>

                                        <div class="input-field">
                                            <label>
                                                Date of Birth <i>(01-01-1980)</i>
                                            </label>
                                            <input class="bordered" type="text" name="dob" value="{{ old('dob', $dob) }}" required autofocus>
                                        </div>

                                        <div class="input-field">
                                            <label>
                                                Email <i>(optional)</i>
                                            </label>
                                            <input class="bordered" type="email" name="email" value="{{ old('email') }}" autofocus>
                                        </div>

                                        <div class="col s12">
                                            @if(true)
                                                <strong class="red-text">{{ session("description") }}</strong>
                                            @endif
                                        </div>

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
        </div>

    </main>
@endsection

