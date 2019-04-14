<template>
  <div id="show-blogs">
    <h1>博客总览</h1>
    <input type="text" placeholder="搜索" v-model="search">
    <!--默认值为 搜索 过滤器返回所有的blog-->
    <div class="single-blog" v-for="(blog, index) in filteredBlogs" :key="index">
      <router-link v-bind:to="'/blog/'+ blog.id">
        <h2 v-rainbow>{{blog.title}}</h2>
      </router-link>
      <!--实现局部自定义属性-->
      <pre>{{blog.content | snippet }}</pre><!--接收textarea的内容怎么输入 就按照该格式输出-->
      <!--实现局部过滤器 sinppet-->
    </div>
  </div>
</template>

<script>
import { getBlogs } from "../api/api.js";
import { save } from "../data/data";
import { get } from "../data/data";

export default {
  name: "ShowBlog",
  data() {
    return {
      blogs: [], //当前blogs的数据存在但是 single-blog 数据不是直接读取这里的
      search: ""
    };
  },
  created() {
    // this.$http
    //   .get("./../../static/posts.json")
    //   .then(result => {
    //     this.blogs = result.data.slice(0, 10);
    //   })
    //   .catch(err => {
    //     console.log(err);
    //   });
    //axios 替代 resource
    if (!get("blogsData").length) {
      getBlogs()
        .then(result => {
          //箭头函数 this 指向上一层 不指向 未知区域
          this.blogs = result.data;
          save("blogsData", result.data);
        })
        .catch(err => {
          console.log(err);
        });
    } else {
      this.blogs = get("blogsData");
    }
  },
  computed: {
    filteredBlogs: function() {
      return this.blogs.filter(blog => {
        //
        return blog.title.match(this.search);
        /*如果为true 将会 将这个 blog return到上一层
         *
         *如果为false 将blogs 中所有 blog 返回
         */
      });
    }
  },
  //局部过滤器定义
  filters: {
    snippet: function(value) {
      if (value.length >= 100) {
        return value.slice(0, 100) + "...";
      }
    }
  },
  //局部自定义属性
  directives: {
    rainbow: {
      bind(el, binding, vnode) {
        el.style.color =
          "#" +
          Math.random()
            .toString(16)
            .slice(2, 8);
      }
    }
  }
};
</script>

<style scoped>
#show-blogs {
  max-width: 800px;
  margin: 0 auto;
}

input[type="text"] {
  width: 100%;
}

.single-blog {
  padding: 20px;
  margin: 20px 0;
  box-sizing: border-box;
  background: #eee;
  border: 1px dotted #aaaaaa;
}

#show-blogs a {
  text-decoration: none;
  color: #444;
}

input[type="text"] {
  padding: 8px;
  width: 100%;
  box-sizing: border-box;
}
</style>
