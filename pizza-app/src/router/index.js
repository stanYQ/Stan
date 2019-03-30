import Vue from 'vue'
import Router from 'vue-router'
import Home from '../components/Home.vue'
import Menu from '../components/Menu.vue'
import Login from '../components/Login.vue'
import Admin from '../components/Admin.vue'
import Register from '../components/Register.vue'
import About from '../components/about/About.vue'
Vue.use(Router);

export default new Router({
  routes: [
    { path: '/', component: Home },
    { path: '/menu', component: Menu },
    { path: '/login', component: Login },
    { path: '/admin', component: Admin },
    { path: '/register', component: Register },
    { path: '/about', component: About}
  ],
  mode:"history",
})