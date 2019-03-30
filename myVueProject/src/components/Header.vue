<template>
  <header v-on:click="changeTitle()">
      <h1>{{title}}</h1>
  </header>
</template>

<script>
export default {
  name: 'app-header',
  props:{
      title:{
          type:String,
          required:true
      }  
  },
  data () {
    return {
      title1:"Vue.js Demo", 
    }
  },
  methods:{
      changeTitle:function(){
        //   
        this.$emit("titleChange","子向父组件传值");//注册titleChange事件
      }
  },
  
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
header{
    background: lightgreen;
    padding: 10px;
}
h1{
    color: #222;
    text-align: center;
}
</style>

