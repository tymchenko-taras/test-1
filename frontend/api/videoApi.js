import ApiBase from './apiBase'

class VideoApi extends ApiBase{

    static async getList(){
        let response = await this.instance.get(`videos`)
        return response.data
    }

    static async getItem(id){
        let response = await this.instance.get(`videos/${id}`)
        return response.data
    }

}

export default VideoApi