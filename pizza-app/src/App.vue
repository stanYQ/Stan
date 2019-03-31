<template>
  <div id="app">
    <div id="container">
      <app-header></app-header>
    </div>
    <div id="container">
      <router-view></router-view>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <router-view name="orderingGuide"></router-view>
        </div>
         <div class="col-sm-12 col-md-4">
          <router-view name="history"></router-view>
        </div>
         <div class="col-sm-12 col-md-4">
          <router-view name="delivery"></router-view>
        </div>
      </div>
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
