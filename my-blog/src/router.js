import Vue from 'vue'
import ShowBlog from './components/ShowBlogs.vue'
import AddBlog from './components/AddBlog.vue'
import SingleBlog from './components/SingleBlog.vue'
import Login from './components/Login.vue'
import VueRouter from 'vue-router'
// import { getLoginActive } from './api/api'
// import { save } from './data/data'
// import { get } from './data/data'

Vue.use(VueRouter)
const routes = [
  { path: "/", component: ShowBlog, meta: { title: "主页" } },
  { path: "/Add", component: AddBlog, meta: { requiesAuth: true, title: "addBlog" } },
  { path: "/blog/:id", component: SingleBlog, meta: { title: "SingleBlog" } },
  { path: "/login", component: Login, meta: { title: "Login" } }
]

const Router = new VueRouter({
  routes,
  mode: "history",
})

// Router.beforeEach((to, from, next) => {
//   if (to.meta.title) {
//     document.title = to.meta.title;
//   }
//   if (to.meta.requiesAuth) {
//     if (!get("loginActiveData")) {
//       getLoginActive()
//         .then((result) => {
//           if (result.data.active) {
//             save("loginActiveData", result.data);
//             next();
//           } else {
//             alert("还未登录 请先登录");
//             next('/login');
//           }
//         }).catch((err) => {
//           console.log(err)
//         });
//     } else {
//       if (get("loginActiveData").active) {
//         next();
//       } else {
//         alert("还未登录 请先登录");
//         next('/login');
//       }
//     }
//   } else {
//     next();
//   }
// })



export default Router;