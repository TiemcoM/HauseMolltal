import router from "../../router";

const state = {
    apiToken: localStorage.getItem('apiToken'),
}
const getters = {}
const actions = {
    login({commit, dispatch}, userData) {
        axios.post(process.env.MIX_API_URL + 'auth/login', userData).then(res => {
            localStorage.setItem('apiToken', res.data.user.access_token);
            router.push('Home');
        }).catch(err => {
            localStorage.removeItem('apiToken')
            console.warn(err)
        })
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
