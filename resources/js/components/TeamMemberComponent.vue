<template>
    <div class="transparent">
        <div class="row">
            <div class="col s12 no-pad">
                <div class="center-align valign-wrapper" style="background: linear-gradient(rgba(42, 35, 76, .25), rgba(42, 35, 76, .15)), url('/images/leadership/group.jpg') no-repeat top right; background-size: cover; height: 600px;">
                    <div class="container">
                        <h5 class="no-margin white-text">
                            <strong>TEAM</strong>
                        </h5>
                        <h2 class="secondary-font white-text">
                            <strong>Meet the Executive Team</strong>
                        </h2>
                        <h5 class="white-text secondary-font">
                            <span>Meet the team responsible for conducting Fincent business.</span>
                        </h5>
                    </div>
                </div>
            </div>
        </div>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

        <div class="container">
            <div class="flex row primary-gradient" style="position: relative;">
                <div v-for="(executive, index) of executives" class="col s12 m3 no-pad">
                    <div class="member" @click="selectMember(index)" v-bind:style="{ background: 'linear-gradient(to bottom, rgba(243, 110, 33, .12), rgba(42, 35, 76, .35)), url(' + executive.url + ')  no-repeat center center', backgroundSize: 'cover', backgroundColor: '#cacbcd' }" style="background: linear-gradient(rgba(42, 35, 76, .25), rgba(42, 35, 76, .15)), url('/images/user.png') no-repeat center center; background-size: cover; height: 400px;">
                    </div>
                </div>
            </div>

            <p>&nbsp;</p>

            <div class="flex row" style="position: relative;">
                <div class="col s12 m6 no-pad">
                    <div class="full-height" v-bind:style="{ background: 'linear-gradient(to bottom, rgba(243, 110, 33, .12), rgba(42, 35, 76, .35)), url(' + member.url + ')  no-repeat center center', backgroundSize: 'cover', backgroundColor: '#cacbcd' }" style="background: linear-gradient(rgba(42, 35, 76, .25), rgba(42, 35, 76, .15)), url('/images/user.png') no-repeat center center; background-size: cover; height: 400px;">
                    </div>
                </div>
                <div class="col s12 m6 no-pad" v-bind:style="{ background: 'linear-gradient(to bottom, rgba(23, 23, 69, .8825), rgba(23, 23, 69, .9725)), url(' + member.url + ')  no-repeat center center', backgroundSize: 'cover', backgroundColor: '#cacbcd' }" style="background: linear-gradient(rgba(23, 23, 69, .8825), rgba(23, 23, 69, .9725)), url('/images/side.png') no-repeat center center; background-size: cover; height: 600px; overflow-y: auto;">
                    <div class="container">

                        <div class="" style="">
                            <h2 class="white-text">
                                <strong class="secondary-font">{{ member.name }}</strong>
                            </h2>
                            <h5 class="primary-font white-text no-margin">{{ member.position }}</h5>

                            <br>
                        </div>

                        <p>&nbsp;</p>

                        <div class="white-text justified">
                            {{ member.description }}
                        </div>

                        <p>&nbsp;</p>

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
        name: "TeamMemberComponent",
        data: function() {
            return {
                member: {},
                executives: [
                    {
                        url: "/images/leadership/ranga-makwata.jpg",
                        name: "Ranga Makwata",
                        position: "Executive Director – Research & Operations",
                        qualifications: "B. Com (Finance) Hons, MBA (NUST), MIFM, CFA",
                        description: "Ranga is highly experienced investment professional who has held several posts in the investment industry working for a pension fund, a stock broking firm, asset managers and investment banks. He has strong aptitude for fundamental analysis including valuations of both listed and unlisted companies using financial models, technical and economic analysis. He also has experience in portfolio management and corporate advisory. Ranga has written several opinion pieces and financial markets commentaries for many business newspapers and magazines. He was for nearly a decade the leading compiler/panelist of annual business magazines namely the Banks & Banking Survey and the Quoted Companies Survey which are published by the Zimbabwe Independent. Ranga is a co-author of an economics book entitled Zimbabwe Post Independence Economic Polices: A Critical Review.\n" +
                            "\n" +
                            "He holds B.Com Finance honours and MBA (cum laude) degrees from NUST and is CFA charter holder. Ranga is a member of the CFA Institute (USA), CFA Society of South Africa and the South African Institute of Financial Markets (SAIFM). He is a founding trustee and Treasurer of the Investment Professionals Association of Zimbabwe (IPAZ). He is a volunteer for CFA Institute and has been involved in many of the Institute’s global assignments including exam grading. He is also a director of Zfn Capital, a company than he has run for more than six year.",
                    },
                    {
                        url: "/images/leadership/rufaro-zengeni.jpg",
                        name: "Rufaro Zengeni",
                        position: "Executive Director - Sales and Trading",
                        qualifications: "B. Com (Finance) Hons, MBA (NUST), MIFM, CFA",
                        description: "Rufaro is an accountant by training who served his articles with Ernst & Young between   1999 and 2002 and has gone on to work for several organisations at senior managerial levels in a career spanning over 15 years. He is an avid writer with interests in global financial markets and is a keen follower of the growing impact of technology in businesses. He writes for the highly popular “In My View” column for Zfn and also writes for the Quoted Companies Survey and Banks and Banking Survey Magazines published by the Zimbabwe Independent annually. He holds a Bachelor of Accounting Sciences from the University of South Africa. He is a registered stockbroker and a member of the Zimbabwe Stock Exchange.",
                    },
                    {
                        url: "/images/leadership/pearson-madara.jpg",
                        name: "Pearson Madara",
                        position: "Chief Finance Officer",
                        qualifications: "B. Com (Finance) Hons, MBA (NUST), MIFM, CFA",
                        description: "Pearson Madara is a seasoned Accountant who trained with EY in its Audit department and qualified as an ACCA member with four best student honors prices. After qualifying in 2010, Pearson started an accounting practice focusing mainly on assisting companies with their management advisory needs, accounting, financial reporting and tax portfolios. By working with a vast client base in different sectors of the economy, Pearson has gained key competences in the local tax & business laws, application and interpretation of International Financial Reporting Standards (IFRS) and International Standards on Auditing (ISAs). The knowledge, skills and business network built over the years are invaluable for businesses operating in the challenging and ever evolving Southern African market.",
                    },
                    {
                        url: "/images/leadership/gamu-pasi.jpg",
                        name: "Gamu Pasi",
                        position: "Associate",
                        qualifications: "B. Com (Finance) Hons, MBA (NUST), MIFM, CFA",
                        description: "Gamu has a Business Studies honours degree from the University of Zimbabwe and an Executive Certificate in Investments and Portfolio Management from the same institution. He has 9 years working experience in stockbroking (both back and front offices) and is the finance and admin officer at Zfn where he has been since 2012. He is currently studying for the Financial Risk Manager Certificate with the Global Association of Risk Professionals.",
                    },
                ]
            }
        },
        methods: {
            selectMember: function(index) {
                this.member = this.executives[index];
            }
        },
        mounted: function() {
            this.selectMember(0);
        }
    }
</script>

<style>

    .primary-gradient {
        background: linear-gradient(to bottom, rgba(23, 23, 69, 1), rgba(0, 0, 0, 1)) !important;
    }

    .member {
        clip-path: polygon(20% 0, 100% 0, 80% 100%, 0 100%);
    }

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
