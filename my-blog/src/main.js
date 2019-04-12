// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import Router from './router'
import axios from 'axios'
Vue.config.productionTip = false

Vue.prototype.$axios = axios;
//axios全局
// axious.defaults.baseURL ='' 默认的URL
// axious.defaults.header  默认的请求头

//全局自定义指令
Vue.directive('rainbow', {
  bind(el, binding, vnode) {
    el.style.color = "#" + Math.random().toString(16).slice(2, 8);
  }
});

//全局过滤器 
// Vue.filter("snippet",function(value){
//   return value.slice(0,100) + "...";
// });

/* eslint-disable no-new */
new Vue({
  el: '#app',
  components: { App },
  template: '<App/>',
  router: Router,
})
