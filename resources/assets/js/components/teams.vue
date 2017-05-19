
<script>

    import axios from 'axios';


    export default {
        mounted() {
            console.log('ready');
            this.getTeamsData().then((response)=> {
                this.teams = response.data;
                console.log(this.teams)
            })
                    .catch(function (error) {
                        console.log(error);

                    });

        },
        props:['source'],
        data(){
            return  {

                token:window.Laravel.csrfToken,
                teams:[]
            }

        },
        methods: {
            getTeamsData: ()=> {

                return axios.get(this.source)


            }
        },
        computed: {


        }
    }
</script>