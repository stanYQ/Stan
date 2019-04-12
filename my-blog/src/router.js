import Vue from 'vue'
import ShowBlog from './components/ShowBlogs.vue'
import AddBlog from './components/AddBlog.vue'
import SingleBlog from './components/SingleBlog.vue'
import VueRouter from 'vue-router'
import {getLoginActive} from './api/api'
import {save} from './data/data'
import {get} from './data/data'

Vue.use(VueRouter)
const routes = [
  { path: "/", component: ShowBlog, meta: { title: "主页" } },
  { path: "/Add", component: AddBlog, meta: { requiesAuth: true, title: "addBlog" } },
  { path: "/blog/:id", component: SingleBlog, meta: { title: "SingleBlog" } }
]

const Router = new VueRouter({
  routes,
  mode: "history",
})

Router.beforeEach((to, from, next) => {
  if (to.meta.title) {
    document.title = to.meta.title;
  }
  if (to.meta.requiesAuth) {
    if(get("loginActiveData").length == 0){
      getLoginActive()
      .then((result) => {
        if (result.data[0].active) {
          save("loginActiveData", result.data);
          next();
        } else {
          alert("friar")
        }
      }).catch((err) => {
        console.log(err)
      });
    }else{
       if (get("loginActiveData")[0].active) {
          next();
        } else {
          alert("friar")
        }
    }
    
  } else {
    next();
  }
})



export default Router;