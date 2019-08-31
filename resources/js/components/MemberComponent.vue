<template>
    <div class="transparent">

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

        <div class="row container" style="margin-bottom: 0; height: 150px; overflow: visible;">
            <div class="col s12 no-pad" style="height: 150px; overflow: visible;">
                <div style="background: linear-gradient(rgba(42, 35, 76, .5), rgba(42, 35, 76, .5)), url('/images/city/pine.jpg') no-repeat center center; background-size: cover; height: 250px;">
                </div>
            </div>
        </div>
        <div class="flex row container">
            <div class="col s12">
                <div class="flex">
                    <div class="inline-block">
                        <img class="circle" src="/images/user.png" style="height: 200px; width: 200px;">
                    </div>
                    <div class="inline-block" style="position: relative; width: calc(100% - 200px);">
                        <div class="right-padding left-padding" style="position: absolute; top: 50%; left: 0;">
                            <h5 class="no-margin">
                                <strong class="primary-text">Ranga Ranga</strong>
                            </h5>
                            <strong class="secondary-text">Fincent Capital Division</strong><br>
                            <span class="grey-text">Executive Director</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <p>&nbsp;</p>
        <p>&nbsp;</p>

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
