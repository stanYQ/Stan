import axios from 'axios'

export const getUsersInfo =()=>{
    return axios.get("http://localhost:3000/users");
}

export const addCustomerInfo = (params) =>{
    return axios.post("http://localhost:3000/users",params);
}

export const getSingleCustomerInfo=(id) =>{
        return axios.get("http://localhost:3000/users/"+id);
}

export const deleteCustomerInfo = (id) =>{
    return axios({
        method:'delete',
        url: "http://localhost:3000/users/"+ id,
    });
}

export const updateCustomerInfo = (params,id) =>{
    return axios({
        method:"put",
        url:"http://localhost:3000/users/" + id,
        data:params
    }
    );
}