<template>
    <div>
        <div class="row">
            <div class="col s12">
                <form v-on:submit.prevent="processTransaction()" action="" method="POST">
                    <div class="row">

                        <h2>Step 1</h2>

                        <p>&nbsp;</p>

                        <h5 class="secondary-text">AMOUNT</h5>
                        <div class="col s12 jumbo">
                            <input @input="calculate()" class="inline-block" type="text" v-model="amount" name="buy" style="width: auto !important;" required>
                            <h4 class="grey-text inline-block">{{ from }}</h4>

                            <br>

                            <div class="inline-block cursor-click center-align" :class="from === rate_from ? 'bordered' : ''" v-on:click.prevent="selectFrom(rate_from)" v-for="rate_from of fromCurrencies" style="padding: 0 5px;">
                                <img :src="'/images/flags/' + rate_from + '.svg'" style="height: 36px; padding: 0 2px;">

                                <br>

                                <span>{{ rate_from }}</span>
                            </div>

                        </div>


                        <p>&nbsp;</p
                        <p>&nbsp;</p>


                        <div class="col s12">
                            <table class="">
                                <tbody>
                                <tr style="border: none;">
                                    <td>
                                        <h5 class="secondary-text">BUY PRICE</h5>
                                        <div class="jumbo">
                                            <input class="inline-block" type="text" placeholder="0.00" v-model="buyPrice" style="width: auto !important;" required>
                                            <h4 class="grey-text inline-block">{{ to }}</h4>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="border: none;">
                                    <td>
                                        <h5 class="secondary-text">SELL PRICE</h5>
                                        <div class="jumbo">
                                            <input class="inline-block" type="text" placeholder="0.00" v-model="sellPrice" style="width: auto !important;" required>
                                            <h4 class="grey-text inline-block">{{ to }}</h4>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <div class="inline-block cursor-click center-align" :class="to === rate._to ? 'bordered' : ''" v-on:click.prevent="selectTo(rate._to)" v-for="rate of toCurrencies" style="padding: 0 5px;">
                                <img :src="'/images/flags/' + rate._to + '.svg'" style="height: 36px; padding: 0 2px;">

                                <br>

                                <span>{{ rate._to }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <h2>Step 2</h2>

                        <p>&nbsp;</p>

                        <h5 class="secondary-text">CUSTOMER</h5>
                        <div class="col s12 jumbo">
                            <select id="customer" class="browser-default" v-model="customer">
                                <option value="">Select</option>
                                <option v-for="customer of customers" :value="customer">{{ customer.mobile }} {{ customer.surname }} {{ customer.name }} {{ customer.id_number }} {{ customer.address }} {{ customer.company }}</option>
                            </select>
                        </div>

                        <p>&nbsp;</p>

                    </div>

                    <div class="row">

                        <h2>Step 3</h2>

                        <p>&nbsp;</p>

                        <h5 class="secondary-text">PURPOSE</h5>
                        <div class="col s12 jumbo">
                            <div class="col s12 jumbo">
                                <select id="reason" class="browser-default" v-model="purpose" required>
                                    <option value="">Purpose</option>
                                    <option v-for="purpose of purposes" :value="purpose">{{ purpose }}</option>
                                </select>
                            </div>
                        </div>


                        <p>&nbsp;</p>
                        <p>&nbsp;</p>

                        <div class="col s12">
                            <h4 class="thin">Customer is: </h4>
                            <a href="#" v-on:click.prevent="setTransactionType('BUYING')" :class="transactionType === 'BUYING' ? 'secondary white-text' : 'primary-text'" class="btn bordered transparent">BUYING</a>
                            <a href="#" v-on:click.prevent="setTransactionType('SELLING')" :class="transactionType === 'SELLING' ? 'secondary white-text' : 'primary-text'" class="btn bordered transparent">SELLING</a>
                        </div>
                    </div>


                    <div class="row">
                        <p>&nbsp;</p>

                        <div class="col s12">
                            <strong class="red-text">{{ error }}</strong> <br>
                            <button type="submit" class="btn-large primary">
                                Next Step
                                <i class="material-icons">arrow_forward</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    import {BASE_URL} from "../config";

    export default {
        name: "CalculateComponent",
        data: function () {
            return {
                loading: false,
                error: "",
                transactionType: "",
                rates: [],
                customers: [],
                purposes: [
                    "Cross Border",
                    "DSTV",
                    "Medical Bill",
                    "School Fees",
                    "Travel Allowance",
                    "Business Travel",
                    "Other",
                ],
                purpose: "",
                currencies: [],
                amount: "0.00",
                customer: {},
                from: "",
                to: "USD",
                toCurrencies: [],
                fromCurrencies: [],
                rate: {},
                buyPrice: 0,
                sellPrice: 0,
            }
        },
        mounted() {
            this.getRates();
        },
        methods: {
            processTransaction: function() {

                // build payload
                const payload = {
                    to: this.to,
                    from: this.from,
                    from_amount: this.amount,
                    to_amount: this.transactionType === "BUYING" ? this.buyPrice : this.sellPrice,
                    rate: this.transactionType === "BUYING" ? this.search().buy : this.search().sell,
                    amount: this.amount,
                    purpose: this.purpose,
                    type: this.transactionType,
                    rate_id: this.search().id,
                };

                this.loading = true;
                this.error = "";

                const self = this;

                axios.post(BASE_URL + "transaction", payload)
                    .then((response) => {

                        if (response.data.code === "00") {
                            window.location = '/admin/pdf/receipt/' + response.data.results[0].id;
                            window.location = '/admin/reports' + response.data.results[0].id;
                        } else {
                            this.error = response.data.friendly;
                        }
                    })
                    .catch((error) => {
                        this.error = this.error ? this.error : "Oops. Something went wrong. Please try again";
                    })
                    .finally((_) => {
                        this.loading = false;
                    });

            },
            setTransactionType(type) {
                this.transactionType = type;
            },
            findCustomer: function() {},
            calculate: function() {
                const rate = this.rates.find(rate => (rate._from === this.from && rate._to === this.to));

                // forward processing
                this.buyPrice = this.amount * rate.buy;
                this.sellPrice = this.amount * rate.sell;
            },
            search: function(from = this.from, to = this.to) {
                return this.rates.find(rate => (rate._from === from && rate._to === to));
            },
            selectFrom(from) {
                this.from = from;

                // loop through rates
                this.toCurrencies = [];

                this.rates.forEach((rate) => {
                    if (this.from === rate._from)
                        this.toCurrencies.push(rate);
                });

                this.to = this.toCurrencies[0]._to;

                this.calculate();

            },
            selectTo(to) {
                this.to = to;

                this.calculate();

            },
            getRates: function () {

                this.loading = true;
                this.error = "";

                const self = this;

                axios.get(BASE_URL + "xrates")
                    .then((response) => {
                        if (response.data.code === "00") {
                            this.rates = response.data.results;

                            this.rates.forEach(rate => {
                               if (!this.fromCurrencies.includes(rate._from))
                                   this.fromCurrencies.push(rate._from);
                            });

                            this.selectFrom(this.rates[0] ? this.rates[0]._from : "");

                        } else {
                            this.error = response.data.friendly;
                        }
                    })
                    .catch((error) => {
                        // if (error.response.data.errors) {
                        //     Object.keys(error.response.data.errors).forEach((value) => {
                        //         this.error += (error.response.data.errors[value] + "\n");
                        //     })
                        // }

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
