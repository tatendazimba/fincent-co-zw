<template>
    <div style="overflow: visible;">
        <nav-component></nav-component>
        <div class="hoverable" style="">
            <div class="no-margin valign-wrapper" style="background: linear-gradient(rgba(42, 35, 76, .5), rgba(42, 35, 76, .5)), url('/images/city/post-office.jpg') no-repeat center center; background-size: cover; height: 900px;">
                <div class="flex row container">
                    <div class="col s12">
                        <h1 class="white-text animated slideInLeft">
                            <span>Bureau De Change</span>
                        </h1>

                        <p>&nbsp;</p>

                        <div class="divide secondary animated slideInLeft" style="width: 15%;"></div>

                        <p>&nbsp;</p>

                        <h4 class="white-text thin uppercase">
                            <span>
                                Enjoy the Best Rates.
                            </span>
                        </h4>

                        <p>&nbsp;</p>

                    </div>

<!--                    <div class="col s12 m6 valign-wrapper">-->
<!--                        <div class="white full-width">-->

<!--                            <form class="container">-->

<!--                                <p>&nbsp;</p>-->

<!--                                <h4 class="secondary-text">Exchange Calculator</h4>-->

<!--                                <div class="col s8 no-pad">-->
<!--                                    <label>FROM</label>-->
<!--                                    <input type="text" placeholder="Amount">-->
<!--                                </div>-->

<!--                                <div class="col s4 no-pad">-->
<!--                                    <label>FROM</label>-->
<!--                                    <select class="browser-default">-->
<!--                                        <option value="">Select Currency</option>-->
<!--                                        <option v-for="currency in currencies" :value="currency">{{ currency.name }}</option>-->
<!--                                    </select>-->
<!--                                </div>-->

<!--                                <p>&nbsp;</p>-->

<!--                                <div class="col s8 no-pad">-->
<!--                                    <label>TO</label>-->
<!--                                    <input type="text" placeholder="Amount">-->
<!--                                </div>-->

<!--                                <div class="col s4 no-pad">-->
<!--                                    <label>FROM</label>-->
<!--                                    <select class="browser-default">-->
<!--                                        <option value="">Select Currency</option>-->
<!--                                        <option v-for="currency in currencies" :value="currency">{{ currency.name }}</option>-->
<!--                                    </select>-->
<!--                                </div>-->

<!--                                <p>&nbsp;</p>-->

<!--                                <div class="col s12 no-pad">-->
<!--                                    <button class="primary btn-large">Calculate</button>-->
<!--                                </div>-->

<!--                                <p>&nbsp;</p>-->

<!--                            </form>-->

<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

            <div class="">
                <div class="row container">
                    <div class="col s12">
                        <div class="">
                            <img src="/images/logos-dark/bureau-de-change.svg" style="height: 64px;">
                            <h2 class="primary-text">Bureau De Change</h2>

                            <p class="">
                                Our subsidiary Fincent Bureau De Change is a registered tier 3 Authorised Dealer with Limited Authority (ADLA); buys and sells foreign currency from individuals and institutions. We particularly trade in United States Dollars (US$), British Pounds (£), Euros (€) and South African Rands.
                            </p>
                        </div>
                    </div>
                </div>

                <p>&nbsp;</p>
                <p>&nbsp;</p>

                <div class="row container">
                    <div class="col s6">
                        <h5 class="primary-text uppercase">Limited Amount Trades</h5>

                        <p>
                            <strong>Travel Allowance</strong> <br>
                            <span>We facilitate foreign currency in cash towards travel allowances up to US$2,100 or equivalent per journey per person and US$10,000 per annum. International air tickets can also be bought under this class of transaction.</span>
                        </p>

                        <p>
                            <strong>SME Cross Border Payments</strong> <br>
                            <span>We facilitate foreign currency in cash to SMEs in the cross border or international trade business of up to US$2,000 or equivalent per transaction per day.</span>
                        </p>

                        <p>
                            <strong>Personal Payments</strong> <br>
                            <span>We facilitate foreign currency in cash to individuals for personal payments of up to US$500 or equivalent per transaction per day.</span>
                        </p>
                    </div>

                    <div class="col s6">
                        <h5 class="primary-text uppercase">Unlimited Amount Trades</h5>

                        <p>
                            <strong>Medical Payments</strong> <br>
                            <span>We facilitate foreign currency payments to international medical facilities for medical procedures for your beloved ones.</span>
                        </p>

                        <p>
                            <strong>Educational Payments</strong> <br>
                            <span>We facilitate foreign currency payments to international educational institutions for payment of school fees for your family.</span>
                        </p>

                        <p>
                            <strong>Offshore Payments</strong> <br>
                            <span>We facilitate offshore payments for individuals and institutions using our free funds to any international destinations.</span>
                        </p>
                    </div>
                </div>
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

        </div>
    </div>
</template>

<script>
    export default {
        name: "XRatesHeroComponent",
        data: function () {
            return {
                currencies: [
                    {
                        name: "USD",
                        buy: 12.4,
                        sell: 12.4,
                    },
                    {
                        name: "BWP",
                        buy: 12.4,
                        sell: 12.4,
                    },
                    {
                        name: "EUR",
                        buy: 12.4,
                        sell: 12.4,
                    },
                    {
                        name: "ZAR",
                        buy: 12.4,
                        sell: 12.4,
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
