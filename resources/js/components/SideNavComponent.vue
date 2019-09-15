<template>
    <div id="slide-out" class="sidenav primary valign-wrapper center-align white-text" style="width: 100%;">

        <a href="#" class="sidenav-close" style="position: absolute; top: 10px; right: 20px;">
            <h1>
                <i class="material-icons white-text">close</i>
            </h1>
        </a>
        <ul class="full-width primary-font">
            <li class="">
                <a href="/" class="cursor-click valign-wrapper white-text">
                    HOME
                </a>
            </li>
            <li class="">
                <a href="/trading" class="cursor-click valign-wrapper white-text">
                    SECURITIES TRADING
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
<!--            <li class="">-->
<!--                <a href="/leadership" class="cursor-click valign-wrapper white-text">-->
<!--                    LEADERSHIP-->
<!--                </a>-->
<!--            </li>-->
<!--            <li class="">-->
<!--                <a href="/about" class="cursor-click valign-wrapper white-text">-->
<!--                    ABOUT US-->
<!--                </a>-->
<!--            </li>-->
            <li class="">
                <a href="/contact" class="cursor-click valign-wrapper white-text">
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
</template>

<script>

    import * as M from "materialize-css";

    export default {
        name: "SideNavComponent",
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
