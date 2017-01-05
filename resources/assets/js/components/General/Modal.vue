<template>
    <div class="ui grid segment flash-modal-wrap" @click="closeFlash">
        <div class="row">
            <div class="three wide column modal-icon">
                <i class="circular inverted icon big" :class="flashMessage.messageIcon"></i>
            </div>
            <div class="twelve wide column message-content">
                <div class="message-header">
                    <strong>{{ flashMessage.messageHeader }}</strong>
                    <i class="remove icon"></i>
                </div>
                <div class="message-body">
                    <small>{{ flashMessage.messageBody }}</small>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    
    export default {

        data() {
            return {
                flashTimeout: '',
                closed: false,
                flashMessage: {
                    messageIcon: '',
                    messageHeader: '',
                    messageBody: ''
                },
            }
        },

        events: {

            openFlash(flashMessage) {
                // Show flash message
                $('.flash-modal-wrap').transition('fly top');

                // Set flash message
                this.$set('flashMessage', {
                    messageIcon: flashMessage.icon,
                    messageHeader: flashMessage.header,
                    messageBody: flashMessage.body
                });

                // Close flash message after 5 seconds
                var self = this;
                this.closed = false;
                this.flashTimeout = setTimeout(function() {
                    if(!self.closed) self.closeFlash();
                }, 5000);
            }

        },

        methods: {

            closeFlash() {
                this.closed = true;
                clearTimeout(this.flashTimeout);

                // Close flash message
                $('.flash-modal-wrap').transition('tada').transition('fly left');
            }

        }

    }

</script>
