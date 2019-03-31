<template>
  <div class="card text-dark bg-light mb-3">
    <div class="card-header">联系我们</div>
    <div class="card-body">
      <h4 class="card-title">联系我们</h4>
      <p class="card-text">
        email:724760554@qq.com
        <br>WeChat:18250783082
      </p>
      <router-link :to="{name:'phoneLink'}">电话</router-link>
      <router-link to="/about/contact/personName">用户</router-link>
      <router-view></router-view>
    </div>
  </div>
</template>