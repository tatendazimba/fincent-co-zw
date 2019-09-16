
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('xrate-component', require('./components/XRatesComponent.vue').default);

Vue.component('hero-component', require('./components/HeroComponent.vue').default);
Vue.component('trading-hero-component', require('./components/TradingHeroComponent.vue').default);
Vue.component('xrates-hero-component', require('./components/XRatesHeroComponent').default);
Vue.component('micro-hero-component', require('./components/MicroHeroComponent').default);
Vue.component('members-hero-component', require('./components/MembersHeroComponent').default);

Vue.component('divisions-component', require('./components/DivisionsComponent').default);
Vue.component('intro-component', require('./components/IntroComponent').default);
Vue.component('newsletter-component', require('./components/NewsletterComponent').default);
Vue.component('contact-component', require('./components/ContactComponent').default);

Vue.component('member-content-component', require('./components/MemberContentComponent').default);

Vue.component('member-component', require('./components/MemberComponent').default);
Vue.component('team-member-component', require('./components/TeamMemberComponent').default);

Vue.component('blog-component', require('./components/BlogComponent').default);

Vue.component('nav-component', require('./components/NavComponent').default);
Vue.component('transparent-nav-component', require('./components/TransparentNavComponent').default);
Vue.component('side-nav-component', require('./components/SideNavComponent').default);

Vue.component('footer-component', require('./components/FooterComponent').default);

Vue.component('blogs-component', require('./components/BlogsComponent').default);

Vue.component('trading-component', require('./components/TradingComponent').default);
Vue.component('why-trade-component', require('./components/WhyTradeComponent').default);

Vue.component('loans-component', require('./components/LoansComponent').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
