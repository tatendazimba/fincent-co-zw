<template>
    <div class="no-margin white"  style="background: linear-gradient(rgba(42, 35, 76, .365), rgba(42, 35, 76, .6395)), url('/images/city/angwa.jpg') no-repeat center center fixed; background-size: cover;">

        <div class="container" style="z-index: 999;">

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

            <div class="flex row">
                <div class="col s12 m4 no-pad">
                    <div class="container">
                        <h1 class="no-margin secondary-text">
                            <span>BUYING</span>
                        </h1>
                        <h1 class="no-margin secondary-text"><span class="white-text">&</span> SELLING</h1>
                    </div>
                </div>
                <div class="col s12 m8 no-pad">
                    <div class="container">
                        <h2 class="no-margin">
                            <strong class="primary-font white-text uppercase">
                                Securities Trading with the best
                            </strong>
                        </h2>

                        <h5 class="justified secondary-font white-text">
                            With over 20 years of combined trading experience on the local Zimbabwean markets picking the securities which earn our clients good returns both in the short and long term, we offer stockbroking services to clients who wish to trade on the Zimbabwe Stock Exchange and the Alternative Investment Markets.
                        </h5>

                        <p>&nbsp;</p>

                        <a href="/trading" class="btn-large white">
                            Go To Trading Page
                        </a>
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
    </div>
</template>

<script>
    export default {
        name: "TradingComponent",
        data() {
            return {
                divisions: [
                    {
                        name: "Securities Trading",
                        url: "/images/stock/stockbroking.jpg",
                    },
                    {
                        name: "Micro Finance",
                        url: "images/stock/loan.jpg",
                    },
                    {
                        name: "Bureau De Change",
                        url: "images/stock/bank.jpg",
                    },
                    {
                        name: "Corporate Services",
                        url: "images/stock/business-people.jpg",
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
