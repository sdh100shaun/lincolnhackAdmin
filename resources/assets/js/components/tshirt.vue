<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <table  class="table-bordered table-striped table-responsive table" >
                            <thead><tr>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Tshirt Size </th>
                            </tr></thead>
                            <tbody>
                            <tr v-for="tshirt in tshirts">
                                <td>{{tshirt.firstName}}</td>
                                <td>{{tshirt.lastName}}</td>
                                <td>{{tshirt.tshirt}}</td>
                            </tr>
                            </tbody>
                        </table>
                        <p>Size Counts:</p>
                        <ul>
                           <li v-for="size in sizeData">
                               {{size.description}} : {{size.number}}
                           </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    import axios from 'axios';


    export default {
        mounted() {
            console.log('ready');
            this.getTshirtData().then((response)=> {
                this.tshirts = response.data;
            })
            .catch(function (error) {
                  console.log(error);

            });

        },
        props:['source'],
        data(){
            return  {
                messageTime: null,
                token:window.Laravel.csrfToken,
                tshirts:[]
              }

        },
        methods: {
            getTshirtData: ()=> {

                return axios.get('/api/tshirts')


            }
        },
        computed: {

            sizeData() {
                var small = this.tshirts.filter((x)=>{return x.tshirt == 'S'})
                var medium = this.tshirts.filter((x)=>{return x.tshirt == 'M'})
                var large = this.tshirts.filter((x)=>{return x.tshirt == 'L'})
                var extralarge = this.tshirts.filter((x)=>{return x.tshirt == 'XL'})
                var twoXL = this.tshirts.filter((x)=>{return x.tshirt == '2XL'})
                return [{"description":"small","number":small.length},
                    {"description":"medium","number":medium.length},
                    {"description":"large","number":large.length},
                    {"description":"XL","number":extralarge.length},
                    {"description":"2XL","number":twoXL.length}];
            },

        }
    }
</script>