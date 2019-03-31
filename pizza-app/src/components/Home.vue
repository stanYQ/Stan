<template>
  <div>
    <h1>Home</h1>
    <button v-on:click="goToMenu" class="btn btn-success">Let's go to menu</button>
  </div>
</template>

<script>
export default {
    methods:{
        goToMenu:function(){
            this.$router.replace({name:'menuLink'});
        }
    }
}
</script>