@extends("layouts.app")

@include("partials.nav")

@section("content")
    <main class="center-align">

        @include("partials.linebreak")
        @include("partials.linebreak")

        <div class="full-width">
            <h3 class="no-margin varela capitalise">track your transactions.</h3>
            <strong class="container">Our web portals allow you to manage your TapCards, track your spending & analyse your income.</strong>

            @include("partials.linebreak")
        </div>

        <div class="light-grey">

            <br>
            <br>

            <div class="container left-align">

                <div class="top-padding bottom-padding container">

{{--                    <div class="col s12 center-align">--}}
{{--                        <h4 class="capitalise">Select your TapCard category</h4>--}}
{{--                        <p>--}}
{{--                            <strong>Click to be redirected to login page.</strong>--}}
{{--                        </p>--}}
{{--                    </div>--}}

                    <div class="flex row">
                        <a href="{{ route('login.index') }}" class="col s12 m4 no-pad" style="position: relative;">
                            <div class="square rounded white"></div>
                            <div class="no-margin center-align full-width full-height valign-wrapper" style="position: absolute; top: 0;">
                                <div class="container">
                                    <img class="full-width avatar" src="{{ asset('svg/icons/customer.svg') }}"> <br>

                                    <strong class="uppercase primary-text">
                                        Owner
                                    </strong>

                                    <p class="black-text varela">
                                        You own a TapCard
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="https://merchant.tapcard.co.zw" class="col s12 m4 no-pad" style="position: relative;">
                            <div class="square rounded white"></div>
                            <div class="no-margin center-align full-width full-height valign-wrapper" style="position: absolute; top: 0;">
                                <div class="container">
                                    <img class="full-width avatar" src="{{ asset('svg/icons/merchant.svg') }}"> <br>

                                    <strong class="uppercase primary-text">
                                        Merchant
                                    </strong>

                                    <p class="black-text varela">
                                    You accept TapCard payments
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="https://merchant.tapcard.co.zw" class="col s12 m4 no-pad" style="position: relative;">
                            <div class="square rounded white"></div>
                            <div class="no-margin center-align full-width full-height valign-wrapper" style="position: absolute; top: 0;">
                                <div class="container">
                                    <img class="full-width avatar" src="{{ asset('svg/icons/agent.svg') }}"> <br>

                                    <strong class="uppercase primary-text">
                                        Agent
                                    </strong>

                                    <p class="black-text varela">
                                    You distribute TapCards
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            @include("partials.linebreak")
            @include("partials.linebreak")
            @include("partials.linebreak")

        </div>

    </main>
@endsection

