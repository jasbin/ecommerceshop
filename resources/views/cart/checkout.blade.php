@extends('layouts.app')


@section('content')

    <div class="checkout-area ptb-100">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <form action="{{route('orders.store')}}" method="POST">
                        <div class="checkbox-form">
                            <h3>Billing Details</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Full Name <span class="required">*</span></label>
                                        <input type="text" name="shipping_fullname" id="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>State</label>
                                        <input type="text" name="shipping_state" id="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Town/City <span class="required">*</span></label>
                                        <input type="text" name="shipping_city" id="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Full Address <span class="required">*</span></label>
                                        <input type="text" name="shipping_address" id="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Zip <span class="required">*</span></label>
                                        <input type="text" name="shipping_zipcode" id="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <input type="text" name="shipping_phone" id="">
                                        <input type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <h4>Payment option</h4>
                                <div class="checkout-form-list">
                                    <label class="form-check-label">
                                    </label>
                                    <input type="radio" class="form-check-input" name="payment_method" id="" value="cash_on_delivery">
                                    Cash on delivery

                                    <label class="form-check-label">
                                    </label>
                                    <input type="radio" class="form-check-input" name="payment_method" id="" value="paypal">
                                    Paypal
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="your-order">
                        <h3>Your order</h3>
                        <div class="your-order-table table-responsive">
                            <table>
                                <thead>
                                <tr>
                                    <th class="product-name">Product</th>
                                    <th class="product-total">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="cart_item">
                                    <td class="product-name">
                                        Vestibulum suscipit <strong class="product-quantity"> × 1</strong>
                                    </td>
                                    <td class="product-total">
                                        <span class="amount">£165.00</span>
                                    </td>
                                </tr>
                                <tr class="cart_item">
                                    <td class="product-name">
                                        Vestibulum dictum magna	<strong class="product-quantity"> × 1</strong>
                                    </td>
                                    <td class="product-total">
                                        <span class="amount">£50.00</span>
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr class="cart-subtotal">
                                    <th>Cart Subtotal</th>
                                    <td><span class="amount">£215.00</span></td>
                                </tr>
                                <tr class="order-total">
                                    <th>Order Total</th>
                                    <td><strong><span class="amount">£215.00</span></strong>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="payment-method">
                            <div class="payment-accordion">
                                <div class="panel-group" id="faq">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5 class="panel-title"><a data-toggle="collapse" aria-expanded="true" data-parent="#faq" href="#payment-1">Direct Bank Transfer.</a></h5>
                                        </div>
                                        <div id="payment-1" class="panel-collapse collapse show">
                                            <div class="panel-body">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5 class="panel-title"><a class="collapsed" data-toggle="collapse" aria-expanded="false" data-parent="#faq" href="#payment-2">Cheque Payment</a></h5>
                                        </div>
                                        <div id="payment-2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5 class="panel-title"><a class="collapsed" data-toggle="collapse" aria-expanded="false" data-parent="#faq" href="#payment-3">PayPal</a></h5>
                                        </div>
                                        <div id="payment-3" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-button-payment">
                                    <input type="submit" value="Place order">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>

@endsection
