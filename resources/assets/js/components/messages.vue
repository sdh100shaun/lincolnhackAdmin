<template>
<div class="container">
   <div class="row">
      <div class="col-md-8 col-md-offset-2">
         <div class="panel panel-default">
            <div class="panel-heading">Messages</div>
            <div class="panel-body message-editor">
               <form class="form-horizontal" method='POST' action="/setMessage" >
                  <fieldset>
                     <div class="form-group">
                        <label class="col-md-4 control-label" for="message" >Enter message</label>
                        <div class="col-md-6"><textarea name="message" id="message" cols="50"></textarea></div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-4 control-label" for="type" >Enter location</label>
                        <div class="col-md-6">
                           <select name='type' id="type">
                              <option value='home.index'>Home</option>
                              <option value='countdown'>Countdown</option>
                           </select>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                           <el-date-picker
                              v-model="messageTime"
                              type="datetime"
                              placeholder="Dismiss time"
                              size="large">
                           </el-date-picker>
                           <input type='hidden' name='active' :value="messageTime"  />
                           <input type='hidden' name='_token' :value="token"  />
                        </div>
                     </div>
                     <input type="submit" class="btn btn-primary pull-right" value="Set message" />
                  </fieldset>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
</template>
<script>
    import {DatePicker} from 'element-ui'
    import lang from 'element-ui/lib/locale/lang/en'
    import locale from 'element-ui/lib/locale'

    // configure language
    locale.use(lang)

    export default {
        mounted() {
            console.log('Messages Component mounted.')
        },
        data(){
            return  {
                messageTime: null,
                token:window.Laravel.csrfToken
              }

        }
    }
</script>