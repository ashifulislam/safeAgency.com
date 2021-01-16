require('./bootstrap');

window.Vue = require('vue');
import { Form, HasError, AlertError } from 'vform';
import swal from 'sweetalert2'


import Vue from 'vue'

import VueChatScroll from 'vue-chat-scroll'
Vue.use(VueChatScroll)



window.swal = swal;

const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', swal.stopTimer)
        toast.addEventListener('mouseleave', swal.resumeTimer)
    }
})
window.toast = toast;



window.Fire=new Vue();

window.Form= Form;

Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

//Registered
import VueRouter from 'vue-router'
Vue.use(VueRouter)


let routes = [

    { path: '/agentsProfile', component: require('./components/AgentsProfile.vue').default },
    { path: '/createAgentProfile', component: require('./components/CreateAgentProfile.vue').default },
    { path: '/customerProfile', component: require('./components/CustomerProfile.vue').default },
    { path: '/customer', component: require('./components/Customer.vue').default },
    // { path: 'Message', component: require('./components/Message.vue').default },

]




const router = new VueRouter({

    routes // short for `routes: routes`
})
Vue.component('message', require('./components/Message.vue').default);
const pcoded = new Vue({
    el: '#pcoded',
    router,
    data:{
        message:'',
        chat:{
            message:[],
            user:[],
            time:[],
        }
    },

    methods:
        {
            printme(){
                window.print();
            },
            send() {

                if (this.message.length != 0) {
                   this.chat.message.push(this.message);
                   this.chat.user.push('you');
                   this.chat.time.push(this.getTime());

                    axios.post('send', {
                        message:this.message
                    })
                        .then(response=> {
                            console.log(response);
                            this.message='';
                        })
                        .catch(error=> {
                            console.log(error);
                        });






                }


            },


            sendUpdate(){

                if (this.message.length != 0) {
                    this.chat.message.push(this.message);
                    this.chat.user.push('you');
                    this.chat.time.push(this.getTime());

                        axios.post('sendToCandidate', {
                            message:this.message
                        })
                            .then(response=> {
                                console.log(response);
                                this.message='';
                            })
                            .catch(error=> {
                                console.log(error);
                            });




                }


            },

           getTime(){
                let time=new Date();
                return time.getHours()+':'+time.getMinutes();
           }

        },

    mounted() {

          Echo.channel('chat').
             listen('ChatEvent',(e)=>{


                  this.chat.message.push(e.message);
                  this.chat.user.push(e.user);
                  this.chat.time.push(this.getTime());


         })

   }


});

