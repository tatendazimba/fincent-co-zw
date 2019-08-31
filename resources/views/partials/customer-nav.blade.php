<div id="" class="white large">
    <nav class="transparent container" style="">
        <div class="transparent navbar-wrapper overflow-visible">

            <a href="/" class="brand-logo valign-wrapper" style="height: 72px !important; display: flex !important;">
                <img class="ignore" src="{{ asset('svg/tapcard.svg') }}" style="height: 64px !important;">
            </a>

            <a href="#" data-target="mobile-menu" class="sidenav-trigger black-text valign-wrapper" style="height: 72px;"><i class="material-icons">menu</i></a>

            <ul class="right hide-on-med-and-down overflow-visible">
                <li class="">
                    <a href="{{ route('customer.transactions') }}" class="cursor-click valign-wrapper black-text">
                        TRANSACTIONS
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('customer.cards') }}" class="cursor-click valign-wrapper black-text">
                        YOUR CARDS
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('registrations.index') }}" class="cursor-click valign-wrapper black-text">
                        CHANGE PIN
                    </a>
                </li>

                <li>
                    <a href="{{ route('customer.logout') }}" class="primary btn capitalise">
                        LOGOUT &nbsp;
                        <span>{{ session("firstname") }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<div class="divide container"></div>

<ul class="sidenav no-margin" id="mobile-menu" style="margin-top: 36px;">
    <li class="">
        <a href="{{ route('customer.transactions') }}" class="cursor-click valign-wrapper black-text secondary-font">
            TRANSACTIONS
        </a>
    </li>
    <li class="">
        <a href="{{ route('customer.cards') }}" class="cursor-click valign-wrapper black-text secondary-font">
            CARDS
        </a>
    </li>
    <li class="">
        <a href="{{ route('registrations.index') }}" class="cursor-click valign-wrapper black-text secondary-font">
            CHANGE PIN
        </a>
    </li>

    <li>
        <a href="{{ route('customer.logout') }}" class="primary btn capitalise">
            LOGOUT &nbsp;
            <span>{{ session("firstname") }}</span>
        </a>
    </li>
</ul>

<script>
    const mobile = @json(session("mobile")) ? @json(session("mobile")) : @json("");
    const firstname = @json(session("firstname")) ? @json(session("firstname")) : @json("");
    const lastname = @json(session("lastname")) ? @json(session("lastname")) : @json("");

    document.addEventListener('DOMContentLoaded', (event) => {
        heap.identify(mobile);
        heap.addUserProperties({'full name': firstname + " " + lastname});
    });

</script>
