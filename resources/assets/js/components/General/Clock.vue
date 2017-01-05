<template>
    <div class="datetime">
        <small>{{ datetime | momentformat("dddd, MMMM DD, YYYY") }}</small>
        <strong>{{ datetime | momentformat("hh:mm:ss A") }}</strong>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                datetime: window.datetime,
                timeInterval: null
            }
        },

        mounted() {
            var self = this;

            // Check if Web Worker is available
            if(window.Worker) {

                // Instantiate worker object
                var timeWorker = new Worker('js/timeworker.js');

                // Post message to the time webworker
                timeWorker.postMessage(window.timezone);

                timeWorker.onmessage = function(e) {
                    // Update datetime
                    self.datetime = e.data;
                }
            } else {

                // If Worker is not available, start timer on the same thread
                this.timeInterval = setInterval(function() {
                    self.datetime = moment().tz(window.timezone).add(1, 'seconds').format();
                }, 1000);

            }
        },

        destroyed() {

            // Destroy interval to prevent memory leak
            clearInterval(this.timeInterval);
        }
    }
</script>
