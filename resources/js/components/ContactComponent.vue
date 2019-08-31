<template>
    <div class="transparent">

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

        <div class="flex row container">
            <div class="col s12 no-pad">
                <div style="background: linear-gradient(rgba(42, 35, 76, .5), rgba(42, 35, 76, .5)), url('/images/stock/professional.jpg') no-repeat center center; background-size: cover; height: 600px;">
                </div>
            </div>
        </div>

        <p>&nbsp;</p>
        <p>&nbsp;</p>

        <div class="flex row container">
            <div class="col s12 valign-wrapper no-pad">
                <div class="center-align container" style="position: relative;">

                    <div class="container secondary-text">
                        <h3 class="primary-text">Get In Touch With Our Friendly Customer Care.</h3>
                    </div>

                    <div>
                        Subscribe to receive freebies, news & promos directly in your inbox
                    </div>

                    <p>&nbsp;</p>

                    <div class="row">
                        <div class="col s6">
                            <input class="full-width center-align" type="text" placeholder="NAME">
                        </div>
                        <div class="col s6">
                            <input class="full-width center-align" type="text" placeholder="EMAIL">
                        </div>
                    </div>

                    <div class="flex row">
                        <div class="col s12">
                            <textarea class="bordered full-width center-align" type="text" placeholder="MESSAGE" style="height: 200px;"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <div class="container">
                                <button class="secondary btn-large full-width" type="submit">SEND MESSAGE</button>
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
        name: "ContactComponent"
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
