<template>
  <div id="single-blog">
    <h1>{{blog.title}}</h1>
    <pre>{{blog.content}}</pre>
  </div>
</template>

<script>
import { getSingleBlog } from "../api/api.js";
import { get } from "../data/data.js";
export default {
  name: "single-blog",
  data() {
    return {
      id: this.$route.params.id,
      blog: {}
    };
  },
  created() {
    if (get("blogsData").length) {
      get("blogsData").forEach(element => {
        if (element.id == this.id) {
          this.blog = element;
        }
      });
    } else {
      getSingleBlog(this.id)
        .then(result => {
          this.blog = result.data;
        })
        .catch(err => {
          console.log(err);
        });
    }
  }
};
</script>


<style scope="this api replaced by slot-scope in 2.5.0+">
#single-blog {
  max-width: 960px;
  margin: 0 auto;
  padding: 20px;
  background: #eee;
  border: 1px dotted #aaaaaa;
}
</style>
