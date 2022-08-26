<template>
    <a href="/cart" class="position-relative bg-transparent text-whit border-0">
    <i class="fas fa-shopping-cart text-white" style="font-size: 18px;"></i>
    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 10px;">
        {{ $store.getters.cart_count }}
        <span class="visually-hidden">unread messages</span>
    </span>
    </a>
  
</template>

<script>
    export default {
        name: 'cart-icon',
        data(){
            return {
            }
        },
        async mounted(){
            let response = await axios.get('    /qty/products');
            let qty = response.data.qty;
            this.$store.dispatch('changeCountProducts', qty)
        }
    }
</script>

