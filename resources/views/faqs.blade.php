@extends("layouts.app")

@include("partials.nav")

@section("content")
    <main class="">

        @include("partials.linebreak")
        @include("partials.linebreak")

        <div class="full-width center-align">
            <h3 class="no-margin varela">We are here to help.</h3>
            <strong class="container">Browse through the most frequently asked questions about TapCard.</strong>

            @include("partials.linebreak")
            @include("partials.linebreak")
        </div>

        <div class="light-grey">
            <div class="flex row container">
                <div class="col s12 m3 hide-on-small-and-down">
                    <div class="sidebar top-padding bottom-padding">
                        <ul class="collapsible container">
                            <li>
                                <div class="collapsible-header capitalise">
                                    <strong class="black-text">TOPICS</strong>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header capitalise">
                                    @if($tagParameter === 'ALL')
                                        <i class="material-icons primary-text">keyboard_arrow_right</i>
                                    @endif
                                    <a href="{{ route('faqs', 'ALL') }}" class="primary-text">
                                        <strong>All</strong>
                                    </a>
                                </div>
                            </li>
                            @foreach($faqTags as $tag)
                                @if(!in_array($tag->name, ["FAQ", "Inspiration", "New", "Sales & Offers", "Shop"]))
                                    <li>
                                        <div class="collapsible-header capitalise">
                                            @if($tagParameter === $tag->name)
                                                <i class="material-icons black-text">keyboard_arrow_right</i>
                                            @endif
                                            <a href="{{ route('faqs', $tag->name) }}" class="black-text">
                                                <strong>{{ $tag->name }}</strong>
                                            </a>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col s12 m9">
                    <div class="top-padding bottom-padding">

                        <h4>{{ $tagParameter }} Questions</h4>

                        @include("partials.linebreak")

                        <ul class="collapsible container">

                            @foreach($faqs as $faq)
                                <li>
                                    <div class="collapsible-header">
                                        <h4 class="black-text secondary-font no-margin">{{ $faq->title }}</h4>
                                    </div>
                                    <div class="collapsible-body no-pad bottom-padding">
                                        <h1 class="primary-text secondary-font no-margin" style="font-size: 15px !important; font-weight: normal !important;">
                                            {!! nl2br($faq->content) !!}
                                        </h1>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            @include("partials.linebreak")
            @include("partials.linebreak")
            @include("partials.linebreak")

        </div>

    </main>
@endsection

