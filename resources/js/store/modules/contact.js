import router from "../../router";

const state = {
    apiToken: localStorage.getItem('apiToken'),
    contact: [],
}
const getters = {}
const mutations = {
    setContact (state, data) {
        state.contact = data
    }
}
const actions = {
    getContact(context) {
        const access_token = localStorage.getItem('apiToken');
        axios.get(process.env.MIX_API_URL + 'contact/get', {headers: {'Authorization': `Bearer ${access_token}`}}).then(res => {
            context.commit('setContact', res.data)
        }).catch(err => {
        })
    }
}


export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}
