<template>
  <div class="details container">
    <h1 class="page-header">{{customer.name}}</h1>
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
          console.log(this.customer);
        })
        .catch(err => {});
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