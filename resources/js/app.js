
require('./bootstrap');

window.Vue = require('vue').default;

import store from './store/index.js';

import ExampleComponent from './components/ExampleComponent.vue';
import AddToCartButton from './components/AddToCartButton.vue';
import CartIcon from './components/CartIcon.vue';
import CartItems from './components/CartItems.vue';
import Checkout from './components/Checkout.vue';

Vue.component('example-component', ExampleComponent);
Vue.component('add-to-cart-button', AddToCartButton);
Vue.component('cart-icon', CartIcon);
Vue.component('cart-items', CartItems);
Vue.component('checkout', Checkout);

Vue.filter('format_number', function (value) {
    if (!value) return 'S/ 0';
    return `S/ ${parseFloat(value).toFixed(2)}`;
});

const app = new Vue({
    el: '#app',
    store
});
