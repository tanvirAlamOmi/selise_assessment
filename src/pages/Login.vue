<template>
    
    <Layout>
        <div class="hello">
         <h1>{{ msg }}</h1>
   
         <form @submit.prevent="save">
           <div class="form-group">
               <label for="email">Email</label>
               <input type="email"  v-model = 'user.email' class="form-control" id="email" aria-describedby="email" placeholder="Enter email">
           </div>
           
           <div class="form-group">
               <label for="password">Password</label>
               <input type="password"  v-model = 'user.password' class="form-control" id="password" aria-describedby="password" placeholder="Enter password">
           </div>
           <button type="submit" class="btn btn-primary">Log in</button>
         </form>
   
       </div>
    </Layout>
   </template>
   
   <script>
   import Vue from 'vue';
   import axios from 'axios';
   import Layout from '../components/layouts/Layout.vue';
   Vue.use(axios);
 
   export default {
     name: 'Login',
     components: {
         Layout
     },
     data () {
       return {
         msg: 'Log in',
         users : {},
         user: {
             id: '',
             first_name: '',
             last_name: '',
             email: '',
             password: ''
         }
       }
     },
 
     methods: {
         save()
         {
             this.saveData() ;
             
         },
 
         saveData()
         {
             var page = 'http://localhost:8000/api/login';
             axios.post(page, this.user)
             .then(
                 ({data}) => {
                     alert('user logedin');
                     localStorage.setItem('usertoken', data.token)
                      this.email = ''
                      this.password = ''

                     this.$router.push({name: 'Homepage'});
                 }
             )
         },
     }
   }
   </script>
   
   <!-- Add "scoped" attribute to limit CSS to this component only -->
   <style scoped>
   h1, h2 {
     font-weight: normal;
   }
 
   td {
     text-align: left;
   }
   </style>
   