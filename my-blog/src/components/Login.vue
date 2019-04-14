<template>
  <div id="login">
    <h1>Login</h1>
   <form  v-on:submit.prevent = "login">
      <input type="text" required="required" placeholder="用户名" v-model="name">
      <input type="password" required="required" placeholder="密码" v-model="password">
      <button class="but" type="submit">登录</button>
   </form>
  </div>
</template>

<script>
import Router from './../router.js'
import { Login } from "./../api/api.js";
import { save } from "./../data/data.js";
import { updateLoginActive } from "./../api/api.js";
import eventBus from './../api/eventBus.js'
export default {
  data() {
    return {
      name: "",
      password: "",
    };
  },

  methods: {
    login: function() {
      if(this.name =="" || this.password == ""){
        return;
      }
      Login(this.name, this.password)
        .then(result => {
          if (result.data.length) {
            updateLoginActive({
              id:1,
              active: true,
              user: this.name,
              userid: result.data[0].id
            })
              .then(result => {
               alert("success");
               save("loginActiveData",result.data);
               eventBus.$emit("monitor",result.data.active);
               this.$router.push("/Add");
              })
              .catch(err => {
                console.log(err);
              });
          } else {
            alert("用户不存在或密码错误！");
          }
        })
        .catch(err => {
          console.log(err);
        });
    },
  }
};
</script>

<style scoped>
#login {
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -150px 0 0 -150px;
  width: 300px;
  height: 300px;
}

#login h1 {
  color: #312e3d;
  text-shadow: 0 0 10px;
  letter-spacing: 1px;
  text-align: center;
}

h1 {
  font-size: 2em;
  margin: 0.67em 0;
}

input {
  width: 278px;
  height: 18px;
  margin-bottom: 10px;
  outline: none;
  padding: 10px;
  font-size: 13px;
  color: #2d2d3f;
  text-shadow: 1px 1px 1px;
  border-top: 1px solid #312e3d;
  border-left: 1px solid #312e3d;
  border-right: 1px solid #312e3d;
  border-bottom: 1px solid #56536a;
  border-radius: 4px;
  background-color: #fff;
}

.but {
  width: 300px;
  min-height: 20px;
  display: block;
  background-color: #4a77d4;
  border: 1px solid #3762bc;
  color: #fff;
  padding: 9px 14px;
  font-size: 15px;
  line-height: normal;
  border-radius: 5px;
  margin: 0;
}
</style>

