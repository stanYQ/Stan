<template>
  <div class="details container">
    <router-link to="/" class="btn btn-default">返回</router-link>
    <h1 class="page-header">{{customer.name}}
      <span class="pull-right">
        <router-link class="btn btn-primary" v-bind:to="'/edit/'+customer.id">
          编辑
        </router-link>
        <button class="btn btn-danger" v-on:click="deleteCustomer()">删除</button>
      </span>
    </h1>
    <ul class="list-group">
      <li class="list-group-item">
        <span class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;&nbsp;
        {{customer.phone}}
      </li>
      <li class="list-group-item">
        <span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;&nbsp;
        {{customer.email}}
      </li>
    </ul>
    <ul class="list-group">
      <li class="list-group-item">
        <span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;&nbsp;
        {{customer.education}}
      </li>
      <li class="list-group-item">
        <span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;&nbsp;
        {{customer.graduactionschool}}
      </li>
      <li class="list-group-item">
        <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;
        {{customer.profession}}
      </li>
      <li class="list-group-item">
        <span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;&nbsp;
        {{customer.profile}}
      </li>
    </ul>
  </div>
</template>

<script>
import { getSingleCustomerInfo } from "@/api/api.js";
import { deleteCustomerInfo} from "@/api/api.js";
export default {
  name: "customerdetails",
  data() {
    return {
      customer: {}
    };
  },
  methods: {
    fetchCustomer(id) {
      getSingleCustomerInfo(id)
        .then(result => {
          this.customer = result.data;
        })
        .catch(err => {});
    },
    deleteCustomer(){
      deleteCustomerInfo(this.customer.id)
      .then(result=>{
        console.log(result)
        this.$router.push({path:'/',query:{alert:"用户删除成功！"}});
      })
    }
  },
  created() {
    this.fetchCustomer(this.$route.params.id);
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

.details{
    text-align: left;
}
</style>