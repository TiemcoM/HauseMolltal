import router from "../../router";

const state = {
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
        axios.get(process.env.MIX_API_URL + 'contact/get', {headers: {'Authorization': `Bearer ${localStorage.getItem('apiToken')}`}}).then(res => {
            context.commit('setContact', res.data)
        }).catch(err => {
        })
    },
    deleteContact(context, id) {
        axios.delete(process.env.MIX_API_URL + 'contact/delete', {headers: {'Authorization': `Bearer ${localStorage.getItem('apiToken')}`}, data: {id}}).then(res => {
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
