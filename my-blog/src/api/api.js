import axios from 'axios'


//判断登录状态  
export const getLoginActive=()=>{
    return axios.get("http://localhost:3000/loginActive");
}

//更新登录状态
export const updateLoginActive=(data)=>{
    return axios({
        method:"put",
        url:"http://localhost:3000/loginActive/1",
        data:data
    });
}

//获取所有博客内容
export const getBlogs = () =>{
    return axios.get("http://localhost:3000/blogs");
}
//获取单个博客内容
export const getSingleBlog = (id) =>{
    return axios.get('http://localhost:3000/blogs/'+ id);
}

//添加博客
export const addBlogs = (centent) =>{
    return axios.post("http://localhost:3000/blogs",centent);
}

//获取所有用户
export const getUsers = () =>{
    return axios.get("http://localhost:3000/users");
}

export const Login = (user,password) =>{
    return axios.get("http://localhost:3000/users",{
        params:{
            name:user,
            password:password
        }
    });
}