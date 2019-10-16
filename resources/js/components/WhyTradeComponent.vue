<template>
    <div style="background: linear-gradient(rgba(255, 255, 255, .981), rgba(255, 255, 255, .94395)), url('/images/icon.svg') no-repeat center center; background-size: cover;">
        <div class="transparent">

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

            <div class="container">
                <div class="row">
                    <div class="col s12 m8 no-pad">
                        <img src="/images/logos-dark/securities.svg" style="height: 64px;">
                        <h2 class="primary-text">Securities Trading</h2>

                        <div class="justified">
                            Our brokerage division executes transactions on behalf of our clients across the equity and fixed income markets in the country.

                            <br><br>

                            <h5 class="primary-font uppercase secondary-text no-margin">Our Philosophy</h5>

                            <p class="justified">The market we play in is very volatile with each day bringing unique challenges mostly driven by policy inconsistence and unstable monetary developments giving rise to recurrent inflation and currency changes. To succeed we believe it is important for us to be proactive and actively seek ways to capitalise on the opportunities brought by the inefficiencies. Our philosophy is centred on anticipating changes and triggers for policy shifts from those in authority. We have an extensive network and traceable experience in research which we will leverage to provide our clients with timeous services. We have an advantage of being nimble and entrepreneurial in our approach meaning decision making will be quick while emphasising the need for us to continue to innovate and improve our processes.</p>

                            Our traders will always execute trades in the best interests of our clients, in a price-sensitive and confidential manner.

                            <p>&nbsp;</p>

                            <h5 class="primary-font uppercase secondary-text no-margin">Client relationships</h5>

                            <p class="justified">We exist to create wealth for our clients and all our stakeholders including our team, shareholders and community. Our relationships with our clients are underpinned by trust, and service excellence. We decode our clients’ unique needs into robust investment outcomes through world class securities trading services.</p>


                        </div>
                    </div>
                    <div class="col s12 m4 no-pad">

                        <p class="hide-on-med-and-up">&nbsp;</p>

                        <div class="container">
                            <div class="bordered with-padding">
                                <div class="">
                                    <h4 class="primary-text no-margin">Securities Trading Forms</h4>

                                    <p>
                                        <a target="_blank" class="secondary-text primary-font uppercase" href="/fincent-account.pdf">
                                            <i class='material-icons primary-text'>chevron_right</i>Account Opening Form
                                        </a>
                                    </p>

                                    <p>
                                        <a target="_blank" class="secondary-text primary-font uppercase" href="/fincent-buy-form.pdf">
                                            <i class='material-icons primary-text'>chevron_right</i>Buying Form
                                        </a>
                                    </p>

                                    <p>
                                        <a target="_blank" class="secondary-text primary-font uppercase" href="/fincent-sell-form.pdf">
                                            <i class='material-icons primary-text'>chevron_right</i>Selling Form
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <p>&nbsp;</p>

            <div class="row container" style="">

                <h3 class="primary-text">Our services include:</h3>

                <p>&nbsp;</p>

                <div v-for="reason in reasons" class="col s12">
                    <div class="flex row">
                        <div class="col s12 m5 no-pad">
                            <h5>
                                <strong class="uppercase primary-font secondary-text">{{ reason.title }}</strong>
                            </h5>
                        </div>
                        <div class="col s12 m7 no-pad">
                            <p class="justified" v-html="reason.description">
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

        </div>
    </div>
</template>

<script>
    export default {
        name: "WhyTradeComponent",
        data() {
            return {
                reasons: [
                    {
                        title: "Equity Trading",
                        description: "Fincent Securities (Pvt) Ltd provides local and foreign investors access to the listed stocks on the Zimbabwe Stock Exchange  (ZSE) and Alternative Trading Platform, FINSEC. Our equity operations are handled by highly qualified sales and trading teams. " +
                            "<br><br>We buy and sell shares on your behalf on the ZSE. Our execution services are bespoke towards clients who:" +
                            "<ul>" +
                            "<li><i class='material-icons secondary-text'>chevron_right</i>Require advice on the intrinsic worth of transactions from time to time</li>" +
                            "<li><i class='material-icons secondary-text'>chevron_right</i>Require investment information on which to base their decision making.</li><ul>" +
                            "<br>We also offer guidance on the best way in which to work orders in the market particularly in relation to large transactions and illiquid counters. This service is important to a diverse range of clients including both local (institutional fund managers, parastatals, corporates) and foreign institutional investors as well as high net worth and retail clients.",
                    },
                    {
                        title: "Fixed Income",
                        description: "The fixed income desk executes transactions on the fixed income markets on behalf of our clients trading for both corporate and government issues. Our team stands ready to offer our clientele the option of taking part in the primary issuance and secondary trading of the following:\n" +
                            "<ul><li><i class='material-icons secondary-text'>chevron_right</i>Government bonds</li>" +
                            "<li><i class='material-icons secondary-text'>chevron_right</i>Treasury bills (T-Bills)</li>" +
                            "<li><i class='material-icons secondary-text'>chevron_right</i>Corporate bonds</li></ul>",
                    },
                    {
                        title: "Research",
                        description: "At the core of our value proposition and the factor to separate us from others is research expertise. Research has to be independent, incisive and helpful to the client in investment decision making. Fincent Securities has a robust in-house research team which offers our clients access to a wealth of research, news and market information. Our team generates a suite of comprehensive reports to provide our clients with the basis needed to help shape their investment decisions. Our research encompasses all key blocks of analysis including macroeconomic, fundamental, and technical as well as quantitative analysis." +
                            "<br><br>The research division provides:" +
                            "<ul>" +
                            "<li><strong class='primary-font uppercase secondary-text'>Technical trader</strong> - Besides covering a summary of equities and debt market activity with a focus on turnover and market breadth & depth, the report also covers important charts of the day. We believe that technical analysis is important for a trading strategy as well as timing entries and exits on the market.</li><br>" +
                            "<li><strong class='primary-font uppercase secondary-text'>Taking Stock</strong> - This is a weekly piece highlighting prominent events affecting debt, equity markets and market fundamentals update.</li><br>" +
                            "<li><strong class='primary-font uppercase secondary-text' class='primary-font uppercase'>Economics 360</strong> - This feature takes a 360 degree look at macroeconomic developments in the market including review of key reports from the national treasury, the central bank, different industry representative organisations and bodies such as Zimstats which releases key statistics in the market. This will not only cover the historic but also looks at the outlook for areas that could affect the capital markets.\n</li><br>" +
                            "<li><strong class='primary-font uppercase secondary-text'>Equity Coverages</strong> - These reports seek to give forward looking views on select listed equities and their sectors, paying particular attention to fundamental analysis using contemporary tools as well as providing timely earnings updates.</li><br>" +
                            "<li><strong class='primary-font uppercase secondary-text'>Fixed Income Coverages</strong> - These reports focus on key macroeconomic indicators’ impact on the debt market activity with a view to predict the direction of interest rates in future.</li><br>" +
                            "<li><strong class='primary-font uppercase secondary-text'>Specialist reports</strong> - These are occasional pieces focusing on non-listed investment assets such as real estate. Under this segment our research team will also provide in-depth analysis pieces to help our clients in their investment decision making.</li><br>" +
                            "</ul>",
                    }
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
