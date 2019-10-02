<template>
    <div  style="background: linear-gradient(rgba(255, 255, 255, .981), rgba(255, 255, 255, .94395)), url('/images/icon.svg') no-repeat center center; background-size: cover;">

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

        <div class="row container">
            <div class="col s12 no-pad">
                <h5 class="no-margin primary-font secondary-text">
                    <strong>STAY UP TO DATE</strong>
                </h5>
                <h1 class="no-margin primary-text jumbo-text">EXCHANGE RATES</h1>
            </div>
        </div>

        <div class="row container">

            <p>&nbsp;</p>

            <table class=" highlight primary-font">
                <thead>
                    <tr>
                        <th></th>
                        <th class="">
                            <strong class="flow-text">FROM</strong>
                        </th>
                        <th class="">
                            <strong class="flow-text">TO</strong>
                        </th>
                        <th class="grey lighten-2 right-align">
                            <strong class="flow-text">BUY</strong>
                        </th>
                        <th class="grey lighten-2 right-align">
                            <strong class="flow-text">SELL</strong>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="currency in currencies" class="flow-text primary-font">
                        <td>
                            <img class="" :src="'/images/flags/' + currency._from + '.svg'" style="height: 48px;">

                            <img class="" :src="'/images/flags/' + currency._to + '.svg'" style="height: 48px;">
                        </td>
                        <td>
                            <span  class="flow-text grey-text">{{ currency._from}}</span>
                        </td>
                        <td>
                            <span  class="flow-text grey-text">{{ currency._to }}</span>
                        </td>
                        <td class="grey lighten-2 right-align">
                            <span class="flow-text primary-text">{{ currency.buy }}</span>
                        </td>
                        <td class="grey lighten-2 right-align ">
                            <span class="flow-text primary-text">{{ currency.sell }}</span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <span class="grey-text uppercase primary-font">Last updated {{ currencies[0].updated_at }}</span>
        </div>

        <p>&nbsp;</p>

        <p>&nbsp;</p>

        <div class="container">
            <a href="/exchange" class="btn-large secondary">
                Go To Bureau De Change
            </a>
        </div>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

    </div>
</template>

<script>
    import {BASE_URL} from "../config";

    export default {
        name: "XRatesComponent",
        data: function () {
            return {
                loading: false,
                error: "",
                currencies: []
            }
        },
        mounted() {
            this.getRates();

            setInterval(_ => {
                this.getRates();
            }, 5000);
        },
        methods: {
            getRates: function () {

                this.loading = true;
                this.error = "";

                const self = this;

                axios.get(BASE_URL + "xrates")
                    .then((response) => {

                        console.log("response: ", response);

                        if (response.data.code === "00") {
                            this.currencies = response.data.results;
                        } else {
                            this.error = response.data.friendly;
                        }
                    })
                    .catch((error) => {
                        if (error.response.data.errors) {
                            Object.keys(error.response.data.errors).forEach((value) => {
                                this.error += (error.response.data.errors[value] + "\n");
                            })
                        }

                        this.error = this.error ? this.error : "Oops. Something went wrong. Please try again";
                    })
                    .finally((_) => {
                        this.loading = false;
                    });
            }
        }
    }
</script>

<style scoped>
    .dark {
        background: #2a234c !important;
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
