@extends("layouts.app")

@include("partials.nav")

@section("content")
    <main class="">

        @include("partials.linebreak")
        @include("partials.linebreak")

        <div class="full-width center-align">
            <h3 class="no-margin varela">{{ $policy->title }}</h3>

            @include("partials.linebreak")
            @include("partials.linebreak")
        </div>

        <div class="light-grey">

            @include("partials.linebreak")
            @include("partials.linebreak")

            <div class="flex row container">
                <div class="col s12 justified">
                    {!! nl2br($policy->content) !!}
                </div>
            </div>

            @include("partials.linebreak")
            @include("partials.linebreak")
            @include("partials.linebreak")

        </div>

    </main>
@endsection

