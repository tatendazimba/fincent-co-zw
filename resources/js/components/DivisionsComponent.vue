<template>
    <div class="no-margin white" style="position: relative;">

        <div class="container" style="z-index: 999;">

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

            <div id="services" class="row">
                <div class="col s12 no-pad">
                    <h5 class="no-margin primary-font secondary-text">
                        <strong>DISCOVER OUR</strong>
                    </h5>
                    <h1 class="no-margin primary-text jumbo-text">SERVICES</h1>
                </div>
            </div>

            <div class="row">
                <div v-for="division in divisions.slice(1, 4)" class="col s12 m4 no-pad shadow hoverable">
                    <div v-bind:style="{ background: 'linear-gradient(to bottom, rgba(243, 110, 33, .12), rgba(42, 35, 76, .7535)), url(' + division.image + ')  no-repeat center center', backgroundSize: 'cover', backgroundColor: '#cacbcd' }" style="position: relative; background-size: cover; height: 400px;">
                        <div class="container" style="position: absolute; bottom: 20px; left: 0; right: 0;">
                            <a :href="division.url">
                                <h3 class="white-text">
                                    <span class>{{ division.name }}</span>
                                </h3>
                            </a>

                            <div class="">
                                <div class="">
                                    <div class="divide secondary" style="width: 15%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div v-for="division in divisions.slice(0, 1)" class="col s12 no-pad shadow hoverable">
                    <div v-bind:style="{ background: 'linear-gradient(to bottom, rgba(243, 110, 33, .12), rgba(42, 35, 76, .7535)), url(' + division.image + ')  no-repeat center center', backgroundSize: 'cover', backgroundColor: '#cacbcd' }" style="position: relative; background-size: cover; height: 400px;">
                        <div class="container" style="position: absolute; bottom: 20px; left: 0; right: 0;">
                            <a :href="division.url">
                                <h3 class="white-text">
                                    <span class>{{ division.name }}</span>
                                </h3>
                            </a>

                            <div class="">
                                <div class="">
                                    <div class="divide secondary" style="width: 15%;"></div>
                                </div>
                            </div>

                            <div>
                                <p class="white-text">
                                 {{ division.description }}
                                </p>
                            </div>

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
        name: "DivisionsComponent",
        data() {
            return {
                divisions: [
                    {
                        name: "Securities Trading",
                        image: "/images/stock/stockbroking.jpg",
                        description: "We offer stockbroking services to clients who wish to trade on the Zimbabwe Stock Exchange and the Alternative Investment Markets. Our stockbroking unit has the best in-country research team which uses a technology driven research platform to predict stock movements and offer insightful tips to our clients.",
                        url: "/trading",
                    },
                    {
                        name: "Micro Finance",
                        image: "images/stock/loan.jpg",
                        url: "/micro-finance",
                    },
                    {
                        name: "Bureau De Change",
                        image: "images/stock/bank.jpg",
                        url: "/exchange",
                    },
                    {
                        name: "Corporate Advisory",
                        image: "images/stock/business-people.jpg",
                        url: "/corporate-services",
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
