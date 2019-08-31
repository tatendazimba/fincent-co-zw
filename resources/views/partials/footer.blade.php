<div class="primary">
    <div class="container left-align">

        <div class="top-padding bottom-padding container white-text center-align">

            @include("partials.linebreak")

            <h3 class="white-text">Get in touch.</h3>
            <strong class="container">Contact the TapCard Support Centre for assistance.</strong>

            @include("partials.linebreak")
            @include("partials.linebreak")

            <div class="flex row">
                <div class="col s12 m4">
                    <img class="quarter-width" src="{{ asset('svg/icons/support.svg') }}">

                    <div class="">

                        <br>

                        <strong>Support Centre</strong> <br>

                        +263 712 616 100 <br>
                        +263 712 616 101 <br>
                        +263 772 244 788 <br>
                    </div>
                </div>

                <div class="col s12 m4">
                    <img class="quarter-width" src="{{ asset('svg/icons/email.svg') }}">

                    <div class="">

                        <br>

                        <strong>Email</strong> <br>

                        info@tapcard.co.zw <br>
                        support@tapcard.co.zw <br>
                        help@tapcard.co.zw <br>

                    </div>
                </div>

                <div class="col s12 m4">
                    <img class="quarter-width" src="{{ asset('svg/icons/offices.svg') }}">

                    <div class="">

                        <br>

                        <strong>TapCard Offices</strong> <br>

                        3rd Floor Beverly Court<br>
                        100 Nelson Mandela <br>
                        Harare, Zimbabwe <br>
                    </div>
                </div>
            </div>
        </div>

        @include("partials.linebreak")

    </div>

    <div class="container center-align">
        <span>
            <a target="_blank" href="https://www.facebook.com/tapcardzw/" class="circle-btn transparent valign-wrapper center-align">
                <div class="full-width">
                    <img src="{{ asset('svg/icons/facebook.svg') }}" style="height: 36px !important;">
                </div>
            </a>
        </span>

        &nbsp;

        <span>
            <a target="_blank" href="https://www.instagram.com/tapcardzw/" class="circle-btn transparent valign-wrapper center-align">
                <div class="full-width">
                    <img src="{{ asset('svg/icons/instagram.svg') }}" style="height: 36px !important;">
                </div>
            </a>
        </span>

        &nbsp;

        <span>
            <a target="_blank" href="https://www.twitter.com/tapcardzw/" class="circle-btn transparent valign-wrapper center-align">
                <div class="full-width">
                    <img src="{{ asset('svg/icons/twitter.svg') }}" style="height: 36px !important;">
                </div>
            </a>
        </span>
    </div>

    @include("partials.linebreak")

</div>

<div class="black white-text center-align with-padding">
    <a target="_blank" href="{{ route("policy", 38) }}" class="container with-small-padding small-text white-text capitalise">
        Terms & Conditions
    </a>
    <a target="_blank" href="{{ route("policy", 37) }}" class="container with-small-padding small-text white-text capitalise">
        Customer Protection Policy
    </a>
    <a target="_blank" href="http://www.poscloud.co.zw" class="container with-small-padding small-text white-text">
        © Poscloud (Pvt) Limited 2019.
    </a>
</div>

<div class="full-width center-align no-pad">
    <div id="image-modal" class="modal no-pad">
        <div id="content" class="modal-content no-pad full-height">

        </div>
    </div>
</div>

@section("scripts")
    <script>

        $(document).ready(function () {
            const instance = M.Modal.init(
                document.getElementById("image-modal")
            );

            M.Sidenav.init(document.querySelectorAll('.sidenav'), {});
            M.Collapsible.init(document.querySelectorAll('.collapsible'), {});
            M.Modal.init(document.querySelectorAll('.modal'), {});
            M.Dropdown.init(document.querySelectorAll('.dropdown-trigger'), {constrainWidth: false, coverTrigger: false});

            $(".modal-trigger").click(function() {

                $id = $(this).attr("data-content");

                $("#card_id").val($id);

                console.log("id: ", $id);
            });

        });

        M.Carousel.init(document.querySelectorAll(".carousel.carousel-slider"), {
            fullWidth: true,
            indicators: true,
            duration: 200
        });

        if(document.getElementById("hero")) {
            const instance = M.Carousel.getInstance(document.getElementById("hero"));

            setInterval(function () {
                if (!instance.pressed) {
                    instance.next();
                }
            }, 7000);
        }

        M.Collapsible.init(document.querySelectorAll('.collapsible'), {});

        M.Sidenav.init(document.querySelectorAll('.mobile-menu'), {});

    </script>
@endsection
