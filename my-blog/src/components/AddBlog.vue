<template>
  <div id="add-blog">
    <h2>添加博客</h2>
    <form v-if="!submmited">
      <label>博客标题：</label>
      <input type="text" v-model="blog.title" title="请输入博客标题名" required>
      <label>博客内容</label>
      <textarea v-model="blog.content"></textarea>
      <p>分类</p>
      <div id="checkboxs">
        <input type="checkbox" value="Vue.js" v-model="blog.categories">Vue.js
        <input type="checkbox" value="Node.js" v-model="blog.categories">Node.js
        <input type="checkbox" value="React.js" v-model="blog.categories">React.js
        <input type="checkbox" value="Angular4" v-model="blog.categories">Angular4
      </div>
      <p>作者</p>
      <select v-model="blog.author">
        <option v-for="(author,index) in authors" :key="index">{{author}}</option>
      </select>
      <button v-on:click.prevent="post">添加博客</button>
    </form>
    <div v-if="submmited">
      <h3>您的博客已经发表成功！！！</h3>
    </div>

    <div id="preview">
      <h3>博客总览</h3>
      <p>博客标题：{{blog.title}}</p>
      <p>博客内容：</p>
      <p>{{blog.content}}</p>
      <p>博客分类：</p>
      <ul>
        <li v-for="(category,index) in blog.categories" :key="index">{{category}}</li>
      </ul>
      <p>作者：{{blog.author}}</p>
    </div>
  </div>
</template>

<script>
import { addBlogs } from "../api/api.js";
import { getUsers } from "../api/api.js";
import { save } from "../data/data.js";
import { get } from "../data/data.js";
export default {
  name: "AddBlog",
  data() {
    return {
      blog: {
        title: "",
        content: "",
        categories: [],
        author: ""
      },
      authors: [],
      submmited: false
    };
  },

  methods: {
    post() {
      addBlogs({
        title: this.blog.title,
        content: this.blog.content,
        author: this.blog.author,
        categories: this.blog.categories
      })
        .then(result => {
          this.submmited = true;
          get("blogsData").push(result.data);
        })
        .catch(err => {
          console.log(err);
        });
    }
  },
  created() {
    this.authors = [];
    if (get("usersData").length) {
      get("usersData").forEach(element => {
        this.authors.push(element.name);
      });
    } else {
      getUsers()
        .then(result => {
          result.data.forEach(element => {
            this.authors.push(element.name);
          });
          save("usersData", result.data);
        })
        .catch(err => {
          console.log(err);
        });
    }
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
#add-blog * {
  box-sizing: border-box;
}

#add-blog {
  margin: 20px auto;
  max-width: 600px;
  padding: 20px;
}

input[type="text"],
textarea,
select {
  display: block;
  width: 100%;
  padding: 8px;
}

#checkboxs label {
  display: inline-block;
  margin-top: 0;
}

#checkboxs input {
  display: inline-block;
  margin-right: 10px;
}

button {
  display: block;
  margin: 20px 0;
  background: crimson;
  color: #fff;
  border: 0;
  padding: 14px;
  border-radius: 4px;
  font-size: 18px;
  cursor: pointer;
}

#preview {
  padding: 10px 20px;
  border: 1px dotted #ccc;
  margin: 30px 0;
}

h3 {
  margin-top: 10px;
}

textarea {
  height: 200px;
}
</style>
