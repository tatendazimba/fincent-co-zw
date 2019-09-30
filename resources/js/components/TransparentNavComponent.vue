<template>
    <div class="transparent" style="position: absolute; left: 0; right: 0;">
        <nav class="transparent container">
            <div class="navbar-wrapper overflow-visible">

                <logo-component></logo-component>

                <a href="#" data-target="slide-out" class="sidenav-trigger black-text valign-wrapper full-height right" style="">
                    <img src="/svg/icons/menu.svg" style="height: 64px;">
                </a>

                <ul class="right hide-on-med-and-down overflow-visible">
                    <li class="">
                        <a href="/" class="cursor-click valign-wrapper white-text">
                            HOME
                        </a>
                    </li>
                    <li class="">
                        <a href="/#services" class="cursor-click valign-wrapper white-text">
                            SERVICES
                        </a>
                    </li>
                    <li class="">
                        <a href="/contact" class="cursor-click valign-wrapper white-text">
                            CONTACT
                        </a>
                    </li>
                    <li class="valign-wrapper">
                        <a href="/exclusive/members" class="white outline btn-large">
                            Member Area
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <side-nav-component></side-nav-component>

    </div>
</template>

<script>

    import * as M from "materialize-css";

    export default {
        name: "TransparentNavComponent",
        data: function(){
            return {
                route: "",
                image: "",
            }
        },
        mounted() {
            document.addEventListener('DOMContentLoaded', function() {
                M.Sidenav.init(document.querySelectorAll('.sidenav'), {
                    edge: "right"
                });

                M.Sidenav.getInstance(document.getElementById("slide-out"));

            });
        },
        mounted() {
            const route = window.location.pathname;

            console.log("route: ", route);

            if (route === "/")
                this.image = "capital.svg";

            if (route === "/")
                this.image = "capital.svg";

            if (route === "/micro-finance")
                this.image = "micro-finance.svg";

            if (route === "/micro-finance")
                this.image = "micro-finance.svg";
        }
    }
</script>

<style>
    li a {
        font-size: 1.3rem !important;
    }
</style>
