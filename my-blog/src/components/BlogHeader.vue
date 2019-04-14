<template>
  <nav>
    <ul>
      <li>
        <router-link to="/" exact>博客</router-link>
      </li>
      <li v-if="active">
        <router-link to="/Add" exact>写博客</router-link>
      </li>
      <li v-if="!active">
        <router-link to="/login" exact>登录</router-link>
      </li>
      <li v-if="active">
        <a v-on:click="quit">退出登录</a>
      </li>
    </ul>
  </nav>
</template>

<script>
import { get } from "./../data/data.js";
import { getLoginActive } from "./../api/api.js";
import { save } from "./../data/data.js";
import { updateLoginActive } from "./../api/api.js";
import eventBus from "../api/eventBus.js";
export default {
  name: "blog-header",
  data() {
    return {
      active: false
    };
  },
  created() {
    this.acceptActive();
    if (get("loginActiveData")) {
      this.active = get("loginActiveData").active;
    } else {
      getLoginActive()
        .then(result => {
          this.active = result.data[0].active;
          save("loginActiveData", result.data);
        })
        .catch(err => {
          console.log(err);
        });
    }
  },
  methods: {
    quit: function() {
      updateLoginActive({
        id: 1,
        active: false,
        user: "",
        userid: null
      })
        .then(result => {
          save("loginActiveData", result.data);
          this.active = result.data.active;
          this.$router.push("/");
        })
        .catch(err => {
          console.log(err);
        });
    },
    //获取兄弟组建的值
    acceptActive: function() {
      eventBus.$on("monitor", message => {
        this.active = message;
      });
    }
  }
};
</script>

<style scoped>
ul {
  list-style: none;
  text-align: center;
  margin: 0;
}

li {
  display: inline-block;
  margin: 0 10px;
}

a {
  color: #ffffff;
  text-decoration: none;
  padding: 12px;
  border-radius: 5px;
  cursor: pointer;
}

nav {
  background: crimson;
  padding: 30px 0;
  margin-bottom: 40px;
}

.router-link-active {
  background: rgba(255, 255, 255, 0.8);
  color: #444444;
}
</style>

