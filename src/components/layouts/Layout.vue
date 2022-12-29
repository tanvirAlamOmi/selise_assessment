<template>
   
   <div id="wrapper">

<!-- <Sidebar></Sidebar> -->

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">

        <Navbar></Navbar>
        
        <div class="container-fluid">
            <h1 class="h3 mb-2 text-gray-800"></h1>
            <slot></slot>
        </div>
    </div>

    <Footer></Footer>

</div>
</div>

</template>
  
  <script>
  import '../../assets/css/sb-admin-2.css';
  import Footer from './Footer.vue';
  import Navbar from './Navbar.vue';
  export default {
    components: {
        Footer,
        Navbar
        
    },
    name: 'Layout',
    data () {
      return {
        msg: 'Welcome to Your Vue.js App'
      }
    }
  }
  </script>
  
  <!-- Add "scoped" attribute to limit CSS to this component only -->
  <style scoped>
  </style>
  