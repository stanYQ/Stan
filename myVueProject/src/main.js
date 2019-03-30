// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'
import HelloWorld from './components/HelloWorld.vue'
import Home from './components/Home.vue'

// import Users from './components/Users.vue'

Vue.config.productionTip = false
Vue.use(VueRouter);
Vue.use(VueResource);//
//

//配置路由
const router = new VueRouter({
  routes:[
    {path:"/",component:Home},//根路径
    {path:"/helloworld",component:HelloWorld}//第二层的helloworld
  ],
  mode:"history",//除去'/#/'
  
})
// 全局注册组件
// Vue.component("users",Users);
/* eslint-disable no-new */
new Vue({
  el: '#app',
  components: { App },//与App产生关联
  template: '<App/>',
  router,
})
//index.html(入口文件) -> main.js（渲染vue） -> App.vue