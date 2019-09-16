<div id="sidenav" class="sidenav sidenav-fixed primary white-text">
    <nav class="top-margin bottom-margin" style="height: 120px !important;">
        <div class="navbar-wrapper center" style="height: 120px !important;">
            <ul>
                <li class="" style="height: 120px !important;">
                    <div href="{{ url('/') }}" class="full-height valign-wrapper">
                        <div class="full-width center-align">
                            <img src="{{ asset('images/fincent-light.svg') }}" class="" style="height: 72px !important;">
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="center-align">

        <p>&nbsp;</p>

        <a class="" href="{{ route('stories.create') }}">
            <div class="container">
                <button class="btn-large btn right-align btn-large white black-text full-width">
                    New Post
                </button>
            </div>
        </a>

        <p>&nbsp;</p>

    </div>

    <div class="container">
        <ul class="uppercase collapsible transparent">
            <li class="">
                <a class="collapsible-header valign-wrapper white-text">
                    Posts
                </a>

                <div class="collapsible-body transparent">
                    @foreach($allTags as $tag)
                        <div class="">
                            <a href="{{ route('stories.per', $tag) }}" class="full-width capitalise white-text">
                                {{ $tag->name }}
                            </a>
                        </div>
                    @endforeach

                    <div class="">
                        <a class="white-text" href="{{ route('tags.index') }}">
                            View All Tags
                        </a>
                    </div>

                </div>
            </li>
            <li class="">
                <a href="{{ route('currencies.index') }}" class="collapsible-header valign-wrapper white-text">
                    Currencies
                </a>
            </li><li class="">
                <a href="{{ route('rates.index') }}" class="collapsible-header valign-wrapper white-text">
                    Rates
                </a>
            </li>
            <li class="">
                <a class="collapsible-header valign-wrapper white-text">
                    Transactions
                </a>
            </li>
            <li class="">
                <a class="collapsible-header valign-wrapper white-text">
                    Reports
                </a>
            </li>
        </ul>
    </div>
</div>

{{--<script>--}}
{{--    document.addEventListener('DOMContentLoaded', function() {--}}
{{--        var elems = document.querySelectorAll('.collapsible');--}}
{{--        var instances = M.Collapsible.init(elems, {});--}}
{{--    });--}}
{{--</script>--}}
