<template>
    
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<form class="form-inline">
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
</form>

<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">
    <li>
        <router-link :to="{name:'Register'}" class="nav-item nav-link">Register</router-link>
    </li>
    <li>
        <router-link :to="{name:'Login'}" class="nav-item nav-link">Login</router-link>
    </li>
    <li v-if="auth=='loggedin'" class="nav-item">
        <router-link class="nav-link" to="/profile">Profile</router-link>
    </li>
    <li v-if="auth=='loggedin'" class="nav-item">
        <a class="nav-link" href="" v-on:click="logout">Logout</a>
    </li>
</ul>

</nav>
<!-- End of Topbar -->
</template>
  
  <script>
  export default {
    name: 'Navbar',
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
  