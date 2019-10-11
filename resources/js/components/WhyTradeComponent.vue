<template>
    <div style="background: linear-gradient(rgba(255, 255, 255, .981), rgba(255, 255, 255, .94395)), url('/images/icon.svg') no-repeat center center; background-size: cover;">
        <div class="transparent">

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

            <div class="container">
                <img src="/images/logos-dark/securities.svg" style="height: 64px;">
                <h2 class="primary-text">Securities Trading</h2>

                <p class="">
                    Our brokerage division execute transactions on behalf of our clients across the equity and fixed income markets in the country.
                </p>

            </div>

            <p>&nbsp;</p>

            <div class="row container" style="">

                <h3 class="primary-text">Why Trade With Us?</h3>

                <p>&nbsp;</p>

                <div v-for="reason in reasons" class="col s12">
                    <div class="flex row">
                        <div class="col s12 m5 no-pad">
                            <h5>
                                <strong class="uppercase primary-font secondary-text">{{ reason.title }}</strong>
                            </h5>
                        </div>
                        <div class="col s12 m7 no-pad">
                            <p class="justified">
                                {{ reason.description     }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

        </div>
    </div>
</template>

<script>
    export default {
        name: "WhyTradeComponent",
        data() {
            return {
                reasons: [
                    {
                        title: "Equity Trading",
                        description: "Fincent Securities (Pvt) Ltd provides local and foreign investors access to the listed stocks on the Zimbabwe Stock Exchange  (ZSE) and Alternative Trading Platform, FINSEC. Our equity operations are handled by highly qualified sales and trading teams. We buy and sell shares on your behalf on the ZSE. Our execution services are bespoke towards clients who:\n" +
                            "require advice on the intrinsic worth of transactions from time to time,\n" +
                            "require investment information on which to base their decision making.\n" +
                            "We also offer guidance on the best way in which to work orders in the market particularly in relation to large transactions and illiquid counters. This service is important to a diverse range of clients including both local (institutional fund managers, parastatals, corporates) and foreign institutional investors as well as high net worth and retail clients.",
                    },
                    {
                        title: "Fixed Income",
                        description: "The fixed income desk executes transactions on the fixed income markets on behalf of our clients trading for both corporate and government issues. Our team stands ready to offer our clientele the option of taking part in the primary issuance and secondary trading of the following:\n" +
                            "      • Government bonds\n" +
                            "      • Treasury bills (T-Bills)\n" +
                            "      • Corporate bonds\n",
                    },
                    {
                        title: "Research",
                        description: "At the core of our value proposition and the factor to separate us from others is research expertise. Research has to be independent, incisive and helpful to the client in investment decision making. Fincent Securities has a robust in-house research team which offers our clients access to a wealth of research, news and market information. Our team generates a suite of comprehensive reports to provide our clients with the basis needed to help shape their investment decisions. Our research encompasses all key blocks of analysis including macroeconomic, fundamental, and technical as well as quantitative analysis.",
                    }
                ]
            }
        }
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
