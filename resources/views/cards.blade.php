@extends("layouts.app")

@include("partials.customer-nav")

@section("content")
    <main class=""style="min-height: 100%;">

        @include("partials.linebreak")

        <div class="container">
            <h5 class="no-margin varela capitalise">All your TapCards in one place.</h5>
            <strong class="container">Get control of your TapCards and spending.</strong>

            <p>
                <i class="small-text">Found <strong>{{ count($cards) }}</strong> TapCards linked to your mobile number.</i><br>
                @if(session()->has("code"))
                    @if(session("code") === "00")
                        <strong class="teal-text">{{ session("description") }}</strong>
                    @else
                        <strong class="red-text">{{ session("description") }}</strong>
                    @endif
                @endif
            </p>
        </div>

        <div class="white">
            <div class="container left-align">
                @foreach($cards as $card)
                    <div class="flex row top-margin bottom-margin">

                        <div class="col s12 m4 no-pad no-margin hide-on-large-only">
                            @include("partials.card")
                        </div>

                        <div class="col s12 m8 no-pad right-padding">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><strong>CARD NUMBER</strong></td>
                                        <td>
                                            <strong>{{ substr_replace($card->cardNumber, " ******* ", 6, 9) }}</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>BALANCE</strong></td>
                                        <td>{{ number_format($card->balance / 100, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>LAST USED</strong></td>
                                        <td>{{ $card->lastUse}}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>STATUS</strong></td>
                                        <td>
                                            @if($card->status === "BLOCKED" || $card->status === "INACTIVE")
                                                <div class="label red accent-3 white-text">
                                                    BLOCKED
                                                </div>
                                            @else
                                                <strong class="teal-text">
                                                    ACTIVE &nbsp;&nbsp;&nbsp;&nbsp;
                                                </strong>
                                                <button data-content="{{ $card->id }}" data-target="modal-block-card" class="label red outline modal-trigger">
                                                    BLOCK THIS CARD
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="col s12 m4 no-pad no-margin hide-on-med-and-down">
                            @include("partials.card")
                        </div>
                    </div>

                    <div class="divide"></div>
                @endforeach
            </div>

            @include("partials.linebreak")
            @include("partials.linebreak")
            @include("partials.linebreak")
            @include("partials.linebreak")

        </div>

    </main>
@endsection

<div id="modal-block-card" class="modal">
    <form action="{{ route('customer.cards.block') }}" method="POST">
        @csrf
        <input id="card_id" name="cardId" type="hidden" value="" required>

        <div class="modal-content">
            <h4>Block Card</h4>

            <p>This action cannot be reversed. You will have to replace the blocked TapCard. Your existing balance will be moved to a new TapCard. </p>

            <p>
                <a target="_blank" href="{{ route("faqs", "Blocking") }}">Learn more</a>
            </p>
        </div>
        <div class="modal-footer">
            <a href="#" class="modal-close btn red">Cancel</a>
            <button type="submit" class="modal-close btn green">Agree</button>

        </div>
    </form>
</div>

