<template>
    <div style="background: linear-gradient(rgba(255, 255, 255, .981), rgba(255, 255, 255, .94395)), url('/images/icon.svg') no-repeat center center; background-size: cover;">
        <div class="transparent">

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

            <div class="row container" style="">

                <h2 class="no-margin">Why Trade With</h2>
                <h2 class="secondary-text no-margin">
                    <strong>Fincent</strong>
                </h2>

                <p>&nbsp;</p>

                <div v-for="reason in reasons" class="col s12">
                    <div class="flex row">
                        <div class="col s12 m5">
                            <h5>
                                <span>{{ reason.title }}</span>
                            </h5>
                        </div>
                        <div class="col s12 m7">
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
                        title: "Technology",
                        description: "Our stockbroking unit has the best in-country research team which uses a technology driven research platform to predict stock movements and offer insightful tips to our clients.",
                    },
                    {
                        title: "Research & Newsletters",
                        description: "We also provide custom reports of specific sectors of the economy, specific counters or financial instruments that investors are looking at investing in. We have a database of financial data from 2009 which we can manipulate for detailed analysis of various scenarios, ratios and other reports upon request. We circulate daily bulletins to our clients on the activities in the financial markets and offer tips on stock pickings and profitable trades.",
                    },
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
