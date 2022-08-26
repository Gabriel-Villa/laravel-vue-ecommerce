export default {
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
}