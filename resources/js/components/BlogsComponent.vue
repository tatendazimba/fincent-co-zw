<template>
    <div class="grey lighten-2 no-margin">

        <p>&nbsp;</p>
        <p>&nbsp;</p>

        <div class="container row">
            <div class="col s12 center-align">
                <h2>Latest From Our Blog</h2>
            </div>
        </div>

        <p>&nbsp;</p>

        <div class="flex row container">
            <div v-for="division in divisions" class="col s3 shadow">
                <div class="square no-margin" v-bind:style="{ background: 'linear-gradient(to bottom, rgba(243, 110, 33, .12), rgba(42, 35, 76, .35)), url(' + division.url + ')  no-repeat center center', backgroundSize: 'cover', backgroundColor: '#cacbcd' }" style="position: relative; background-size: cover; height: 400px;"></div>
                <div class="">
                    <h4>Better Manage Your Finances.</h4>

                    <span class="primary-font">By <span class="primary-text">Ranga Makwata</span> <span class="secondary-text right">23 August 2019</span></span>

                    <p class="justified primary-font">
                        We equip our people across the organisation to manage diversity effectively and promote an inclusive culture that creates business value...
                    </p>

                    <button class="btn secondary">READ More</button>

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
