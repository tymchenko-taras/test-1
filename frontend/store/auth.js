import UserApi from "../api/userApi";

export default {
  state: () => ({
    loggedIn: false,
    error: ""
  }),

  mutations:{
    setLoggedIn(state, value) {
      state.loggedIn = value;
    },
    setError(state, value) {
      state.error = value;
    }
  },

  actions:{
    async login({commit}, username, password){
      try {
        commit('setError', "")
        let data = await UserApi.login(username, password)
        commit('setLoggedIn', true)
      } catch (e) {
        commit('setError', "Sorry, that username is not found")
      }
    }
  }
}
