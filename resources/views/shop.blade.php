@extends("layouts.app")

@section('content')
    @include("partials.nav")

    <main class="no-pad">

        <div class="container">
            @include("partials.linebreak")

            <div class="row">
                <div class="col s12 primary-font no-pad">
                    <h2 class="capitalise">Shop</h2>
                    <p class="">
                        <strong>PRODUCTS<i class="material-icons">keyboard_arrow_right</i> <span class="active-link capitalise animated slideInLeft"> {{ $tagParameter }}</span></strong>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m3 hide-on-small-and-down primary-font no-pad">
                    <div class="sidebar">
                        <ul class="collapsible">
                            <li>
                                <div class="collapsible-header capitalise transparent">
                                    @if($tagParameter === 'ALL')
                                        <i class="material-icons primary-text">keyboard_arrow_right</i>
                                    @endif
                                    <a href="{{ route('shop', 'ALL') }}" class="white-text">
                                        <strong>ALL PRODUCTS</strong>
                                    </a>
                                </div>
                            </li>
                            @foreach($shopTags as $tag)
                                @if(!in_array($tag->name, ["Hero", "Inspiration", "New", "Sales & Offers", "Shop"]))
                                    <li class="animated slideInLeft">
                                        <div class="collapsible-header capitalise transparent">
                                            @if($tagParameter === $tag->name)
                                                <i class="material-icons primary-text">keyboard_arrow_right</i>
                                            @endif
                                            <a href="{{ route('shop', $tag->name) }}" class="white-text">
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
                    <div class="">
                        <div class="flex row no-pad">
                            @foreach($shop as $i => $post)
                                <div class="col s12 m4 no-pad with-small-margin primary-font">
                                    <a href="{{ route('story', $post) }}" class="white-text">
                                        <div class="full-width" style="position:relative;">
                                            <div class="img-background square no-margin ignore" style="background-image: url('/uploads/{{ $post->images[0]->url }}'); -webkit-background-size: cover; background-size: cover;"></div>
                                            <div style="position: absolute; bottom: 10px; left: 10px;">
                                                <span class="white-text white-text-shadow">FROM</span>
                                                <h3 class="primary-text no-margin primary-text-shadow">£<span class="">{{ $post->price }}</span></h3>
                                            </div>
                                        </div>
                                        <div class="top-small-padding secondary-font" style="">
                                            <h5>
                                                <strong class="truncate">{{ $post->title }}</strong>
                                            </h5>

                                            <br>

                                            <div class="truncate">
                                                {{ $post->content }}
                                            </div>

                                            <br>

                                            <strong class="small-text">
                                                <u>VIEW PRODUCT</u>
                                            </strong>
                                        </div>
                                    </a>
                                </div>

                                @if((($i+1) % 3) === 0 )
                                    </div>
                                    <div class="flex row no-pad">
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col s12 m3 hide-on-med-and-up">
                    <div class="sidebar">
                        <ul class="collapsible">
                            <li>
                                <div class="collapsible-header capitalise transparent">
                                    @if($tagParameter === 'ALL')
                                        <i class="material-icons primary-text">keyboard_arrow_right</i>
                                    @endif
                                    <a href="{{ route('shop', 'ALL') }}" class="white-text">
                                        <span>ALL PRODUCTS</span>
                                    </a>
                                </div>
                            </li>
                            @foreach($shopTags as $tag)
                                @if(!in_array($tag->name, ["Hero", "Inspiration", "New", "Sales & Offers", "Shop"]))
                                    <li>
                                        <div class="collapsible-header capitalise transparent">
                                            @if($tagParameter === $tag->name)
                                                <i class="material-icons primary-text">keyboard_arrow_right</i>
                                            @endif
                                            <a href="{{ route('shop', $tag->name) }}" class="white-text">
                                                <span>{{ $tag->name }}</span>
                                            </a>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            @include("partials.linebreak")
            @include("partials.linebreak")
        </div>

    </main>

    @include("partials.footer")
@endsection
