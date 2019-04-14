<template>
  <div class="add container">
    <h1 class="page-header">添加用户</h1>
    <form v-on:submit="addCustomer">
      <div class="well right">
        <h4>用户信息</h4>
        <div class="form-group">
          <label>姓名</label>
          <input type="text" class="form-control" placeholder="name" v-model="customer.name">
        </div>
        <div class="form-group">
          <label>电话</label>
          <input type="text" class="form-control" placeholder="phone" v-model="customer.phone">
        </div>
        <div class="form-group">
          <label>邮箱</label>
          <input type="text" class="form-control" placeholder="email" v-model="customer.email">
        </div>
        <div class="form-group">
          <label>学历</label>
          <input
            type="text"
            class="form-control"
            placeholder="education"
            v-model="customer.education"
          >
        </div>
        <div class="form-group">
          <label>毕业学校</label>
          <input
            type="text"
            class="form-control"
            placeholder="graduationschool"
            v-model="customer.graduactionschool"
          >
        </div>
        <div class="form-group">
          <label>职业</label>
          <input
            type="text"
            class="form-control"
            placeholder="profession"
            v-model="customer.profession"
          >
        </div>
        <div class="form-group">
          <label>个人简介</label>
          <textarea rows="10" class="form-control" placeholder="profile" v-model="customer.profile"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">添加</button>
      </div>
    </form>
  </div>
</template>

<script>
import {addCustomerInfo} from '@/api/api.js'
export default {
  name: "add",
  data() {
    return {
      customer: {},
    };
  },
  methods: {
    addCustomer(e) {
      if (!this.customer.name || !this.customer.email || !this.customer.phone) {
        alert("请输入对应信息");
      } else {
        let newCustomer = {
          name: this.customer.name,
          phone: this.customer.phone,
          email: this.customer.email,
          education: this.customer.education,
          graduactionschool: this.customer.graduactionschool,
          profession: this.customer.profession,
          profile: this.customer.profile
        }
        addCustomerInfo(newCustomer).then((result) => {
          this.$router.push({path:"/",query:{alert:"用户信息添加成功！"}});
        }).catch((err) => {
          console.log(err);
        });
         e.preventDefault();//阻止默认事件
      }
      e.preventDefault();
      
    }
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.right {
  text-align: left;
}
</style>