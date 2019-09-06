<template>
    <div class="transparent">

        <div class="flex row no-margin">
            <div class="col s12 m7 l7 no-pad">
                <div style="background: linear-gradient(rgba(42, 35, 76, .5), rgba(42, 35, 76, .5)), url('/images/stock/professional.jpg') no-repeat center center; background-size: cover; height: 600px;">
                </div>
            </div>
            <div class="col s12 m5 l5 valign-wrapper secondary no-pad">
                <div class="center-align container" style="position: relative;">

                    <div style="posistion: absolute; top: 0; left: -400px;">
                        <h3>Subscribe to Our Newsletter</h3>
                    </div>

                    <div>
                        Subscribe to receive freebies, news & promos directly in your inbox
                    </div>

                    <p>&nbsp;</p>

                    <div class="flex row">
                        <div class="col s4 overflow-visible">
                            <input class="bordered full-width center-align" type="text" placeholder="NAME">
                        </div>
                        <div class="col s4">
                            <input class="bordered full-width center-align no-margin" type="text" placeholder="EMAIL">
                        </div>
                        <div class="col s4">
                            <button class="primary btn-large full-width" type="submit">SIGN UP</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "NewsletterComponent"
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
