@extends('website.public_layouts.header')
@section('title', 'Buy Now')
@section('content')

<section>
    <div class="shoping-cart-sec">
        <div class="container">
            <h2>Shopping Cart</h2>
            <div class="shoping-detail d-flex flex-wrap">
                <div class="col-lg-6 col-12">
                    <div class="cart-sec purchase-sec">

                        <div class="block d-flex flex-wrap mt-3">
                            <div class="col-md-3 col-12">
                                <img src="img/slide/1.png" alt="">
                            </div>
                            <div class="col-md-9 col-12">
                                <div class="content">
                                    <div class="info-name">
                                        <div class="name">
                                            <h3>Rich Dad Poor Dad</h3>
                                            <p>By: Robert Kiyosaki</p>
                                        </div>

                                    </div>
                                    <div class="number">
                                        <div class="remove mb-4">
                                            <a href="">Remove</a>
                                        </div>
                                        <form action="">
                                            <div class="qty">
                                                <button class="cart-qty-minus" aria-hidden="true">-</button>
                                                <input type="text" name="qty" class="plus-ic" maxlength="12" value="0">
                                                <button class="cart-qty-plus" aria-hidden="true">+</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="shop-overview d-flex justify-content-end">
                        <div class="overview">
                            <h2>Overview</h2>
                            <div class="info d-flex justify-content-between">
                                <div class="name">Subtotal</div>
                                <div class="total-info"> ₹ <span>450.00</span></div>
                            </div>

                            <div class="info d-flex justify-content-between">
                                <div class="name"><h4>TOTAL <span>(1 ITEM)</span></h4> </div>
                                <div class="total-info"> ₹ <span>450.00</span></div>
                            </div>
                            <div class="buy-now">
                                <button>
                                    Buy Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')

@endsection
