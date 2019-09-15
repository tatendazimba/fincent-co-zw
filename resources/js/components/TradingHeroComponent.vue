<template>
    <div style="overflow: visible;">
        <nav-component></nav-component>
        <div class="hoverable" style="">
            <div class="no-margin valign-wrapper" style="background: linear-gradient(rgba(42, 35, 76, .5), rgba(42, 35, 76, .5)), url('/images/city/angwa.jpg') no-repeat center center; background-size: cover; height: 900px;">
                <div id="" class="row container">
                    <div class="col s12">
                        <h1 class="white-text animated slideInLeft jumbo-text">
                            <span>Over 20 Years Trading Experience.</span>
                        </h1>

                        <p>&nbsp;</p>

                        <div class="divide secondary animated slideInLeft" style="width: 15%;"></div>

                        <p>&nbsp;</p>

                        <h4 class="white-text thin uppercase">
                            <span>
                                Listed Equity
                                <span class="thin"><i class="material-icons">fiber_manual_record</i></span>
                                Treasury Bills
                                <span class="thin"><i class="material-icons">fiber_manual_record</i></span>
                                Bonds
                                <span class="thin"><i class="material-icons">fiber_manual_record</i></span>
                                Derivative Instruments
                            </span>
                        </h4>

                        <p>&nbsp;</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "TradingHeroComponent"
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
