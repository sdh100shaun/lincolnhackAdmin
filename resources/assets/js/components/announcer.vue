<template>
    <div class="xs-center" v-bind:class="{ message: hasClass }">
        <p><strong>{{message}}</strong> </p>
    </div>
</template>

<script>

    export default{
        mounted(){

            window.Echo.channel('message.countdown')
                    .listen('CountdownMessage', (e) => {

                        this.message = e.message.message;
                        this.hasClass = true;
                    });

        },
        data() {
            return {
               message:this.message,
               hasClass:false

            }
        }
    }
</script>