import router from "../../router";

const state = {
    apiToken: localStorage.getItem('apiToken'),
    contactDetails: [],
}
const getters = {}
const mutations = {
    setContactDetails (state, data) {
        state.contactDetails = data
    }
}
const actions = {
    getContacDetailst(context) {
        const access_token = localStorage.getItem('apiToken');
        axios.get(process.env.MIX_API_URL + 'contactDetails/get', {headers: {'Authorization': `Bearer ${access_token}`}}).then(res => {
            context.commit('setContactDetails', res.data)
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
