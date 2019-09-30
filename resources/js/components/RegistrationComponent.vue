<template>
    <div class="">
        <div class="card-body">
            <form method="POST" action="{{ route('customers.store') }}">

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
                    <label for="name" class="">{{ __('E-Mail Address') }}</label>
                    <div class="">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="col s12">
                    <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

                    <div class="col-md-6">
                        <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}" required>

                        @if ($errors->has('surname'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('surname') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="col s12">
                    <label for="mobile" class="">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="mobile" type="text" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" required>

                        @if ($errors->has('mobile'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('mobile') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="col s12">

                    @include("partials.linebreak")

                    <div class="">
                        <button type="submit" class="btn-large black">
                            Register
                        </button>
                        <br>
                        <a href="/login">Already have an account?</a>
                    </div>
                </div>


                @if (Route::has('password.request'))
                <div class="col s12 top-padding">

                </div>
                @endif
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        name: "RegistrationComponent"
    }
</script>

<style scoped>

</style>
