/**
 * Created by shaunhare on 12/03/2017.
 */
 <style scoped>
 #clockdiv{
 	font-family: Raleway;
 	color: #fff;
 	display: inline-block;
 	font-weight: 100;
 	text-align: center;
 	font-size: 2em;
 	margin-top:10px;
 	padding-left:5%;
 	width:100%;
 }

 #clockdiv > div{
 	padding: 10px;
    width:2em;
 	border-radius: 3px;
 	background: #9791e1;
 	display: inline-block;
 }

 #clockdiv div > span{
 	padding: 15px;
 	width:1.5em;
 	border-radius: 3px;
 	background: #D0CDF1;
 	display: inline-block;
 }

 .smalltext{
 	padding-top: 5px;
 	font-size: 26px;
 }

 </style>
<template>
<div>
<div id="clockdiv" v-if="! finished">
  <div v-if=moreThanOneDay>
    <span class="days">{{days}}</span>
    <div class="smalltext">Days</div>
  </div>
  <div>
    <span class="hours">{{hours}}</span>
    <div class="smalltext">Hours</div>
  </div>
  <div>
    <span class="minutes">{{minutes}}</span>
    <div class="smalltext">Minutes</div>
  </div>
  <div>
    <span class="seconds">{{seconds}}</span>
    <div class="smalltext">Seconds</div>
  </div>
</div>
<div v-else><h1> Hacking is over !</h1></div>
</div>
</template>

<script>

export default {
    mounted() {
        window.setInterval(() => {
                       this.now = Math.trunc((new Date()).getTime() / 1000);
                   },1000)
    },
    props:{
        date:null
    },
    data() {

        return {

           now: Math.trunc((new Date()).getTime() / 1000),
           event: this.date,
        }
    },

    computed: {

        calculatedDate() {
            this.event = Math.trunc(Date.parse(this.event) / 1000);

            return this.event
        },
        seconds() {
             return (this.calculatedDate - this.now) % 60;
        },
        minutes() {
            return Math.trunc((this.calculatedDate - this.now) / 60) % 60;
        },
        hours() {
            return Math.trunc((this.calculatedDate - this.now) / 60 / 60) % 24;
        },
        days() {
                return Math.trunc((this.calculatedDate - this.now) / 60 / 60 / 24);
            },
        moreThanOneDay(){
                return this.days > 0;
          },
        finished(){

            return this.seconds < 0

        }
    },
}
</script>
