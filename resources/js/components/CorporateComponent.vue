<template>
    <div class="no-margin" style="background: #ebecee;">

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

        <div class="container">
            <img src="/images/logos-dark/advisory.svg" style="height: 64px;">
            <h2 class="">Corporate Advisory</h2>

            <p class="">
                Fincent Advisory Partners is an investment banking firm doing business for a diverse clientele including but not limited to government, municipalities, parastatals, pension funds and large to medium-sized public and private companies.
            </p>

            <p>&nbsp;</p>

            <div v-for="activity in activities" class="">
                <div class="row">
                    <div class="col s12 no-pad">
                        <span>
                            <strong class="uppercase primary-font secondary-text">{{ activity.title }}</strong>
                        </span>
                    </div>
                    <div class="col s12 no-pad">
                        <p class="justified" v-html="activity.description">
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

        <div class="flex row no-margin" style="background: linear-gradient(rgba(42, 35, 76, .5), rgba(42, 35, 76, .5)), url('/images/totem/together.jpg') no-repeat top left; background-size: cover;">
            <div class="col s12 m4 shadow valign-wrapper">
            </div>
            <div class="col s12 m8 shadow valign-wrapper">
                <div class="full-height">
                    <div class="container">

                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>

                        <h2 class="white-text">
                            <strong>Creating Wealth. Together.</strong>
                        </h2>

                        <p class="white-text">
                            Please get in touch with our Executive Team for corporate finance advisory services.
                        </p>

                        <p>&nbsp;</p>

                        <a class="btn-large secondary" href="/leadership">
                            Contact Excutive Team
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
        name: "CorporateComponent",
        data() {
            return {
                activities: [
                    {
                        title: "​Capital raising",
                        description: " Initial public offers, equity issues and private placements"
                    },
                    {
                        title: "Corporate finance",
                        description: "Mergers and acquisitions, disposals, leveraged transactions and management buy-outs and buy-ins"
                    },
                    {
                        title: "Advisory services",
                        description: "Restructuring, project evaluation and valuations"
                    },
                    {
                        title: "Privatisation",
                        description: "Acquisitor sourcing, transaction management and funding"
                    },
                    {
                        title: "Debt issuance",
                        description: "Debt issuance programmes, market-making and debt placement"
                    },
                    {
                        title: "Debt restructuring",
                        description: "Loan portfolio cost and risk reduction"
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
