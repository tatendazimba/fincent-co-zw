<template>
    <div class="grey lighten-2 no-margin">

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

        <div class="flex row">
            <div class="col s12 m3 l2">
                <div class="container">

                    <img src="/images/icon.svg" style="height: 32px;">
                    <h4 class="no-margin secondary-font secondary-text">
                        <strong>Loan Products</strong>
                    </h4>
                    <p class="justified">
                        We offer micro credit products to clients who wish to finance a funding gap.
                    </p>
                </div>
            </div>
            <div v-for="category in categories.slice(0, 1)" class="col s12 m4 l4 shadow valign-wrapper">
                <div class="full-height"  v-bind:style="{ background: 'linear-gradient(to bottom, rgba(255, 255, 255, .12), rgba(42, 35, 76, .735)), url(' + category.url + ')  no-repeat center center', backgroundSize: 'cover', backgroundColor: '#cacbcd' }" style="position: relative; background-size: cover; height: 400px;">
                    <div class="container">

                        <p>&nbsp;</p>
                        <p>&nbsp;</p>

                        <h3 class="white-text">
                            <strong>PayDay Loans</strong>
                        </h3>

                        <p class="justifed white-text">
                            Under this arrangement, Fincent signs a deduction at source agreement with employers particularly in the NGO and mining sector. Employees covered by such agreements can access 30 – 90 day loans from Fincent at competitive rates.
                        </p>

                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                    </div>
                </div>
            </div>
            <div v-for="category in categories.slice(1, 2)" class="col s12 m5 l6 shadow valign-wrapper">
                <div class="full-height"  v-bind:style="{ background: 'linear-gradient(to bottom, rgba(255, 255, 255, .735), rgba(255, 255, 255, .735)), url(' + category.url + ')  no-repeat center center', backgroundSize: 'cover', backgroundColor: '#cacbcd' }" style="position: relative; background-size: cover; height: 400px;">
                    <div class="container">
                        <p>&nbsp;</p>
                        <h3>
                            <strong class="">Script Backed Credit Instruments</strong>
                        </h3>

                        <p class="justified">
                            Fincent can extend a loan of up to 70% the value of your listed blue-chip equities portfolio. The script is held in trust during the tenure of the loan and at maturity the security holder has the option to repay the loan or sell the stock to Fincent at the full value of the script on the day of lending.
                        </p>

                        <p>&nbsp;</p>

                        <h3>
                            <strong class="">Currency Backed Loans</strong>
                        </h3>

                        <p class="justified">
                            Fincent can extend a loan of up to 70% the value of your foreign currency especially United States Dollars, British Pounds or South African Rands. The currency is held in trust during the tenure of the loan and at maturity the security holder has the option to repay the loan or sell the currency to Fincent via Fincent Bureau De Change at the exchange rates applicable on maturity day.
                        </p>

                        <p>&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

    </div>
</template>

<script>
    export default {
        name: "LoansComponent",
        data() {
            return {
                categories: [
                    {
                        name: "Micro Finance",
                        url: "images/people/watch.jpg",
                    },
                    {
                        name: "Bureau De Change",
                        url: "images/people/two-women-man.jpg",
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
