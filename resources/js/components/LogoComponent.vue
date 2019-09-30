<template>
    <a href="/" class="brand-logo valign-wrapper full-height left" style="opacity: .9498;">
        <img class="ignore" :src="'/images/' + image" style="height: 64px !important; padding: 0 20px;">
    </a>
</template>

<script>

    export default {
        name: "LogoComponent",
        data: function(){
            return {
                route: "",
                image: "",
            }
        },
        mounted() {
            const route = window.location.pathname;

            console.log("route: ", route);

            if (route === "/")
                this.image = "capital.svg";
            else if (route === "/micro-finance")
                this.image = "micro-finance.svg";
            else if (route === "/trading")
                this.image = "securities.svg";
            else if (route === "/exchange")
                this.image = "bureau-de-change.svg";
            else
                this.image = "capital.svg";
        }
    }
</script>

<style>
    li a {
        font-size: 1.3rem !important;
    }
</style>
