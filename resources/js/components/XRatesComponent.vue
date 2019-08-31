<template>
    <div class="flex row dark">
        <div class="col s12 m1 valign-wrapper center-align">
            <div class="full-width center-align">
                <div class="darker full-height menu-column row centered">
                    <div v-for="menu in [1, 1, 1, 1, 1]" class="col s12 center-align valign-wrapper" style="height: 150px;">
                        <img class="full-width" src="/svg/icons/home.svg">
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <h3 class="white-text">Exchange Rates</h3>

            <p>&nbsp;</p>

            <div v-for="rate in [1, 1, 1, 1, 1]">
                <div class="flex row darker rounded with-small-padding">
                    <div class="col s2">
                        <div class="square no-margin dusk rounded"></div>
                    </div>
                    <div class="col s10 valign-wrapper">
                        <h5 class="white-text no-margin full-width">
                            <strong>EURO - USD</strong>
                            <i class="material-icons green-text right">call_made</i>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m7 valign-wrapper">
            <div class="rounded white with-margin with-padding full-width">
                <h2>EURO - USD</h2>
                <h4 class="inline-block">
                    1.11433
                    <i class="material-icons red-text">call_received</i>
                </h4>
                <strong>
                    -0.000000434
                </strong>

                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "XRatesComponent"
    }
</script>

<style scoped>
    .dark {
        background: #2a234c !important;
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
