@extends("layouts.app")

@include("partials.nav")

@section("content")
    <main class="center-align">

        @include("partials.linebreak")
        @include("partials.linebreak")

        <div class="full-width container">
            <h1 class="no-margin varela">Tap to Pay.</h1>
            <p class="container bottom-small-padding">
                <strong class="container capitalise">Enjoy the convenience of 1 second transactions using TapCard. <br>The best substitute for cash.</strong>
            </p>
        </div>

        <div class="container row">
            <div class="col s12 no-margin rectangle" style="background: url('{{ asset("images/shop-keeper.png") }}') no-repeat top right; background-size: cover;">

            </div>
        </div>

        <div class="hide container bordered row center-align valign-wrapper " style="height: 500px;">
            <div class="col s12 no-margin rectangle primary lighten-3">

            </div>
            <div class="hide col s12 video">
                <a class="circle-btn valign-wrapper center-align primary">
                    <div class="full-width">
                        <img src="{{ asset('svg/icons/play.svg') }}">
                    </div>
                </a>
            </div>
        </div>

        @include("partials.linebreak")
        @include("partials.linebreak")

        <div class="container">

            <h3>Discover TapCard</h3>

            <div class="">
                <div class="flex row left-align">
                    @foreach($discoverPosts as $i => $post)
                        <div class="col s6 m3 with-small-padding" style="position: relative;">
                            <div class="square rounded light-grey hide-on-small-only hide-on-med-only"></div>
                            <div class="square no-margin rounded light-grey hide-on-large-only"></div>
                            <div class="square-overlay rounded center-align full-width full-height valign-wrapper" style="position: absolute; top: 0; left: 0; right: 0;">
                                <div class="container">
                                    <img class="" alt="tapcard tap card zupco nmb bank nfc payments cashless tap and go {{ $post->title }}" src="/uploads/{{ $post->images[0]->url }}"> <br>

                                    <strong class="uppercase primary-text">
                                        {{ $post->title }}
                                    </strong>

                                    <p class="small-text container">
                                        {{ $post->content }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        @if((($i+1) % 4) === 0 )
                            </div>
                            <div class="flex row no-pad">
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        @include("partials.linebreak")
        @include("partials.linebreak")

        <div class="center-align hide">

            <h2>Tap Card How-To's</h2>

            <div style="position:relative;">
                <div class="how-to-slider">

                    <div class="left-align with-medium-margin grey rounded inline-block slide">
                        <div class="flex row no-margin">
                            <div class="col s12 m6 valign-wrapper">

                                <div class="container">

                                    <h3 class="">
                                        How to
                                        <strong class="cyan-text text-accent-3">Top Up</strong>
                                        your TapCard
                                    </h3>

                                </div>
                            </div>
                            <div class="col s12 m6 valign-wrapper cyan lighten-5" style="height: 400px;">
                                <div class="container center-align">
                                    <a class="circle-btn valign-wrapper center-align cyan accent-3">
                                        <div class="full-width">
                                            <img src="{{ asset('svg/icons/play.svg') }}">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="left-align with-medium-margin grey rounded inline-block slide">
                        <div class="flex row no-margin">
                            <div class="col s12 m6 valign-wrapper">

                                <div class="container">

                                    <h3 class="">
                                        How to
                                        <strong class="teal-text text-accent-3">Pay Using</strong>
                                        your TapCard
                                    </h3>

                                </div>
                            </div>
                            <div class="col s12 m6 valign-wrapper teal lighten-5" style="height: 400px;">
                                <div class="container center-align">
                                    <a class="circle-btn valign-wrapper center-align teal accent-3">
                                        <div class="full-width">
                                            <img src="{{ asset('svg/icons/play.svg') }}">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="left-align with-medium-margin grey rounded inline-block slide">
                        <div class="flex row no-margin">
                            <div class="col s12 m6 valign-wrapper">

                                <div class="container">

                                    <h3 class="">
                                        How to
                                        <strong class="pink-text">Block</strong>
                                        your TapCard
                                    </h3>

                                </div>
                            </div>
                            <div class="col s12 m6 valign-wrapper pink lighten-5" style="height: 400px;">
                                <div class="container center-align">
                                    <a class="circle-btn valign-wrapper center-align pink accent-3">
                                        <div class="full-width">
                                            <img src="{{ asset('svg/icons/play.svg') }}">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="with-padding" style="position: absolute; top: calc(50% - 40px); left: 0; right: 0;">
                    <a id="previous" class="left circle-btn valign-wrapper center-align">
                        <div class="full-width">
                            <img src="{{ asset('svg/icons/left.svg') }}">
                        </div>
                    </a>

                    <a id="next" class="right circle-btn valign-wrapper center-align">
                        <div class="full-width">
                            <img src="{{ asset('svg/icons/right.svg') }}">
                        </div>
                    </a>
                </div>
            </div>
        </div>

        @include("partials.linebreak")
        @include("partials.linebreak")

        <div class="container">
            <div class="light-grey">
                <div class="flex row left-align no-margin">
                    <div class="col s12 m6 valign-wrapper">

                        <div class="container">

                            @include("partials.linebreak")
                            @include("partials.linebreak")

                            <button class="primary btn">#TapCard</button>
                            <h2 class="">Download the TapCard App Today!</h2>
                            <p>
                                Track your spending, manage your TapCards & block a lost TapCard. For ultimate control of your spending, get the TapCard App today.
                            </p>

                            @include("partials.linebreak")

                            <a href="https://play.google.com/store/apps/details?id=zw.co.poscloud.tapcard">
                                <img alt="tapcard-app-nmb-app-play-store" class="right-padding" src="{{ asset("images/play-store.png") }}" style="height: 64px;">
                            </a>

                            @include("partials.linebreak")
                            @include("partials.linebreak")

                        </div>
                    </div>
                    <div class="col s12 m6 center-align valign-wrapper hide-on-small-only">

                        <div class="full-width">
                            @include("partials.linebreak")

                            <img class="half-width rounded" src="{{ asset('images/tapcard-app.png') }}">

                            @include("partials.linebreak")
                        </div>

                    </div>
                </div>
            </div>
        </div>

{{--        @include("partials.linebreak")--}}
{{--        @include("partials.linebreak")--}}

{{--        <div class="container">--}}
{{--            <div class="light-grey">--}}
{{--                <div class="flex row left-align no-margin">--}}
{{--                    <div class="col s12 m6">--}}

{{--                        <div class="container">--}}

{{--                            @include("partials.linebreak")--}}
{{--                            @include("partials.linebreak")--}}

{{--                            <button class="primary btn">#TapCard</button>--}}
{{--                            <h5 class="">Get Your TapCard Now!</h5>--}}
{{--                            <p>--}}
{{--                                Visit your nearest <strong>NMB Bank branch, ZimPost office or any OK Supermarket</strong>. All you need to get started is your <strong>mobile number</strong> and <strong>RTGS$6</strong>. And you can start enjoying 1 second, zero charge transactions.--}}
{{--                            </p>--}}

{{--                            <strong>--}}
{{--                                <a class="" href="/faqs/ALL">Learn more<i class="material-icons">keyboard_arrow_right</i> </a>--}}
{{--                            </strong>--}}

{{--                            @include("partials.linebreak")--}}
{{--                            @include("partials.linebreak")--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col s12 m6">--}}
{{--                        <img class="full-width rounded" src="{{ asset('images/card.png') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        @include("partials.linebreak")
        @include("partials.linebreak")

        <div class="hide grey">
            <div class="container">

                @include("partials.linebreak")
                @include("partials.linebreak")

                <div class="flex row left-align">
                    <div class="col s12 m6">
                        <div class="white square no-margin">
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <div class="white square no-margin">
                        </div>
                    </div>
                </div>

                <div class="flex row left-align">
                    <div class="col s12 m6">
                        <div class="white square no-margin">
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <div class="white square no-margin">
                        </div>
                    </div>
                </div>

                @include("partials.linebreak")
                @include("partials.linebreak")

            </div>
        </div>

        <div class="">
            <div class="container">

                @include("partials.linebreak")
                @include("partials.linebreak")

                <div class="flex row left-align">
                    <div class="col s12 m6">
                        <div class="teal lighten-5 no-margin full-height" style="min-height: 500px;">

                            @include("partials.linebreak")

                            <div class="container">
                                <h3 class="teal-text">
                                    Quick Guide for
                                    <span class="black-text">Merchants</span>
                                </h3>

                                <p class="justified">
                                    TapCard merchants who can accept tap payments need to have a <strong>KaGwenya POS device</strong> provided by NMB Bank.
                                </p>

                                <p class="justified">
                                    To get a KaGwenya POS device, you need to complete a short application & submit the following to your nearest NMB Bank branch:
                                </p>

                                    <ul>
                                        <li><strong>Proof of trading</strong> - Business license, supplier receipts, delivery notes, bank statement, etc.</li>
                                        <li><strong>Certified copy of National ID</strong></li>
                                        <li><strong>Proof of residence</strong> - GHACO letter, Route Permit, utility bill, etc.</li>
                                        <li><strong>2 passport-sized photos</strong></li>
                                        <li><strong>RTGS$ 50 deposit</strong></li>
                                    </ul>

                                <p class="justified">
                                    Once your application is approved, you will be provided with a KaGwenya POS device & free NMB branding material.<br><br>
                                    <strong>NOTE:</strong> Existing NMB merchants should just bring KaGwenya devices for a software update.
                                </p>

                                @include("partials.linebreak")

                                <strong>
                                    <a class="" href="/faqs/Merchant">Learn more<i class="material-icons">keyboard_arrow_right</i> </a>
                                    <a class="" href="/view">View Your Transactions<i class="material-icons">keyboard_arrow_right</i> </a>
                                </strong>

                            </div>

                            @include("partials.linebreak")

                        </div>
                    </div>
                    <div class="col s12 m6 yellow lighten-5">
                        <div class="yellow lighten-5 no-margin full-height black-text">

                            @include("partials.linebreak")

                            <div class="container">
                                <h3 class="amber-text">
                                    Quick Guide for
                                    <span class="black-text">Agents</span>
                                </h3>

                                <p class="justified">
                                    A TapCard Agent is an business registered by NMB Bank to sell TapCard products and services. All TapCard agents are allocated TapCard POS devices in order to sell TapCards and perform card top-ups.
                                </p>

                                <p>An agents earns 15% commission on TapCard sales and 0.2% on TapCard top-ups.</p>

                                <p class="justified">
                                    To become a TapCard agent and earn commission, a business needs to have a distribution network. The agent will then be provided with TapCards on consignment, no upfront is required. Agent commission will then be settled at an agreed frequency.
                                </p>

                                <p>Contact us a call if you meet the above criterion and want to become a TapCard Agent.</p>

                                @include("partials.linebreak")

                                <strong>
                                    <a class="" href="/faqs/Agent">Learn more<i class="material-icons">keyboard_arrow_right</i> </a>
                                    <a class="" href="/view">View Your Transactions<i class="material-icons">keyboard_arrow_right</i> </a>
                                </strong>
                            </div>

                            @include("partials.linebreak")

                        </div>
                    </div>
                </div>

                @include("partials.linebreak")
                @include("partials.linebreak")

            </div>
        </div>

        @include("partials.linebreak")
        @include("partials.linebreak")

    </main>
@endsection
