import VideoApi from "../api/videoApi";

export default {
  state: () => ({
    items: [],
    item: {
      // id: int,
      // title: video title,
      // description: video desc,
      // videoId: string wistia vide id,
    },
    error: ""
  }),

  mutations:{
    setItems(state, value) {
      state.items = value;
    },
    setItem(state, value) {
      state.item = value;
    },
    setError(state, value) {
      state.error = value;
    }
  },

  actions:{
    async loadItems({commit}){
      try {
        commit('setError', "")
        let data = await VideoApi.getList()
        if(data !== undefined && data.data != undefined) {
          commit('setItems', data.data)
        } else {
          throw new Error("Invalid response")
        }
      } catch (e) {
        commit('setError', "Sorry, error loading videos")
      }
    },
    async loadItem({commit}, id){
      try {
        console.log(id)
        commit('setError', "")
        let data = await VideoApi.getItem(id)
        if(data !== undefined && data.data != undefined) {
          commit('setItem', data.data)
        } else {
          throw new Error("Invalid response")
        }
      } catch (e) {
        commit('setError', "Sorry, error loading the video")
      }
    }
  }
}
