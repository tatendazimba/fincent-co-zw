<template>
    <div class="transparent no-margin">
        <div class="flex row container">
            <div v-for="division in divisions" class="col s3 center-align shadow">
                <div v-bind:style="{ background: 'linear-gradient(to bottom, rgba(243, 110, 33, .12), rgba(42, 35, 76, .35)), url(' + division.url + ')  no-repeat center center', backgroundSize: 'cover', backgroundColor: '#cacbcd' }" style="position: relative; background-size: cover; height: 400px;">
                    <div class="" style="position: absolute; bottom: 20px; left: 0; right: 0;">
                        <h5 class="white-text">
                            <strong class>{{ division.name }}</strong>
                        </h5>

                        <div class="container">
                            <div class="container">
                                <div class="container divide primary"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
