@extends("layouts.app")

@include("partials.nav")

@section("content")
    <main class="">

        <div class="no-margin">

            <div class="flex row no-margin" style="height: calc(100% - 96px);">
                <div class="col s12 m4 no-margin full-height no-pad">

                    <div class="white right-padding left-padding valign-wrapper" style="height: 120px; -webkit-box-shadow:0 2px 4px #cacbcd; -moz-box-shadow: 0 2px 4px #cacbcd; box-shadow: 0 2px 4px #cacbcd !important;">
                        <div class="full-width">
                            <h5 class="secondary-font truncate"><strong><span class="primary-font primary-text">TapCard</span> Merchants</strong></h5>

                            <strong>Select Location:</strong>
                            <a href="#" class="dropdown-trigger" data-target='dropdown-cities'><strong class="primary-text capitalise">{{ $location }} <i class="material-icons pink-text small-text">keyboard_arrow_down</i> </strong></a>

                            &nbsp;

                            <a href="#" class="dropdown-trigger" data-target='dropdown-suburbs'><strong class="primary-text capitalise">{{ $selectedSuburb ? $selectedSuburb : "All Suburbs" }} <i class="material-icons pink-text small-text">keyboard_arrow_down</i> </strong></a>

                            <br>

                            <a class="" href="#all-tapcard-locations"><u>View All Merchants Accepting TapCard</u></a>

                            <ul id='dropdown-cities' class='dropdown-content'>
                                @foreach($groupedMerchants as $group => $groupMerchants)
                                    <li>
                                        <a class="primary-text capitalise" href="{{ route("tapcard.points", strtolower($group)) }}"><strong>{{ $group }}</strong></a>
                                    </li>
                                @endforeach
                            </ul>

                            <ul id='dropdown-suburbs' class='dropdown-content'>

                                <li>
                                    <a class="primary-text capitalise" href="{{ route("tapcard.points", compact("location")) }}"><strong>All suburbs</strong></a>
                                </li>
                                @foreach($groupedSuburbs as $group => $groupSuburbs)

                                    @if(strtolower($group) === strtolower($location))
                                        @foreach($groupSuburbs as $suburb)
                                            <li>
                                                <a class="primary-text capitalise" href="{{ route("tapcard.points", compact("location", "suburb")) }}"><strong>{{ $suburb }}</strong></a>
                                            </li>
                                        @endforeach
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="row" style="height: calc(100% - 120px); overflow-y: scroll; background-color: #fbf7f1;">

                        <div class="col s12">
                            @foreach($groupedMerchants as $group => $groupMerchants)

                                @if(strtolower($group) === strtolower($location))
                                    @foreach($groupMerchants as $merchant)
                                        @if((strtolower($selectedSuburb) === strtolower($merchant->suburb) || ($selectedSuburb === "")))
                                            <div class="white flex row left-align with-small-margin">
                                                <div class="col s12">
                                                    <div class="right-padding left-padding top-medium-padding bottom-medium-padding">
                                                        <div class="circle valign-wrapper bordered" style="height: 28px; width: 28px; margin-bottom: 15px !important; border: 2px solid #ff9100 !important;">
                                                            <div class="full-width center-align">
                                                                <img class="" src="{{ asset("svg/briefcase.svg") }}" style="height: 12px; width: 12px;">
                                                            </div>
                                                        </div>
                                                        <h5 class="secondary-font no-margin">
                                                            <strong>{{ $merchant->name }}</strong>
                                                        </h5>
                                                        <strong class="">{{ $merchant->city }}</strong> {{ $merchant->suburb }}<br>
                                                        <p>
                                                            <i class="material-icons small-text grey-text">fiber_manual_record</i>
                                                            {{ isset($mcc[$merchant->type]) ? $mcc[$merchant->type] : "Local Business" }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col s12 m8 no-pad full-height grey lighten-5" style="position:relative;">
                    <div id='map' class="full-height grey lighten-5" style="position:absolute; top: 0; left: 0; right: 0;"></div>
                    <div class="transparent rounded horizontal-scroll truncate" style="position:absolute; bottom: 0; left: 0; right: 0;">
                        @foreach($ranking as $category)
                            <div class="white with-medium-padding bordered rounded with-small-margin inline-block primary-font primary-text" style="border-width: 2px !important;">
                                {{ isset($mcc[$category->type]) ? $mcc[$category->type] : "Local Business" }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div id="all-tapcard-locations" class="">

                @include("partials.linebreak")
                @include("partials.linebreak")

                <div class="container">
                @foreach($groupedMerchantsByLength as $group => $groupMerchants)
                    <div class="row">
                        <div class="col s12">
                            <h3 class="secondary-font">
                                <strong class="capitalise">{{ $group }} <span class="white-text">TapCard Accepting Points</span></strong>
                            </h3>
                        </div>
                    </div>

                    <div class="masonry-with-columns">

                        @foreach($groupedSuburbs[$group] as $suburb)
                            <div href="" class="column full-width light-grey">

                                <div class="container top-medium-padding bottom-medium-padding">
                                    <div class=""><strong class="uppercase">{{ $suburb }}</strong></div>

                                    @foreach($groupMerchants as $merchant)
                                        @if((strtolower($suburb) === strtolower($merchant->suburb)))
                                            <div class="">
                                                <h5 class="primary-text inline-block secondary-font" style="font-size: 15px !important;">
                                                    <strong>{{ $merchant->name }}</strong> -
                                                    <span class="small-text black-text">{{ isset($mcc[$merchant->type]) ? $mcc[$merchant->type] : "Local Business" }}</span>
                                                </h5>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>

                                @include("partials.linebreak")

                            </div>
                        @endforeach
{{--                        @foreach($groupedSuburbs[$group] as $i => $suburb)--}}
{{--                            <div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col s12"><strong class="uppercase">{{ $suburb }}</strong></div>--}}
{{--                                </div>--}}

{{--                                <div class="row">--}}
{{--                                    @foreach($groupMerchants as $merchant)--}}
{{--                                        @if((strtolower($suburb) === strtolower($merchant->suburb)))--}}
{{--                                            <div class="col s13">--}}
{{--                                                <span>{{ $merchant->name }}</span>--}}
{{--                                            </div>--}}
{{--                                        @endif--}}
{{--                                    @endforeach--}}
{{--                                </div>--}}

{{--                                @include("partials.linebreak")--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
                    </div>
                @endforeach

            </div>
            </div>
        </div>

        <script>

            const merchants = @json($merchants);
            const selectedLocation = @json($location);

            mapboxgl.accessToken = 'pk.eyJ1IjoidGF0ZW5kYSIsImEiOiJjaWhnNzZsZmUwMDhhdTJtNDd0bmJnaDk0In0.dv-XT9CXQ9MMpeyHSGf9Jw';

            const map = new mapboxgl.Map({
                container: 'map', // container id
                style: 'mapbox://styles/mapbox/light-v10', // stylesheet location
                // center: [29.1528018, -19.0169211], // starting position [lng, lat]
                center: [31.053028, -17.824858], // starting position [lng, lat]
                zoom: 10 // starting zoom
            });

            let i = 0;

            setInterval(function () {

                if (i < merchants.length) {
                    const value = merchants[i];

                    const address = value.suburb + ", " + value.city + ", Zimbabwe";
                    dropMarker(address);

                    i++;
                } else {
                    focus(selectedLocation + ", Zimbabwe");
                }

            }, 300);


            function focus(address) {
                const mapboxClient = mapboxSdk({accessToken: mapboxgl.accessToken});

                mapboxClient.geocoding.forwardGeocode({
                    query: address,
                    autocomplete: false,
                    limit: 1
                })
                    .send()
                    .then(function (response) {
                        if (response && response.body && response.body.features && response.body.features.length) {

                            const feature = response.body.features[0];

                            map.setCenter(feature.center);
                        }
                    });
            }

            function dropMarker(address) {
                const mapboxClient = mapboxSdk({accessToken: mapboxgl.accessToken});

                mapboxClient.geocoding.forwardGeocode({
                    query: address,
                    autocomplete: false,
                    limit: 1
                })
                    .send()
                    .then(function (response) {
                        if (response && response.body && response.body.features && response.body.features.length) {

                            const feature = response.body.features[0];

                            // create the popup
                            const popup = new mapboxgl.Popup({ offset: 25 })
                                .setText(address);

                            // create DOM element for the marker
                            const el = document.createElement('div');
                            el.setAttribute("class", "marker");

                            new mapboxgl.Marker(el)
                                .setLngLat(feature.center)
                                .setPopup(popup)
                                .addTo(map);
                        }
                    });
            }
        </script>

    </main>
@endsection
