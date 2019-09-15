<template>
    <div class="grey lighten-2 no-margin">

        <p>&nbsp;</p>
        <p>&nbsp;</p>

        <div class="row container">
            <div class="col s12 no-pad">
                <h5 class="no-margin primary-font secondary-text">
                    <strong>OUR LATEST</strong>
                </h5>
                <h1 class="no-margin primary-text jumbo-text">RESEARCH</h1>
            </div>
        </div>

        <p>&nbsp;</p>

        <div class="flex row container">
            <div v-for="division in divisions" class="col s12 m4 shadow">
                <div class="square no-margin" v-bind:style="{ background: 'linear-gradient(to bottom, rgba(243, 110, 33, .12), rgba(42, 35, 76, .35)), url(' + division.url + ')  no-repeat center center', backgroundSize: 'cover', backgroundColor: '#cacbcd' }" style="position: relative; background-size: cover; height: 400px;"></div>
                <div class="">
                    <h4 class="truncate">Better Manage Your Finances.</h4>

                    <p class="justified truncate">
                        We equip our people across the organisation to manage diversity effectively and promote an inclusive culture that creates business value...
                    </p>

                    <a href="/blog" class="btn secondary">FULL ARTICLE</a>

                    <p>&nbsp;</p>
                </div>
            </div>
        </div>

        <p>&nbsp;</p>
        <p>&nbsp;</p>

    </div>
</template>

<script>
    export default {
        name: "BlogsComponent",
        data() {
            return {
                divisions: [
                    {
                        name: "Micro Finance",
                        url: "images/stock/loan.jpg",
                    },
                    {
                        name: "Bureau De Change",
                        url: "images/stock/bank.jpg",
                    },
                    {
                        name: "Capital",
                        url: "/images/stock/stockbroking.jpg",
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
