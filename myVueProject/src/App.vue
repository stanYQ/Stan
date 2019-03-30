<!--模板-->
<template>
  <!--有且只有一个根标签-->
  <div id="app">
    <ul>
      <!-- <li><a href="/">home</a></li>
      <li><a href="/helloworld">helloworld</a></li> -->
      <li><router-link to="/">home</router-link></li>
      <li><router-link to="/helloworld">helloworld</router-link></li>
    </ul>
    <router-view></router-view>
  </div>
</template>
<!--行为-->
<script>
//局部注册组件
import Users from "./components/Users";
import Header from "./components/Header";
import Footer from "./components/Footer";
//注册Helloworld
export default {
  name: "App",
  components: {
   
  },
  data() {
    return {
     
    };
  },
  methods:{
   
  }
};
</script>
<!--样式-->
<style scoped>

</style>
