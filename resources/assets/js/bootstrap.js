/**
 * Declare and initialize time variables
 */
window.url_protocol = window.location.protocol;
window.url_host = window.location.host;
window.url_pathname = window.location.pathname;
window.url_rootPath = '/ourstudyroom/public/';
window.url_rootDIR = url_protocol + '//' + url_host + url_rootPath;
window.timezone = jstz.determine().name();
window.offset = (moment().tz(timezone).format('Z')).split(':')[0];
window.datetime = moment().tz(timezone).format();
window._ = require('lodash');

/**
 * Vue is a modern JavaScript library for building interactive web interfaces
 * using reactive data binding and reusable components. Vue's API is clean
 * and simple, leaving you to focus on building your next great project.
 */

window.Vue = require('vue');
Vue.use(require('vue-resource'));
window.VueRouter = require('vue-router');
Vue.use(window.VueRouter);

/**
 * We'll register a HTTP interceptor to attach the "CSRF" header to each of
 * the outgoing requests issued by this application. The CSRF middleware
 * included with Laravel will automatically verify the header's value.
 */

Vue.http.interceptors.push((request, next) => {
    request.headers.set('X-CSRF-TOKEN', Laravel.csrfToken);

    next();
});

/**
 * This is needed for the vue resource since an error
 * "Laravel is not defined" will display
 */
window.Laravel = { csrfToken: $('meta[name="csrf-token"]').attr('content') };

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from "laravel-echo"

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });
