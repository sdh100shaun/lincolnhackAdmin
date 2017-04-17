<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">T Shirts</div>
{{tshirts}}
                    <div class="panel-body">
                        <table  class="table-bordered table" >
                            <tr v-for="tshirt in tshirts"><td>{{tshirt.size}}</td></tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>



    export default {
        mounted() {
            console.log('ready');
            this.tshirts = this.getTshirtData();
        },
        props:['source'],
        data(){
            return  {
                messageTime: null,
                token:window.Laravel.csrfToken,
                tshirts:[]
              }

        },
        methods:{
            getTshirtData:()=>{
               axios.get('/api/tshirts')
                return [{size:'xl'}]
            }
        }
    }
</script>