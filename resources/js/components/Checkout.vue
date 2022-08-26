<template>
  <div>
    <li  v-for="cart in carts" :key="cart.id" class="list-group-item d-flex justify-content-between lh-sm">
      <div>
        <h6 class="my-0">Product name ({{ cart.qty }})</h6>
        <small class="text-muted">{{ cart.product.name }}</small>
      </div>
      <span class="text-muted">{{ (cart.price * cart.qty) | format_number }}</span>
    </li>
    <li class="list-group-item d-flex justify-content-between bg-light">
      <div class="text-danger">
        <h6 class="my-0">Delivery</h6>
      </div>
      <span class="text-success">+ {{ 5 | format_number }}</span>
    </li>
    <li class="list-group-item d-flex justify-content-between">
      <span>Total (PEN)</span>
      <strong>{{ total | format_number }}</strong>
    </li>
  </div>
</template>

<script>
export default {
  name: "checkout",
  data() {
    return {
      sub_total: "",
    };
  },
  mounted() {
    let sum = 0;
    for (let i = 0; i < this.carts.length; i++) {
      sum += this.carts[i].price * this.carts[i].qty;
    }
    this.sub_total = sum;
  },
  computed: {
    total() {
      return this.sub_total + 5;
    },
  },
  props: {
    carts: {
      required: true,
      typ: Object,
    },
  },
};
</script>