import Vue from 'vue'
import Router from 'vue-router'
import Customers from '@/components/Customers'
import About from '@/components/About'

Vue.use(Router)

export default new Router({
  routes: [
    {path:"/", component:Customers},
    {path:"/about", component:About}
  ],
  mode:"history"
})
