const state = {
    apiToken: localStorage.getItem('apiToken'),
}
const getters = {}
const actions = {
    login({commit, dispatch}, userData) {
        // console.log(process.env.MIX_API_URL);
        axios.post(process.env.MIX_API_URL + 'auth/login', userData).then(res => {
            console.log(res.data);
            localStorage.setItem('apiToken', res.data.user.access_token);
        }).catch(
            localStorage.removeItem('apiToken')
        )


    }
}
const mutations = {}

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}
