<template>
    <div class="transparent" style="position: absolute; left: 0; right: 0;">
        <nav class="transparent container">
            <div class="navbar-wrapper overflow-visible">

                <a href="/" class="brand-logo valign-wrapper full-height left" style="opacity: .9498;">
                    <img class="ignore" src="/images/fincent-orange-white.svg" style="height: 64px !important; padding: 0 20px;">
                </a>

                <a href="#" data-target="slide-out" class="sidenav-trigger black-text valign-wrapper full-height right" style="">
                    <img src="/svg/icons/menu.svg" style="height: 64px;">
                </a>

                <ul class="right hide-on-med-and-down overflow-visible">
                    <li class="">
                        <a href="/trading" class="cursor-click valign-wrapper white-text">
                            SECURITIES
                        </a>
                    </li>
                    <li class="">
                        <a href="/micro-finance" class="cursor-click valign-wrapper white-text">
                            MICROFINANCE
                        </a>
                    </li>
                    <li class="">
                        <a href="/corporate-services" class="cursor-click valign-wrapper white-text">
                            CORPORATE SERVICES
                        </a>
                    </li>
                    <li class="">
                        <a href="/exchange" class="cursor-click valign-wrapper white-text">
                            BUREAU DE CHANGE
                        </a>
                    </li>
                    <li class="valign-wrapper">
                        <a href="" class="white outline btn-large">
                            Exchange Rate
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="slide-out" class="sidenav primary valign-wrapper center-align" style="width: 100%;">

            <a href="#" class="sidenav-close" style="position: absolute; top: 10px; right: 20px;">
                <h1>
                    <i class="material-icons white-text">close</i>
                </h1>
            </a>
            <ul class="full-width">
                <li class="">
                    <a href="/" class="cursor-click valign-wrapper white-text">
                        HOME
                    </a>
                </li>
                <li class="">
                    <a href="/trading" class="cursor-click valign-wrapper white-text">
                        SECURITIES
                    </a>
                </li>
                <li class="">
                    <a href="/micro-finance" class="cursor-click valign-wrapper white-text">
                        MICROFINANCE
                    </a>
                </li>
                <li class="">
                    <a href="/corporate-services" class="cursor-click valign-wrapper white-text">
                        CORPORATE SERVICES
                    </a>
                </li>
                <li class="">
                    <a href="/exchange" class="cursor-click valign-wrapper white-text">
                        BUREAU DE CHANGE
                    </a>
                </li>
                <li class="">
                    <a href="/leadership" class="cursor-click valign-wrapper white-text">
                        LEADERSHIP
                    </a>
                </li>
                <li class="">
                    <a href="/about" class="cursor-click valign-wrapper white-text">
                        ABOUT US
                    </a>
                </li>
                <li class="">
                    <a href="/contacut" class="cursor-click valign-wrapper white-text">
                        CONTACT US
                    </a>
                </li>

                <li class="center-align valign-wrapper">
                    <div class="full-width">
                        <button class="white outline btn-large" style="width: auto;">
                            Exchange Rate
                        </button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>

    import * as M from "materialize-css";

    export default {
        name: "TransparentNavComponent",
        mounted() {
            document.addEventListener('DOMContentLoaded', function() {
                M.Sidenav.init(document.querySelectorAll('.sidenav'), {
                    edge: "right"
                });

                M.Sidenav.getInstance(document.getElementById("slide-out"));

            });
        }
    }
</script>

<style>
    li a {
        font-size: 1.3rem !important;
    }
</style>
