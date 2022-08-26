import Vue from 'vue';
import Vuex from 'vuex';
Vue.use(Vuex);

import cart from './modules/cart.js'
import notification from './modules/notification.js'

const store = new Vuex.Store({
    modules: {
        cart: cart,
        notification: notification
    },
});

export default store;