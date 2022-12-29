import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'
import Homepage from '@/pages/Homepage'
import Register from '@/pages/Register'
import Login from '@/pages/Login'

Vue.use(Router)

export default new Router({
  mode: 'history',
  hash: false,
  routes: [
    {
      path: '/',
      name: 'HelloWorld',
      component: HelloWorld
    },
    {
      path: '/homepage',
      name: 'Homepage',
      component: Homepage
    },
    {
      path: '/register',
      name: 'Register',
      component: Register
    },  
    {
      path: '/login',
      name: 'Login',
      component: Login
    }
  ]
})
