// Global Dashboard Variable
window.Dashboard = {
    app: '',
    e404: '',
    dashboard: '',
    staff: ''
}


/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

/**
 * Register Global Components
 */
Vue.component('clock', require('./components/General/Clock.vue'));

// Administrator Components
Dashboard.administrator = require('./components/Administrator.vue');


/**
 * Register Global Filters
 */
Vue.filter('momentformat', function(value, format) {
    return moment(value).tz(window.timezone).format(format);
});
Vue.filter('cutFirstname', function(value) {
    return value.split(" ")[0];
});


// Define routes
const routes = [
    { path: '/admin', name: 'administrator', component: Dashboard.administrator }
];

// Create router instance
const router = new VueRouter({
    root: window.url_rootDIR,
    routes // short for routes: routes
})

// Start Router
Dashboard.app = new Vue({
    router,
    methods: {

        setBreadcrumb(name, icon, event) {
            this.breadcrumbs.name = name;
            this.breadcrumbs.icon = icon;
        },

        showSubNavigation(e) {
            var subnav = $(e.target).parent().find('.sub-navigation');
            if($(subnav).css('display') == 'none') $(subnav).slideDown();
            else $(subnav).slideUp();
        }

    },

    mounted: function() {

        $('.ui.dropdown').dropdown();

        // Set default route
        router.replace({ name: 'administrator'});

    },

    data: {
        toggleLeft: false,
        breadcrumbs: { name: 'Dashboard', icon: 'dashboard' }
    }

}).$mount('#dashcontainer');
