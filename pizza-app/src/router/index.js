import Vue from 'vue'
import Router from 'vue-router'
import Home from '../components/Home.vue'
import Menu from '../components/Menu.vue'
import Login from '../components/Login.vue'
import Admin from '../components/Admin.vue'
import Register from '../components/Register.vue'
import About from '../components/about/About.vue'


//二级路由
import Contact from '../components/about/Contact.vue'
import Delivery from '../components/about//Delivery.vue'
import History from '../components/about/History.vue'
import OrderingGuide from '../components/about/OrderingGuide.vue'

//三级路由
import Phone from '../components/about/contact/Phone.vue'
import PersonName from '../components/about/contact/PersonName.vue'


Vue.use(Router);
//声明 router
const router = new Router({
  routes: [
    {
      path: '/', name: 'homeLink', components: {
        default:Home,
        "history":History,
        "delivery":Delivery,
        "orderingGuide":OrderingGuide
      }
    },
    { path: '/menu', name: 'menuLink', component: Menu },
    { path: '/login', name: 'loginLink', component: Login },
    { path: '/admin', name: 'adminLink', component: Admin },
    { path: '/register', name: 'registerLink', component: Register },
    {
      path: '/about', name: 'aboutLink', redirect: "/about/contact", component: About,//设置默认路径
      children: [
        {
          path: '/about/contact', name: 'contactLink', redirect: '/about/contact/phone', component: Contact,
          children: [
            { path: '/about/contact/phone', name: 'phoneLink', component: Phone },
            { path: '/about/contact/personName', name: 'personName', component: PersonName }
          ]
        },
        { path: '/about/delivery', name: 'deliveryLink', component: Delivery },
        { path: '/about/history', name: 'historyLink', component: History },
        { path: '/about/orderingGuide', name: 'orderingGuideLink', component: OrderingGuide },
      ]
    },
    { path: "*", redirect: "/" }//如果找不到上方的路由找不到就会走这一条路由
  ],
  mode: "history",
});

//全局守卫
// router.beforeEach((to, from, next) => {
//  // to and from are both route objects. must call `next`.
//   if(to.path == "/login" || to.path == "/register"){
//     next();
//   }else{
//     alert("还没有登录，请先登录！");
//     next("/login");
//   }
// });

export default router;//将router模块export出去