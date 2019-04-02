// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import './plugins/axios'
import App from './App'
import router from './router'

Vue.config.productionTip = false


//Vue 全局守卫注册
// router.beforeEach((to, from, next) => {
//  // to and from are both route objects. must call `next`.
//   if(to.path == "/login" || to.path == "/register"){
//     next();
//   }else{
//     alert("还没有登录，请先登录！");
//     next("/login");
//   }
// })


/* eslint-disable no-new */
//加载页面
new Vue({
  el: '#app',
  router,
  components: { App },
  template: '<App/>'
})
