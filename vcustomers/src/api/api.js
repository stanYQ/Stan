import axios from 'axios'

export const getUsersInfo =()=>{
    return axios.get("http://localhost:3000/users");
}