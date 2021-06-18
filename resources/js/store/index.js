import Vue from 'vue'
import Vuex from 'vuex'
import user from './modules/user'
import contact from './modules/contact'
import settings from './modules/settings'


Vue.use(Vuex)

const debug = process.env.NODE_ENV !== 'production'

export default new Vuex.Store({
    modules: {
        user,
        contact,
        settings
    },
    strict: debug,
})
