import axios from "axios";
import JwtService from "./jwt.service";
const ApiService = {
  init() {
    axios.defaults.headers.common[
      "Authorization"
    ] = `Bearer ${JwtService.getToken()}`;
    axios.defaults.headers.common["Content-Type"] = `application/json`;
    axios.defaults.headers.common["Accept"] = `application/json`;
    axios.defaults.headers.common["Access-Control-Allow-Origin"] = `*`;
  },
  TwitterService(){
    return 'http://localhost:9009/api/v1/';
  },
  post(resource, params) {
    return axios.post(`${resource}`, params);
  },
  update(resource, params) {
    return axios.put(`${resource}`, params);
  },
  delete(resource, params) {
    return axios.delete(resource);
  },
};

export default ApiService;
