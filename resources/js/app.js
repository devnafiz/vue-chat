require('./bootstrap');


import {createApp} from 'vue';


import VueRouter from 'vue-router';
//Vue.use(VueRouter);
//import {routes} from './routes.js';

//const router = new VueRouter({
 // routes,
 // mode:'history'
  
//})
 


//window.Reload = new Vue();
//createApp().use(router).mount('#app')

 const app = createApp({
   
    // router, 


               data(){

                return{

                     message:'',
                     chat:{

                      message:[]
                     }
                }
                    

               },

               methods:{

                    send(){
                           if(this.message.length!=0){
                            this.chat.message.push(this.message);
                           }
                      
                    }

               }  

 })

app.component('message',require('./components/message.vue').default);

app.mount('#app')