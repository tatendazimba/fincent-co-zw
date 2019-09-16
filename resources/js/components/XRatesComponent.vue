<template>
    <div  style="background: linear-gradient(rgba(255, 255, 255, .981), rgba(255, 255, 255, .94395)), url('/images/icon.svg') no-repeat center center; background-size: cover;">

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

        <div class="row container">
            <div class="col s12 no-pad">
                <h5 class="no-margin primary-font secondary-text">
                    <strong>STAY UP TO DATE</strong>
                </h5>
                <h1 class="no-margin primary-text jumbo-text">EXCHANGE RATES</h1>
            </div>
        </div>

        <div class="row container bordered">
            <div class="col s12 no-pad">
                <div class="mobile-flex flex row no-margin primary" style="border-bottom: 1px solid #cacbcd;">
                    <div class="col s1">
                        <img class="full-width" :src="'/images/flags/ZWL.svg'">
                    </div>
                    <div class="col s1 no-pad valign-wrapper">
                        <div class="full-width center-align">
                            <strong class="flow-text">
                                ZWL
                            </strong>
                        </div>
                    </div>
                    <div class="col s5 no-pad center-align valign-wrapper">
                        <div class="full-width center-align">
                            <strong class="flow-text">
                                BUY
                            </strong>
                        </div>
                    </div>
                    <div class="col s5 no-pad center-align valign-wrapper">
                        <div class="full-width center-align">
                            <strong class="flow-text">
                                SELL
                            </strong>
                        </div>
                    </div>
                </div>
                <div v-for="currency in currencies" class="mobile-flex flex row no-margin" style="border-bottom: 1px solid #cacbcd;">
                    <div class="col s1">
                        <img class="full-width" :src="'/images/flags/' + currency.name + '.svg'">
                    </div>
                    <div class="col s1 no-pad valign-wrapper">
                        <div class="full-width center-align">
                            <strong class="flow-text">
                                {{ currency.name }}
                            </strong>
                        </div>
                    </div>
                    <div class="col s5 no-pad center-align valign-wrapper">
                        <div class="full-width center-align">
                            <strong class="flow-text">
                                <i class="material-icons red-text hide">call_received</i>
                                {{ currency.buy }}
                            </strong>
                        </div>
                    </div>
                    <div class="col s5 no-pad center-align valign-wrapper">
                        <div class="full-width center-align">
                            <strong class="flow-text">
                                <i class="material-icons green-text hide">call_made</i>
                                {{ currency.sell }}
                            </strong>
                        </div>
                    </div>
                </div>
            </div>

<!--            <div class="col s12 m7 valign-wrapper">-->
<!--                <div class="rounded white with-margin with-padding full-width">-->
<!--                    <h2>EURO - USD</h2>-->
<!--                    <h4 class="inline-block">-->
<!--                        1.11433-->
<!--                        <i class="material-icons red-text">call_received</i>-->
<!--                    </h4>-->
<!--                    <strong>-->
<!--                        -0.000000434-->
<!--                    </strong>-->

<!--                    <p>&nbsp;</p>-->
<!--                    <p>&nbsp;</p>-->
<!--                    <p>&nbsp;</p>-->
<!--                    <p>&nbsp;</p>-->
<!--                    <p>&nbsp;</p>-->
<!--                    <p>&nbsp;</p>-->
<!--                    <p>&nbsp;</p>-->
<!--                    <p>&nbsp;</p>-->
<!--                </div>-->
<!--            </div>-->
        </div>

        <p>&nbsp;</p>

        <p>&nbsp;</p>

        <div class="container">
            <a href="/exchange" class="btn-large secondary">
                Go To Bureau De Change
            </a>
        </div>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

    </div>
</template>

<script>
    export default {
        name: "XRatesComponent",
        data: function () {
            return {
                currencies: [
                    {
                        name: "USD",
                        buy: 13.167558,
                        sell: 14.2648545,
                    },
                    {
                        name: "BWP",
                        buy: 1.216023981,
                        sell: 1.317359313,
                    },
                    {
                        name: "EUR",
                        buy: 14.60018831,
                        sell: 15.81687067,
                    },
                    {
                        name: "ZAR",
                        buy: 14.1961,
                        sell: 14.9293,
                    },
                ]
            }
        }
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
