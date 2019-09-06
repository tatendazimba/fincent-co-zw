<template>
    <div style="overflow: visible;">
        <nav-component></nav-component>
        <div class="" style="height: 700px; overflow: visible;">
            <div class="no-margin valign-wrapper" style="background: linear-gradient(rgba(42, 35, 76, .5), rgba(42, 35, 76, .5)), url('/images/totem/elephant.jpg') no-repeat center center; background-size: cover; height: 900px;">
                <div id="" class="container">
                    <div class="center-align container">
                        <h2 class="white-text secondary-font">
                            <strong>At the Centre of Finance.</strong>
                        </h2>

                        <hr>

                        <h5 class="white-text">
                            <span>At the Centre of Finance.</span>
                        </h5>

                        <div class="center-align top-margin">
                            <button class="white btn-large right-small-margin">
                                View Our Services
                            </button>

                            &nbsp;&nbsp;&nbsp;

                            <button class="secondary btn-large left-small-margin">
                                View Our Services
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "HeroComponent"
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
