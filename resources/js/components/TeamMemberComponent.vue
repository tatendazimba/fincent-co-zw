<template>
    <div class="transparent">
        <div class="row">
            <div class="col s12 no-pad">
                <div class="center-align valign-wrapper" style="background: linear-gradient(rgba(42, 35, 76, .25), rgba(42, 35, 76, .15)), url('/images/leadership/group.jpg') no-repeat top center ; background-size: cover; height: 600px;">
                    <div class="container">
                        <h5 class="no-margin white-text uppercase">
                            <strong>Professionalism & Dedication</strong>
                        </h5>
                        <h2 class="secondary-font white-text">
                            <strong>Meet the Fincent Team</strong>
                        </h2>
                        <h5 class="white-text secondary-font">
                            <span>Meet the team responsible for conducting Fincent business.</span>
                        </h5>
                    </div>
                </div>
            </div>
        </div>

        <p>&nbsp;</p>
        <div  id="profile"></div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

        <div class="container">

            <div class="flex row" style="position: relative;">
                <div class="col s12 m6 no-pad">
                    <div class="full-height" v-bind:style="{ background: 'linear-gradient(to bottom, rgba(243, 110, 33, .12), rgba(42, 35, 76, .35)), url(' + member.url + ')  no-repeat top center', backgroundSize: 'auto', backgroundColor: '#cacbcd' }" style="background: linear-gradient(rgba(42, 35, 76, .25), rgba(42, 35, 76, .15)), url('/images/user.png') no-repeat center center; background-size: contain; min-height: 500px;">
                    </div>
                </div>
                <div class="col s12 m6 no-pad" v-bind:style="{ background: 'linear-gradient(to bottom, rgba(23, 23, 69, .8825), rgba(23, 23, 69, .9725)), url(' + member.url + ')  no-repeat center center', backgroundSize: 'cover', backgroundColor: '#cacbcd' }" style="background: linear-gradient(rgba(23, 23, 69, .8825), rgba(23, 23, 69, .9725)), url('/images/side.png') no-repeat center center; background-size: cover; height: 600px; overflow-y: auto;">
                    <div class="container">

                        <div class="" style="">
                            <h2 class="white-text">
                                <strong class="secondary-font">{{ member.name }}</strong>
                            </h2>
                            <h5 class="primary-font white-text no-margin">{{ member.position }}</h5>
                            <span class="white-text small-text">{{ member.qualifications }}</span>

                            <br>
                        </div>

                        <p>&nbsp;</p>

                        <div class="white-text justified" v-html="member.description"></div>

                        <p>&nbsp;</p>

                    </div>
                </div>
            </div>

            <p>&nbsp;</p>

            <div class="flex row primary-gradient" style="position: relative;">
                <div v-for="(executive, index) of executives" class="col s6 m3 no-pad">
                    <div class="member" @click="selectMember(index)" v-bind:style="{ background: 'linear-gradient(to bottom, rgba(243, 110, 33, .12), rgba(42, 35, 76, .35)), url(' + executive.url + ')  no-repeat center center', backgroundSize: 'cover', backgroundColor: '#cacbcd' }" style="background: linear-gradient(rgba(42, 35, 76, .25), rgba(42, 35, 76, .15)), url('/images/user.png') no-repeat center center; background-size: cover; height: 400px;">
                    </div>
                </div>
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>

            <h3 class="primary-text">Our Team</h3>

            <p class="justified">
                Our team is important for delivering services to our customers alongside any technologies that we may deploy. We will not compromise on professionalism and dedication to serve the client with experience and expertise playing a key role in our recruitment. Training will be paramount to develop a uniform culture and to ensure every one of our team serve clients exceptionally well.
            </p>

            <p>&nbsp;</p>

            <h3 class="primary-text">Governance</h3>

            <p class="justified">
                For us to create wealth for our clients and stakeholders we believe in having strong corporate governance structures as well as strict compliance with any regulation governing our activities.
            </p>

            <p>&nbsp;</p>

            <h3 class="primary-text">Corporate Action</h3>

            <p class="justified">
                Our team has immense sponsoring broker experience and has been responsible for several corporate transactions in particular listing of several companies over the last 20 years. We have a compelling network of relationships across the capital markets landscape from listed companies to banks to institutional investors and high net worth individuals which we can leverage to execute corporate actions.
            </p>

            <p>&nbsp;</p>

            <h3 class="primary-text">Investor Relations Services</h3>

            <p class="justified">
                We know what institutional and high net worth investors require from listed companies by way of disclosures and interactions and thus are well placed to advise on investor relations issues. Fincent Securities is the ideal partner for listed companies to put their best foot forward with the community that determines their share price.
            </p>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>


        </div>
    </div>
</template>

<script>
    export default {
        name: "TeamMemberComponent",
        props: {
            leader: {
                required: true,
                type: String
            }
        },
        data: function() {
            return {
                member: {},
                executives: {
                    "ndodana-mguquka" :
                        {
                            url: "/images/leadership/ndodana-mguquka.jpg",
                            name: "Ndodana Mguquka",
                            position: "Principal Stockbroker",
                            qualifications: "",
                            description: "Ndodana is a licensed securities dealear and member of the Zimbabwe Stock Exchange (ZSE) and former Chairman of the ZSE. Previously he worked for NDH Equities and Sagit Stock Brokers, one of the older stock broking firms in Zimbabwe. He later founded New Africa Securities (Pvt.) Ltd and led the company to be the biggest and best run securities firm in the country attracting clients from emerging and European markets. He is a member of the Securities Institute London (UK), the South African Institute of Financial Markets. He is also a member of the Institute of Bankers South Africa. Ndodana is highly regarded in the stock broking fraternity. His strength lies in networking and deal striking ability. Ndodana brings a wealth of other experience to the firm having been intimately involved in various privatization deals, notably the Zimre Privatisation, Dairiboard and CFI listings while at Sagit and the Trust, Astra industries and Barbican listings white at NDH. Ndodana also advised Truworths on their capital restructuring. At New Africa Securities he led the takeover of First Mutual and CFX, and was the sponsoring broker for Finhold / Intermarket merger transaction among other transactions. \n",
                        },
                    "rufaro-zengeni" :
                        {
                            url: "/images/leadership/rufaro-zengeni.jpg",
                            name: "Rufaro Zengeni",
                            position: "Executive Director - Sales and Trading",
                            qualifications: "B. Compt (Hons) (UNISA) (Partner)",
                            description: "Rufaro is an accountant by training who served his articles with Ernst & Young between   1999 and 2002 and has gone on to work for several organisations at senior managerial levels in a career spanning over 15 years. He is an avid writer with interests in global financial markets and is a keen follower of the growing impact of technology in businesses. He has written for and participated as a panelist for the Quoted Companies Survey and Banks & Banking Survey Magazines published by the Zimbabwe Independent. He holds a Bachelor of Accounting Sciences from the University of South Africa and is a licensed securities dealer and a member of the Zimbabwe Stock Exchange. Rufaro is also a partner and director of Zfn, Zimbabwe’s indispensable financial newsletter. He is the co-founder of Fincent Capital. \n",
                        },
                    "ranga-makwata" :
                        {
                            url: "/images/leadership/ranga-makwata.jpg",
                            name: "Ranga Makwata",
                            position: "Executive Director – Research & Operations",
                            qualifications: "B. Com (Finance) Hons, MBA (NUST), MIFM, CFA (Partner)",
                            description: "Ranga is highly experienced investment professional who has held several posts in the investment industry working for a pension fund, a stock broking firm, asset managers and investment banks. He has strong aptitude for fundamental analysis including valuations of both listed and unlisted companies using financial models, technical and economic analysis. He also has experience in portfolio management and corporate advisory. Ranga has written several opinion pieces and financial markets commentaries for many business newspapers and magazines. He was for nearly a decade the leading compiler/panelist of annual business magazines namely the Banks & Banking Survey and the Quoted Companies Survey which are published by the Zimbabwe Independent. Ranga is a co-author of an economics book entitled <strong>Zimbabwe Post Independence Economic Polices: A Critical Review</strong>strong>. <br><br>" +
                                "He holds B.Com Finance honours and MBA (cum laude) degrees from NUST and is CFA charterholder. Ranga is a member of the CFA Institute (USA), CFA Society of South Africa and the South African Institute of Financial Markets (SAIFM). He is a founding trustee and Treasurer of the Investment Professionals Association of Zimbabwe (IPAZ). He is also a partner and director of Zfn, Zimbabwe’s indispensable financial newsletter. He is the co-founder of Fincent Capital. \n",
                        },
                    "pearson-madara" :
                        {
                            url: "/images/leadership/pearson-madara.jpg",
                            name: "Pearson Madara",
                            position: "Chief Finance Officer",
                            qualifications: "FCCA",
                            description: "Pearson Madara is a seasoned Accountant who trained with EY in its Audit department and qualified as an ACCA member with four best student honors prices. After qualifying in 2010, Pearson started an accounting practice focusing mainly on assisting companies with their management advisory needs, accounting, financial reporting and tax portfolios. By working with a vast client base in different sectors of the economy, Pearson has gained key competences in the local tax & business laws, application and interpretation of International Financial Reporting Standards (IFRS) and International Standards on Auditing (ISAs). The knowledge, skills and business network built over the years are invaluable for businesses operating in the challenging and ever evolving Southern African market.\n",
                        },
                }
            }
        },
        methods: {
            selectMember: function(index) {
                this.member = this.executives[index];
            }
        },
        mounted: function() {
            this.selectMember(this.leader);
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
