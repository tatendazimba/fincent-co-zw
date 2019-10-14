<template>
    <div class="no-margin" style="background: #ebecee;">

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

        <div class="container">
            <img src="/images/logos-dark/micro-finance.svg" style="height: 64px;">
            <h2 class="">Fincent Finance</h2>

            <p class="justified">
                Fincent Finance is a registered credit-only MFI offering unsecured and secured microfinance products. The company started trading in 2019.
            </p>
        </div>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

        <div class="flex row container">
            <div class="col s12 m3 l2 no-pad">
                <div class="">

                    <h4 class="no-margin secondary-font secondary-text">
                        <strong>Loans</strong>
                    </h4>
                    <p class="right-margin">
                        We offer micro credit products to clients who wish to finance a funding gap.
                    </p>
                </div>
            </div>
            <div v-for="category in categories.slice(0, 1)" class="col s12 m5 l6 no-pad shadow valign-wrapper">
                <div class="full-height"  v-bind:style="{ background: 'linear-gradient(to bottom, rgba(255, 255, 255, .12), rgba(42, 35, 76, .735)), url(' + category.url + ')  no-repeat center center', backgroundSize: 'cover', backgroundColor: '#cacbcd' }" style="position: relative; background-size: cover; height: 400px;">
                    <div class="container white-text">
                        <p>&nbsp;</p>

                        <h3>
                            <strong class="white-text">Payroll Deduction Loans</strong>
                        </h3>

                        <p class="justified">
                            Under this arrangement, Fincent signs a Payroll Deduction Agreement with employers. Employees covered by such agreements can access 30 – 180 day loans from Fincent at competitive rates. The maximum loan amount depends on the net pay and maximum loan repayment limit agreed by both parties (generally 50% maximum repayment limit is applied). Loans are disbursed within 24 hours from application and clients receive their funds in their bank account or on Ecocash mobile money wallet. Loan can be topped-up or rolled over subject to clients meeting refinancing criteria.
                        </p>

                        <p>&nbsp;</p>

                        <h3>
                            <strong class="white-text">SME Loans</strong>
                        </h3>

                        <p class="justified">
                            Small to Medium Enterprises (SMEs) can access loans on the back of contractual agreements and cashflow positive business models. Key elements in small businesses’ ability to access these loans are:

                        <ul>
                            <li><i class='material-icons secondary-text'>chevron_right</i>Proven track record in the respective trades;</li>
                            <li><i class='material-icons secondary-text'>chevron_right</i>Evidence of positive future cash flows;</li>
                            <li><i class='material-icons secondary-text'>chevron_right</i>Good management practices such as bookkeeping, board meetings, etc.</li>
                        </ul>

                        SMEs can access 30 – 365 day loans from Fincent at competitive industry rates.

                        </p>

                        <p>&nbsp;</p>
                    </div>
                </div>
            </div>
            <div v-for="category in categories.slice(1, 2)" class="col s12 m4 l4 shadow valign-wrapper">
                <div class="full-height"  v-bind:style="{ background: 'linear-gradient(to bottom, rgba(255, 255, 255, .735), rgba(255, 255, 255, .735)), url(' + category.url + ')  no-repeat center center', backgroundSize: 'cover', backgroundColor: '#cacbcd' }" style="position: relative; background-size: cover; height: 400px;">
                    <div class="container">

                        <p>&nbsp;</p>

                        <h3 class="">
                            <strong>Margin Lending</strong>
                        </h3>

                        <p class="justified">
                            A margin loan is a credit product that lets clients borrow money to invest and borrows against shares, currency or other managed funds used as security. The amount a client can borrow is based on the client’s financial position as well as the allowable Loan to Value Ratio (LVR) of a clients’ existing portfolio, being shares, currency or other approved managed funds. A maximum LVR of 70% is allowable depending on the quality of the security. For use of currency as security only easily convertible currencies such as United States Dollars, British Pounds, Euros or South  African Rands etc are encouraged.
                        </p>

                        <p>&nbsp;</p>
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

        <div class="flex row no-margin" style="background: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url('/images/people/whiteboard.jpg') no-repeat top left; background-size: contain;">
            <div class="col s12 m4 shadow valign-wrapper">
            </div>
            <div class="col s12 m8 shadow valign-wrapper">
                <div class="full-height">
                    <div class="container">

                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>

                        <h3 class="">
                            <strong>A Credit Product That Perfectly Fits Your Needs.</strong>
                        </h3>

                        <p class="justifed">
                            If you have unique needs and require a custom loan product, get in touch with our credit team so they design terms that work for you.
                        </p>

                        <p>&nbsp;</p>

                        <a class="btn-large secondary" href="/contact">
                            Contact Credit Team
                        </a>

                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>
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
