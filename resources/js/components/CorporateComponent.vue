<template>
    <div class="no-margin" style="background: #ebecee;">

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

        <div class="container">
            <img src="/images/logos-dark/advisory.svg" style="height: 64px;">
            <h2 class="">Corporate Advisory</h2>

            <p class="">
                We offer corporate finance advisory services to clients participating in corporate restructuring exercises such as disposals or acquisitions of businesses, mergers, management buy-outs (MBOs), fundraising and other types of restructuring exercises.
            </p>
        </div>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
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
                categories: [
                    {
                        name: "Micro Finance",
                        url: "images/people/watch.jpg",
                    },
                    {
                        name: "Bureau De Change",
                        url: "images/people/two-women-man.jpg",
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
