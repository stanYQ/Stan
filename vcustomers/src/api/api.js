import axios from 'axios'

export const getUsersInfo =()=>{
    return axios.get("http://localhost:3000/users");
}

export const addCustomerInfo = (params) =>{
    return axios.post("http://localhost:3000/users",params);
}