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
    },
    logout() {
        localStorage.removeItem('apiToken')
        router.push('Login');
    },
    checkAuth() {
        const access_token = localStorage.getItem('apiToken');
        return new Promise((resolve, reject) => {
            if ((!localStorage.getItem('apiToken'))) {
                reject()
            } else {
                axios.get(process.env.MIX_API_URL + 'user/get', {headers: {'Authorization': `Bearer ${access_token}`}}).then(res => {
                    resolve()
                }).catch(err => {
                    localStorage.removeItem('apiToken')
                    reject()
                })
            }
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
