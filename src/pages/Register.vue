<template>
    
    <Layout>
        <div class="hello">
         <h1>{{ msg }}</h1>
   
         <form @submit.prevent="save">
           <div class="form-group">
               <label for="first_name">First Name</label>
               <input type="text" v-model = 'user.first_name' class="form-control" id="name" aria-describedby="first name" placeholder="Enter first name">
           </div> 
           <div class="form-group">
               <label for="last_name">Last Name</label>
               <input type="text" v-model = 'user.last_name' class="form-control" id="last_name" aria-describedby="last name" placeholder="Enter last name">
           </div>
           
           <div class="form-group">
               <label for="email">Email</label>
               <input type="email"  v-model = 'user.email' class="form-control" id="email" aria-describedby="email" placeholder="Enter email">
           </div>
           
           <div class="form-group">
               <label for="password">Password</label>
               <input type="password"  v-model = 'user.password' class="form-control" id="password" aria-describedby="password" placeholder="Enter password">
           </div>
           <button type="submit" class="btn btn-primary">Save</button>
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
     name: 'Register',
     components: {
         Layout
     },
     data () {
       return {
         msg: 'Register',
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
             var page = 'http://localhost:8000/api/register';
             axios.post(page, this.user)
             .then(
                 ({data}) => {
                     alert('user Created');
                     this.$router.push({name: 'Login'});
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
   