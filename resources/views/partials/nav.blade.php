<div id="" class="white">
    <nav class="white container">
        <div class="transparent navbar-wrapper overflow-visible">

            <a href="/" class="brand-logo valign-wrapper full-height">
                <img class="ignore" src="{{ asset('svg/tapcard.svg') }}" style="height: 64px !important;">
            </a>

            <a href="#" data-target="mobile-menu" class="sidenav-trigger black-text valign-wrapper full-height" style="">
                <img src="{{ asset("svg/icons/menu.svg") }}" style="height: 64px;">
            </a>

            <ul class="right hide-on-med-and-down overflow-visible">
                <li class="">
                    <a href="/" class="cursor-click valign-wrapper black-text">
                        HOME
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('tapcard.points', "harare") }}" class="cursor-click valign-wrapper black-text">
                        WHERE TO USE
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('faqs', 'ALL') }}" class="cursor-click valign-wrapper black-text">
                        FAQs
                    </a>
                </li>

{{--                <li class="valign-wrapper">--}}
{{--                    <a href="/view/your/transactions" class="primary btn">--}}
{{--                        View Your Transactions--}}
{{--                    </a>--}}
{{--                </li>--}}
            </ul>
        </div>
    </nav>
</div>

<div class="divide"></div>

<ul class="sidenav" id="mobile-menu" style="">
    <li class="">
        <a href="/" class="cursor-click valign-wrapper black-text">
            <h5 class="secondary-font"></h5>
        </a>
    </li>

    <li class="">
        <a href="/" class="cursor-click valign-wrapper black-text">
            <h5 class="secondary-font">Home</h5>
        </a>
    </li>

    <li class="">
        <a href="{{ route('tapcard.points', "harare") }}" class="cursor-click valign-wrapper black-text">
            <h5 class="secondary-font">Where to Use</h5>
        </a>
    </li>

    <li class="">
        <a href="{{ route('faqs', 'ALL') }}" class="cursor-click valign-wrapper black-text">
            <h5 class="secondary-font">FAQs</h5>
        </a>
    </li>

    <li class="valign-wrapper">
        <a href="/view/your/transactions" class="primary btn btn-large">
            <span class="text">
                View Your Transactions
            </span>
            <span class="circle icon primary">
                <img src="{{ asset("svg/icons/right.svg") }}" style="height: 40px;">
            </span>
        </a>
    </li>

    <li class="">
        <span>
            <a target="_blank" href="https://www.facebook.com/tapcardzw/" class="circle-btn transparent valign-wrapper center-align">
                <div class="full-width">
                    <img src="{{ asset('svg/icons/facebook-dark.svg') }}" style="height: 24px !important;">
                </div>
            </a>
        </span>

        <span>
            <a target="_blank" href="https://www.instagram.com/tapcardzw/" class="circle-btn transparent valign-wrapper center-align">
                <div class="full-width">
                    <img src="{{ asset('svg/icons/instagram-dark.svg') }}" style="height: 24px !important;">
                </div>
            </a>
        </span>

        <span>
            <a target="_blank" href="https://www.twitter.com/tapcardzw/" class="circle-btn transparent valign-wrapper center-align">
                <div class="full-width">
                    <img src="{{ asset('svg/icons/twitter-dark.svg') }}" style="height: 24px !important;">
                </div>
            </a>
        </span>
    </li>
</ul>
