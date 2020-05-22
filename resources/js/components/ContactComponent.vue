<template>
    <div class="transparent">

        <nav-component></nav-component>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

        <div class="flex row container">
            <div class="col s12 no-pad">
                <div class="valign-wrapper" style="background: linear-gradient(rgba(42, 35, 76, .5), rgba(42, 35, 76, .5)), url('/images/stock/professional.jpg') no-repeat center center; background-size: cover; height: 400px;">
                    <div class="container white-text">
                        <h5 class="white-text">
                            <span>Fincent Capital</span>
                        </h5>
                        <p>10 Londonderry Avenue</p>
                        <p>Eastlea</p>
                        <p>Harare, Zimbabwe</p>

                        <p>&nbsp;</p>

                        <p>
                            <span class="primary-font white-text">PHONE: </span>
                            <span class="white-text">&nbsp; +263 (242) 255 321-4 &nbsp;</span>
                        </p>

                        <p>
                            <span class="primary-font white-text">EMAIL: </span>
                            <span class="white-text">&nbsp; info@fincent.co.zw &nbsp;</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <p>&nbsp;</p>
        <p>&nbsp;</p>

        <div class="flex row container">
            <div class="col s12 valign-wrapper no-pad">
                <form v-on:submit.prevent="sendEmail()" action="" method="" class="center-align container" style="position: relative;">

                    <div class="container secondary-text">
                        <h3 class="primary-text">Get In Touch With Our Friendly Customer Care.</h3>
                    </div>

                    <p>&nbsp;</p>

                    <div class="row">
                        <div class="col s6">
                            <input class="full-width center-align" type="text" v-model="name" placeholder="NAME" required>
                        </div>
                        <div class="col s6">
                            <input class="full-width center-align" type="email" v-model="email" placeholder="EMAIL" required>
                        </div>
                    </div>

                    <div class="flex row">
                        <div class="col s12">
                            <textarea class="bordered full-width center-align" type="text" v-model="message" placeholder="MESSAGE" style="height: 200px;" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <div class="container">
                                <div>
                                    <strong>
                                        <span v-show="error">ERROR: </span> {{ response }}
                                    </strong>
                                </div>
                                <button class="secondary btn-large full-width" type="submit" :disabled="loading">
                                    {{ loading ? 'Sending...' : 'Send Message' }}
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

    </div>
</template>

<script>
    import {BASE_URL} from "../config";

    export default {
        name: "ContactComponent",
        data() {
            return {
                name: "",
                email: "",
                message: "",
                response: "",
                loading: false,
                error: false,
            }
        },
        methods: {
            sendEmail: function() {
                this.loading = true;
                this.error = false;
                this.response = "";

                const self = this;

                axios.post(BASE_URL + "email", {
                        name: this.name,
                        email: this.email,
                        message: this.message,
                    })
                    .then((response) => {

                        if (response.data.code === "00") {
                            this.response = response.data.description;
                            this.name = "";
                            this.email = "";
                            this.message = "";
                        } else {
                            this.error = false;
                            this.response = response.data.description;
                        }
                    })
                    .catch((error) => {
                        this.error = error.response.data.message;
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
