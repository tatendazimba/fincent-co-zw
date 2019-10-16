@extends('layouts.app')

@section('content')
<div class="">
    <members-hero-component></members-hero-component>

    <div style="background: linear-gradient(rgba(255, 255, 255, .95), rgba(255, 255, 255, .75)), url('/images/people/woman.jpg') no-repeat center center fixed; background-size: cover;">
        <p>&nbsp;</p>

        <p class="container">
            @if (auth()->user())
                <a class="primary-font black-text right" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                    <span class="grey-text"> {{ __('LOGOUT') }}</span> <u class="capitalise">{{ auth()->user()->name }}</u>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endif

        </p>
        <p>&nbsp;</p>

        <div class="row container">
            <div class="col s12 primary-font no-pad">
                <h5>
                    <strong>TAGS: </strong>

                    @foreach($shopTags as $tag)
                        @if(!in_array($tag->name, ["Hero", "Inspiration", "New", "Sales & Offers", "Shop", "Members"]))
                            <span class="animated fadeIn">
                                @if($tagParameter === $tag->name)
                                    <a href="{{ route('members.index', $tag->name) }}" class="secondary-text thin uppercase">
                                        <u>{{ $tag->name }}</u>
                                    </a>
                                @else
                                    <a href="{{ route('members.index', $tag->name) }}" class="grey-text thin uppercase">
                                        <u>{{ $tag->name }}</u>
                                    </a>
                                @endif
                            </span>
                        @endif
                    @endforeach
                </h5>
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>

            <div class="col s12">
                <div class="">
                    <div class="flex row no-pad">
                        @foreach($shop as $i => $post)
                            <div class="col s12 m4 no-pad with-small-margin primary-font white">
                                <div class="black-text">
                                    <div class="full-width" style="position:relative;">
                                        <div class="img-background square no-margin ignore" style="background-image: url('/uploads/{{ $post->images[0]->url }}'); -webkit-background-size: cover; background-size: cover;"></div>
                                    </div>
                                    <div class="top-small-padding secondary-font container" style="">
                                        <h5>
                                            <span class="flow-text truncate">{{ $post->title }}</span>
                                        </h5>

                                        <br>

                                        <div class="truncate">
                                            {{ substr($post->content, 0, 200) }}
                                        </div>

                                        <br>

                                        @if($post->tags->contains('name', 'Free'))
                                            <a href="{{ route('free.content.show', $post) }}">
                                                <strong class="btn secondary">READ ARTICLE (FREE)</strong>
                                            </a>
                                        @else
                                            <a href="{{ route('exclusive.content.show', $post) }}">
                                                <strong class="btn secondary">FULL ARTICLE (EXCLUSIVE)</strong>
                                            </a>
                                        @endif

                                        <p>&nbsp;</p>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </div>

    <newsletter-component></newsletter-component>
</div>
@endsection
