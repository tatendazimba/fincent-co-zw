<template>
    <div style="overflow: visible;">
        <nav-component></nav-component>
        <div class="hoverable" style="">
            <div class="no-margin valign-wrapper" style="background: linear-gradient(rgba(42, 35, 76, .5), rgba(42, 35, 76, .5)), url('/images/city/post-office.jpg') no-repeat center center; background-size: cover; height: 900px;">
                <div id="" class="flex row container">
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
