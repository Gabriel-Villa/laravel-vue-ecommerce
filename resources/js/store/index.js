import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

const store = new Vuex.Store({
  state: {
    qty: 0
  },
  mutations: {
    increment (state, qty) {
        state.qty = parseInt(qty);
    }
  },
  actions: {
    changeCountProducts(context, qty){
        context.commit('increment', qty);
    }
  },
  getters: {
    cart_count(state){
        return state.qty;
    }
  }
})

export default store;