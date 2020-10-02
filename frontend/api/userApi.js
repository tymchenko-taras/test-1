import ApiBase from './apiBase'

class UserApi extends ApiBase{

    static async login(username, password){
        let response = await this.instance.post(`login`, {username, password})
        return response.data
    }

}

export default UserApi