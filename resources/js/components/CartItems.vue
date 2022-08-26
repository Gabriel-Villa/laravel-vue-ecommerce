<template>
  <section class="h-100 h-custom">
    <div class="container h-100 py-5">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <table class="table table-hover table-sm">
            <thead>
              <tr>
                <th scope="col" class="h5">Product</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Total</th>
                <!-- <th scope="col">Action</th> -->
              </tr>
            </thead>
            <tbody>
              <tr v-for="cart in data" :key="cart.id">
                <th scope="row">
                  <div class="d-flex align-items-center">
                    <img
                      :src="'/images/products/' + cart.product.image"
                      class="img-fluid rounded-3"
                      style="width: 120px"
                      alt="Book"
                    />
                    <div class="flex-column ms-4">
                      <p class="mb-2">{{ cart.product.name }}</p>
                    </div>
                  </div>
                </th>
                <td class="align-middle">
                  <div class="d-flex flex-row">
                    <p>{{ cart.qty }}</p>
                    <!-- <button
                      class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                    >
                      <i class="fas fa-minus"></i>
                    </button>

                    <input
                      id="form1"
                      min="0"
                      name="quantity"
                      :value="cart.qty"
                      type="number"
                      class="form-control form-control-sm"
                      style="width: 50px"
                    />

                    <button
                      class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                    >
                      <i class="fas fa-plus"></i>
                    </button> -->
                  </div>
                </td>
                <td class="align-middle">
                  <p class="mb-0" style="font-weight: 500">
                    {{ cart.price | format_number }}
                  </p>
                </td>
                <td class="align-middle">
                  <p class="mb-0" style="font-weight: 500">
                    {{ (cart.price * cart.qty) | format_number }}
                  </p>
                </td>
                <!-- <td class="align-middle">
                  <button type="button" class="btn btn-danger" @click="deleteItemCart(cart.cart_id)">
                    Remove <i class="fa fa-trash mx-1"></i>
                  </button>
                </td> -->
              </tr>
            </tbody>
          </table>
        </div>
        <div class="table">
          <thead>
            <tr>
              <th>Sub Total</th>
              <th>Shipping</th>
              <th>Total (tax included)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th class="fw-normal text-end">{{ sub_total | format_number }}</th>
              <th class="fw-normal text-end">{{ 5 | format_number }}</th>
              <th class="text-end">{{ total | format_number }}</th>
            </tr>
          </tbody>
        </div>
      </div>
      <a href="/checkout" class="btn btn-success w-25">Checkout</a>
    </div>
  </section>
</template>

<script>
export default {
  name: "cart-items",
  data() {
    return {
      sub_total: "",
      data: []
    };
  },
  props: {
    carts: {
      required: true,
      typ: Object,
    },
  },
  methods: {
    // async deleteItemCart(id){
    //     let res = await axios.post('/cart/remove/item',{cart_id: id});
    //     let qty = res.data.qty;
        
    //     let new_data = this.data.map((el) => el.cart_id == id ? el.qty = el.qty-1 : el);
       
    //     this.data = new_data

    //     this.$store.dispatch('changeCountProducts', qty);
    // }
  },
  mounted() {
    this.data = this.carts;

    let sum = 0;
    for (let i = 0; i < this.data.length; i++) {
      sum += this.data[i].price * this.data[i].qty;
    }
    this.sub_total = sum;
  },
  computed: {
    total() {
      return this.sub_total + 5;
    },
  },
};
</script>