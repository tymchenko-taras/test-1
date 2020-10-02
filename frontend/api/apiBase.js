import * as axios from 'axios'

class ApiBase {
    static instance = axios.create({
        baseURL: 'http://localhost:8080'
    })
}

export default ApiBase