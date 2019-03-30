<template>
  <div id="app">
    <div id="container">
      <app-header></app-header>
    </div>
    <div id="container">
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
import Header from './components/Header';

export default {
  name: 'app',
  components:{
    "app-header":Header,//也可以不加引号 使用小驼峰命名法  appHeader
  }
}
</script>

<style>

</style>
