<!--模板-->
<template>
  <!--有且只有一个根标签-->
  <div id="Home">
    <app-header :title="title" v-on:titleChange="updateTitle($event)"></app-header>
    <users v-bind:users="users"></users>
     <users v-bind:users="users"></users>
    <app-footer :title="title"></app-footer>
  </div>
</template>
<!--行为-->
<script>
//局部注册组件
import Users from "./Users";
import Header from "./Header";
import Footer from "./Footer";
//注册Helloworld
export default {
  name: "Home",
  components: {
    "users": Users,
    "app-header":Header,
    "app-footer":Footer
  },

  data() {
    return {
      users:[],
      title:"传值的是一个值，（number string Boolean）",
    };
  },

  methods:{
    updateTitle: function(title){
      this.title =  title;
    }
  },

  created(){
    this.$http.get("http://jsonplaceholder.typicode.com/users")
    .then((data)=>{
      this.users = data.body;
    });
  }
};
</script>
<!--样式-->
<style scoped>

</style>
