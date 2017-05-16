<style scoped>
    .switch {
        display: table-cell;
        vertical-align: middle;
        padding: 5px;
    }

    /* ============================================================
      SWITCH 2 - ROUND FLAT
    ============================================================ */
    input.cmn-toggle-round-flat + label {
        padding: 2px;
        width: 60px;
        height: 30px;
        background-color: #dddddd;
        -webkit-border-radius: 30px;
        -moz-border-radius: 30px;
        -ms-border-radius: 30px;
        -o-border-radius: 30px;
        border-radius: 30px;
        -webkit-transition: background 0.4s;
        -moz-transition: background 0.4s;
        -o-transition: background 0.4s;
        transition: background 0.4s;
    }

    input.cmn-toggle-round-flat + label:before, input.cmn-toggle-round-flat + label:after {
        display: block;
        position: absolute;
        content: "";
    }

    input.cmn-toggle-round-flat + label:before {
        top: 2px;
        left: 2px;
        bottom: 2px;
        right: 2px;
        background-color: #fff;
        -webkit-border-radius: 30px;
        -moz-border-radius: 30px;
        -ms-border-radius: 30px;
        -o-border-radius: 30px;
        border-radius: 30px;
        -webkit-transition: background 0.4s;
        -moz-transition: background 0.4s;
        -o-transition: background 0.4s;
        transition: background 0.4s;
    }

    input.cmn-toggle-round-flat + label:after {
        top: 4px;
        left: 4px;
        bottom: 4px;
        width: 26px;
        background-color: #dddddd;
        -webkit-border-radius: 26px;
        -moz-border-radius: 26px;
        -ms-border-radius: 26px;
        -o-border-radius: 26px;
        border-radius: 26px;
        -webkit-transition: margin 0.4s, background 0.4s;
        -moz-transition: margin 0.4s, background 0.4s;
        -o-transition: margin 0.4s, background 0.4s;
        transition: margin 0.4s, background 0.4s;
    }

    input.cmn-toggle-round-flat:checked + label {
        background-color: #8ce196;
    }

    input.cmn-toggle-round-flat:checked + label:after {
        margin-left: 30px;
        background-color: #8ce196;
    }
    .cmn-toggle {
        position: absolute;
        margin-left: -9999px;
        visibility: hidden;
    }
    .cmn-toggle + label {
        display: block;
        position: relative;
        cursor: pointer;
        outline: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

</style>
<template>
    <div>

        <div class="switch">
            <input :id="id" class="cmn-toggle cmn-toggle-round-flat" type="checkbox" :checked="checked"  v-model="registered">
            <label :for="id"></label>
        </div>
    </div>
</template>
<script>
    import axios from 'axios'

    export default {
        props: ["id", "attendee", "checked"],
        data() {
            return {
                registered: false
            }
        },
        watch:{
            registered: function (state) {
               this.state = state
                this.register(state,this.id)
            }
        },
        mounted(){

        },
        methods: {

            register(state,id) {
                axios.post('/api/register', {
                    id: id.replace('cmn-toggle-',''),
                    state: state
                })
                        .then(function (response) {
                            console.log(response);
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
            }
        },


    }

</script>
