
let data = {
    "loginActiveData":null,//登录状态的缓存
    "blogsData":[],//博客内容
    "usersData":[],
}

export const save = (name, newData) =>{
      data[name] = newData;  
}

export const get = (dataName) =>{
    return data[dataName];
}
