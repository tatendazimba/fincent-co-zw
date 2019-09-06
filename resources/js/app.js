
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
Vue.component('divisions-component', require('./components/DivisionsComponent').default);
Vue.component('intro-component', require('./components/IntroComponent').default);
Vue.component('newsletter-component', require('./components/NewsletterComponent').default);
Vue.component('contact-component', require('./components/ContactComponent').default);

Vue.component('member-component', require('./components/MemberComponent').default);
Vue.component('team-member-component', require('./components/TeamMemberComponent').default);

Vue.component('blog-component', require('./components/BlogComponent').default);
Vue.component('nav-component', require('./components/NavComponent').default);

Vue.component('footer-component', require('./components/FooterComponent').default);

Vue.component('blogs-component', require('./components/BlogsComponent').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

console.log("in");

const app = new Vue({
    el: '#app'
});
