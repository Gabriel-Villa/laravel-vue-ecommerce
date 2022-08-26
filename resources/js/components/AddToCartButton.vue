<template>
    <button type="button" class="btn btn-success m-0 mx-2" style="height: 34px;" @click="addToCart">
        Add
    </button>
</template>

<script>
    export default {
        name: 'add-to-cart-button',
        props: {
            product: {
                required: true,
                type: Object
            }
        },
        data(){
            return {

            }
        },
        methods: {
            async addToCart(){
                try {
                    let response = await axios.post('/cart', {'product_id': this.product.product_id});
                    let qty = response.data.qty;
                    this.$store.dispatch('changeCountProducts', qty);
                    alert("Producto agregado");                     
                } catch (error) {
                    alert("Ocurrio un erro al agregar al carrito");                     
                }
            }
        },
        mounted() {
            console.log('Add to cart.')
        }
    }
</script>
