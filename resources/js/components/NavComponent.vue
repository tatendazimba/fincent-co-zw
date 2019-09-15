<template>
    <div class="navbar-fixed white" style="position: fixed; left: 0; right: 0;">
        <nav class="transparent">
            <div class="white container navbar-wrapper overflow-visible">

                <a href="/" class="brand-logo valign-wrapper full-height">
                    <img class="ignore" src="/images/fincent.svg" style="height: 64px !important;">
                </a>

                <a href="#" data-target="mobile-menu" class="sidenav-trigger black-text valign-wrapper full-height" style="">
                    <img src="" style="height: 64px;">
                </a>

                <ul class="right hide-on-med-and-down overflow-visible">
                    <li class="">
                        <a href="/" class="cursor-click valign-wrapper primary-text">
                            HOME
                        </a>
                    </li>
                    <li class="">
                        <a href="" class="cursor-click valign-wrapper primary-text">
                            SERVICES
                        </a>
                    </li>
                    <li class="">
                        <a href="/team" class="cursor-click valign-wrapper primary-text">
                            LEADERSHIP
                        </a>
                    </li>
                    <li class="">
                        <a href="/contact" class="cursor-click valign-wrapper primary-text">
                            CONTACT
                        </a>
                    </li>

                    <li class="valign-wrapper">
                        <a href="" class="primary btn-large">
                            Exchange Rate
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</template>

<script>
    export default {
        name: "NavComponent"
    }
</script>

<style scoped>

</style>
