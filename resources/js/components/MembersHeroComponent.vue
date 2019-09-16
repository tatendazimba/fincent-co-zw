<template>
    <div style="overflow: visible;">
        <nav-component></nav-component>
        <div class="hoverable" style="">
            <div class="no-margin" style="background: linear-gradient(rgba(42, 35, 76, .5), rgba(42, 35, 76, .5)), url('/images/people/woman.jpg') no-repeat center center fixed; background-size: cover;">
                <div id="" class="row container">
                    <div class="col s12 center-align">

                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>

                        <h1 class="white-text animated zoomIn no-margin">
                            <span>Exclusive Member Content</span>
                        </h1>

                        <p>&nbsp;</p>

                        <div class="divide secondary animated animated zoomIn centered" style="width: 15%;"></div>

                        <p>&nbsp;</p>

                    </div>
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
