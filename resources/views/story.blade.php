@extends("layouts.app")

@section('content')
    <main class="no-pad">

        <nav-component></nav-component>

        <div class="container">

            @include("partials.linebreak")
            @include("partials.linebreak")
            @include("partials.linebreak")
            @include("partials.linebreak")

            <div class="flex row">
                <div class="col s12 m6 l7">
                    <h2>{{ $post->name }}</h2>
                </div>
                <div class="col s12 m6 l5">

                </div>
            </div>

            <div class=" flex row">

                <div class="col s12 m4">
{{--                    <div class="">--}}
{{--                        <strong class="grey-text primary-font">AUTHOR</strong>--}}
{{--                        <h5 class="no-margin">--}}
{{--                            <strong class="primary-text">Ranga Makwata</strong>--}}
{{--                        </h5>--}}
{{--                        <strong class="secondary-text">Fincent Capital</strong><br>--}}
{{--                    </div>--}}

{{--                    <p>&nbsp;</p>--}}

                    <div class="">
                        <strong class="grey-text primary-font">DATE PUBLISHED</strong>

                        <br>

                        <span class="no-margin">
                            <strong class="secondary-text">{{ $post->updated_at }}</strong>
                        </span>
                    </div>

                    <p>&nbsp;</p>

                    <div class="">
                        <strong class="grey-text primary-font">CATEGORIES</strong>

                        <br>

                        @foreach($post->tags as $tag)
                            <a href="{{ route('members.index', $tag->name) }}" style="">
                                <strong class="secondary-text uppercase"><u>{{ $tag->name }}</u></strong>
                            </a>
                        @endforeach
                    </div>
                </div>

                <div class="col s12 m8">

                    <div class="ignore square no-margin" style="background: url('/uploads/{{ $post->images[0]->url }}') no-repeat center center; background-size: cover;"></div>

                    <p>{!! nl2br($post->content) !!}</p>

                    @include("partials.linebreak")

                    <div class="variables">
                        @foreach($post->tags as $tag)
                            <a class="cursor-click inline-block" style="border: 1px solid #cacbcd; padding: 3px 12px; margin: 2px 0px;">{{ $tag->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        @include("partials.linebreak")
        @include("partials.linebreak")
        @include("partials.linebreak")
        @include("partials.linebreak")

    </main>

    @include("partials.footer")
@endsection
