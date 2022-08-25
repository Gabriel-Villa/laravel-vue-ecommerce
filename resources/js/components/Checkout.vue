<template>
    <section id="homepage">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Your cart</span>
                    <span class="badge bg-primary rounded-pill">3</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <h6 class="my-0">Product name</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <h6 class="my-0">Second product</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$8</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <h6 class="my-0">Third item</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between bg-light">
                    <div class="text-success">
                        <h6 class="my-0">Promo code</h6>
                        <small>EXAMPLECODE</small>
                    </div>
                    <span class="text-success">−$5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                    <span>Total (USD)</span>
                    <strong>$20</strong>
                    </li>
                </ul>

                <form class="card p-2">
                    <div class="input-group">
                    <input type="text" class="form-control" placeholder="Promo code" />
                    <button type="submit" class="btn btn-secondary">Redeem</button>
                    </div>
                </form>
                </div>
                <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Billing address</h4>
                <form class="needs-validation was-validated" novalidate="">
                    <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">First name</label>
                        <input
                        type="text"
                        class="form-control"
                        id="firstName"
                        placeholder=""
                        value=""
                        required=""
                        />
                        <div class="invalid-feedback">Valid first name is required.</div>
                        <div
                        data-lastpass-icon-root="true"
                        style="
                            position: relative !important;
                            height: 0px !important;
                            width: 0px !important;
                            float: left !important;
                        "
                        ></div>
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Last name</label>
                        <input
                        type="text"
                        class="form-control"
                        id="lastName"
                        placeholder=""
                        value=""
                        required=""
                        />
                        <div class="invalid-feedback">Valid last name is required.</div>
                    </div>

                    <div class="col-12">
                        <label for="address" class="form-label">Address</label>
                        <input
                        type="text"
                        class="form-control"
                        id="address"
                        placeholder="1234 Main St"
                        required=""
                        />
                        <div class="invalid-feedback">
                        Please enter your shipping address.
                        </div>
                    </div>

                    <div class="col-md-5">
                        <label for="country" class="form-label">Country</label>
                        <select class="form-select" id="country" required="">
                        <option value="">Choose...</option>
                        <option>United States</option>
                        </select>
                        <div class="invalid-feedback">Please select a valid country.</div>
                    </div>

                    <div class="col-md-4">
                        <label for="state" class="form-label">State</label>
                        <select class="form-select" id="state" required="">
                        <option value="">Choose...</option>
                        <option>California</option>
                        </select>
                        <div class="invalid-feedback">Please provide a valid state.</div>
                    </div>

                    <div class="col-md-3">
                        <label for="zip" class="form-label">Zip</label>
                        <input
                        type="text"
                        class="form-control"
                        id="zip"
                        placeholder=""
                        required=""
                        />
                        <div class="invalid-feedback">Zip code required.</div>
                    </div>
                    </div>

                    <hr class="my-4" />

                    <h4 class="mb-3">Payment</h4>

                    <hr class="my-4" />

                    <button class="w-100 btn btn-primary btn-lg" type="submit">
                    Continue to checkout
                    </button>
                </form>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'checkout'
};
</script>