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

        <a class="" href="{{ route('transactions.create') }}">
            <div class="container">
                <button class="btn-large btn right-align btn-large white black-text full-width">
                    New Transaction
                </button>
            </div>
        </a>

        <p>&nbsp;</p>

    </div>

    <div class="container">
        <ul class="uppercase collapsible transparent">

            <p>&nbsp;</p>

            <h5 class="secondary-text">
                BUREAU DE CHANGE
            </h5>

            <p>&nbsp;</p>

            <li class="">
                <a href="{{ route('currencies.index') }}" class="collapsible-header valign-wrapper white-text">
                    Currencies
                </a>
            </li>
            <li class="">
                <a href="{{ route('rates.index') }}" class="collapsible-header valign-wrapper white-text">
                    Rates
                </a>
            </li>
            <li class="">
                <a class="collapsible-header valign-wrapper white-text">
                    Customers
                </a>

                <div class="collapsible-body transparent">
                    <div class="">
                        <a class="white-text" href="{{ route('customers.create') }}">
                            Add New
                        </a>
                    </div>

                    <div class="">
                        <a class="white-text" href="{{ route('customers.index') }}">
                            View All
                        </a>
                    </div>
                </div>
            </li>
            <li class="">
                <a href="{{ route('reports.index') }}" class="collapsible-header valign-wrapper white-text">
                    Reports
                </a>
            </li>

            <p>&nbsp;</p>

            <h5 class="secondary-text">
                CONTENT
            </h5>

            <p>&nbsp;</p>

            <li class="">
                <a class="collapsible-header valign-wrapper white-text">
                    Posts
                </a>

                <div class="collapsible-body transparent">
                    <div class="">
                        <a class="white-text" href="{{ route('stories.create') }}">
                            Add New
                        </a>
                    </div>

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
        </ul>
    </div>

    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
</div>

{{--<script>--}}
{{--    document.addEventListener('DOMContentLoaded', function() {--}}
{{--        var elems = document.querySelectorAll('.collapsible');--}}
{{--        var instances = M.Collapsible.init(elems, {});--}}
{{--    });--}}
{{--</script>--}}
