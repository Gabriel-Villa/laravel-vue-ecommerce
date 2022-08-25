<template>
  <section class="h-100 h-custom">
    <div class="container h-100 py-5">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col" class="h5">Product</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Total</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="cart in carts" :key="cart.id">
                <th scope="row">
                  <div class="d-flex align-items-center">
                    <img
                      src="images/products/1.jpg"
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
                    <button
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
                    </button>
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
                <td class="align-middle">
                  <button type="button" class="btn btn-danger">
                    Remove <i class="fa fa-trash"></i>
                  </button>
                </td>
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
    };
  },
  props: {
    carts: {
      required: true,
      typ: Object,
    },
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
};
</script>