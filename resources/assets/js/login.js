
/**
 * Require necessary variables/data
 */
require('./bootstrap');

/**
 * Instantiate Vue intance
 */
const app = new Vue({
    el: '#login',

    data: function() {
    	return {

            msgSuccess: '',
	    	msgError: '',
            formLoad: false

	    }
    },

    methods: {

    	loginFormSubmit: function() {
    		// Check if username is already logged in
    	},

        emailFormSubmit: function() {
            var emailData = $("#emailForm").serializeArray(), self = this;
            var data = {
                _token: emailData[0].value,
                email: emailData[1].value
            }
            this.clearData();
            this.$http.post('email', data).then((response) => {
                self.msgSuccess = response.data.success;
                self.formLoad = false;
            }, (response) => {
                self.msgError = response.data.error;
                self.formLoad = false;
            });
        },

        clearData() {
            this.msgError = '';
            this.msgSuccess = '';
            this.formLoad = true;
        }

    },

    mounted: function() {
        /*if ('serviceWorker' in navigator) {

		  	navigator.serviceWorker
			    .register('cache.js', { scope: '' })
			    .then(function(registration) {
			      console.log("Service Worker Registered");
			    })
			    .catch(function(err) {
			      console.log("Service Worker Failed to Register", err);
			    })

		}*/
    }
});
