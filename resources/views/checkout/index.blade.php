@extends('layouts.app')

<script src="https://sdk.mercadopago.com/js/v2"></script>

@php
    require base_path('vendor/autoload.php');
    MercadoPago\SDK::setAccessToken(config('services.mercadopago.token'));

    $preference = new MercadoPago\Preference();
    $shipments = new MercadoPago\Shipments();

    $shipments->cost = 5;
    $shipments->mode = 'not_specified';
    
    $preference->shipments= $shipments;

    foreach ($carts as $key => $cart) {
        $item = new MercadoPago\Item();
        $item->title = $cart->product->name;
        $item->quantity = $cart->qty;
        $item->unit_price = $cart->price;

        $products[] = $item;
    }

    $preference->items = $products;
    $preference->save();

    $preference->back_urls = array(
        "success" => "https://www.tu-sitio/success",
        "failure" => "http://www.tu-sitio/failure",
        "pending" => "http://www.tu-sitio/pending"
    );
    $preference->auto_return = "approved";

@endphp

<script>
    var mp = new MercadoPago("{{ config('services.mercadopago.key') }}", {
        locale: 'es-PE'
    });

    const checkout = mp.checkout({
        preference: {
            id: "{{ $preference->id }}",
        },
        shipments: {
            "cost": 5,
            "mode": "not_specified",
        }
    });
</script>

@section('content')
    <section id="homepage" style="margin-top: 80px;">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Your cart</span>
                        <cart-icon />
                    </h4>
                    <ul class="list-group mb-3">
                        <checkout :carts="{{ $carts }}" />
                    </ul>
                </div>
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Billing address</h4>
                    <form class="needs-validation was-validated" novalidate="">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">First name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value=""
                                    required="" />
                                <div class="invalid-feedback">Valid first name is required.</div>
                                <div data-lastpass-icon-root="true"
                                    style=" position: relative !important; height: 0px !important; width: 0px !important; float: left !important;">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value=""
                                    required="" />
                                <div class="invalid-feedback">Valid last name is required.</div>
                            </div>

                            <div class="col-12">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="1234 Main St"
                                    required="" />
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
                                <input type="text" class="form-control" id="zip" placeholder="" required="" />
                                <div class="invalid-feedback">Zip code required.</div>
                            </div>
                        </div>

                        <hr class="my-4" />

                        <h4 class="mb-3">Payment</h4>

                        <hr class="my-4" />

                        <button class="w-100 btn btn-primary btn-lg" type="button" onclick="checkout.open()">
                            Continue to checkout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
