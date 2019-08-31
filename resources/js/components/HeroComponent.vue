<template>
    <div style="overflow: visible;">
        <div class="navbar-fixed transparent" style="position: fixed; left: 0; right: 0;">
            <nav class="transparent">
                <div class="transparent container navbar-wrapper overflow-visible">

                    <a href="/" class="brand-logo valign-wrapper full-height">
<!--                        <img class="ignore" src="/images/totem/elephant.jpg" style="height: 64px !important;">-->
                    </a>

                    <a href="#" data-target="mobile-menu" class="sidenav-trigger black-text valign-wrapper full-height" style="">
                        <img src="" style="height: 64px;">
                    </a>

                    <ul class="right hide-on-med-and-down overflow-visible">
                        <li class="">
                            <a href="/" class="cursor-click valign-wrapper white-text">
                                HOME
                            </a>
                        </li>
                        <li class="">
                            <a href="" class="cursor-click valign-wrapper white-text">
                                SERVICES
                            </a>
                        </li>
                        <li class="">
                            <a href="" class="cursor-click valign-wrapper white-text">
                                TEAM
                            </a>
                        </li>
                        <li class="">
                            <a href="" class="cursor-click valign-wrapper white-text">
                                CONTACT
                            </a>
                        </li>

                        <li class="valign-wrapper">
                            <a href="/view/your/transactions" class="primary btn-large">
                                Exchange Rate
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="" style="height: 700px; overflow: visible;">
            <div class="no-margin valign-wrapper" style="background: linear-gradient(rgba(42, 35, 76, .5), rgba(42, 35, 76, .5)), url('/images/totem/elephant.jpg') no-repeat center center; background-size: cover; height: 900px;">
                <div id="" class="container">
                    <div class="center-align container">
                        <h2 class="white-text">At the Centre of Finance.</h2>

                        <hr>

                        <h5 class="white-text">At the Centre of Finance.</h5>

                        <div class="center-align top-margin">
                            <button class="white btn-large right-small-margin">
                                View Our Services
                            </button>

                            &nbsp;&nbsp;&nbsp;

                            <button class="secondary btn-large left-small-margin">
                                View Our Services
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "HeroComponent"
    }
</script>

<style scoped>
    .dark {
        background: #171745 !important;
    }

    .darker {
        background: #1e183f !important;
    }

    .menu-column {
        border-radius: 30px;
        width: 60px;
        max-width: 100%;
        margin: 20px auto;
    }
</style>
