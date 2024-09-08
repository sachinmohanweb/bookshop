@extends('website.public_layouts.header')
@section('title', 'Buy Now')
@section('content')


<section>
    <div class="purchase-details-info">
        <div class="container">
            <div class="book-detail d-flex flex-wrap mb-5">
                <div class="col-lg-6 col-12">
                    <div class="purchase-detail mt-3 flex-wrap">
                        <h2>Delivery Method</h2>
                        <div class="standard-delivery d-flex justify-content-between flex-wrap">
                            <div class="delivery">
                                <h3>Standard Delivery </h3>
                                <p>Within 4-5 working day’s</p>
                            </div>
                            <div class="price">
                                FREE
                            </div>
                        </div>
                        <h2>Delivery Details</h2>
                        <form action="">
                            <div class="form-group d-flex f1">
                                <input type="text" placeholder="First Name * " >
                                <input type="text" placeholder="Last Name *" class="b-left-none">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Email Address * " class="w-100">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Phone No:" class="w-100">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Address (street, house number, etc) *" class="w-100">
                            </div>
                            <div class="form-group d-flex f1">
                                <input type="text" placeholder="Town/City *" >
                                <input type="text" placeholder="Postcode *" class="b-left-none">
                            </div>
                            <div class="form-check mt-4 mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label ms-2" for="flexCheckDefault">
                                    Dealer
                                </label>
                            </div>
                            <div class="proceed-now w-100">
                                <button>Proceed To Buy</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="cart-sec purchase-sec">
                        <h2>Shopping Cart</h2>
                        <div class="block d-flex flex-wrap mt-3">
                            <div class="col-md-3 col-12">
                                <img src="{{ asset('website/img/slide/1.png')}}"  alt="">
                            </div>
                            <div class="col-md-9 col-12">
                                <div class="content">
                                    <div class="info-name d-flex align-items-center justify-content-between flex-wrap w-100">
                                        <div class="name">
                                            <h3>Rich Dad Poor Dad</h3>
                                            <p>By: Robert Kiyosaki</p>
                                        </div>
                                        <div class="price">
                                            <h4> ₹ <span>450.00</span></h4>
                                        </div>
                                    </div>
                                    <div class="number d-flex justify-content-between">
                                        <form action="">
                                            <div class="qty">
                                                <button class="cart-qty-minus" aria-hidden="true">-</button>
                                                <input type="text" name="qty" class="plus-ic" maxlength="12" value="0" class="input-text qty" />
                                                <button class="cart-qty-plus" aria-hidden="true">+</button>
                                            </div>
                                        </form>
                                        <div class="remove">
                                            <a href="">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block d-flex flex-wrap mt-3">
                            <div class="col-md-3 col-12">
                                <img src="{{ asset('website/img/slide/1.png')}}"  alt="">
                            </div>
                            <div class="col-md-9 col-12">
                                <div class="content">
                                    <div class="info-name d-flex align-items-center justify-content-between flex-wrap w-100">
                                        <div class="name">
                                            <h3>Rich Dad Poor Dad</h3>
                                            <p>By: Robert Kiyosaki</p>
                                        </div>
                                        <div class="price">
                                            <h4> ₹ <span>450.00</span></h4>
                                        </div>
                                    </div>
                                    <div class="number d-flex justify-content-between">

                                        <form action="">
                                            <div class="qty">
                                                <button class="cart-qty-minus" aria-hidden="true">-</button>
                                                <input type="text" name="qty" class="plus-ic" maxlength="12" value="0" class="input-text qty" />
                                                <button class="cart-qty-plus" aria-hidden="true">+</button>
                                            </div>
                                        </form>

                                        <div class="remove">
                                            <a href="">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="overview">
                            <p>Overview</p>
                        </div>
                        <div class="total">
                            <div class="info d-flex justify-content-between mb-4">
                                <div class="name">Subtotal</div>
                                <div class="total-info"> ₹ <span>450.00</span></div>
                            </div>
                            <div class="info d-flex justify-content-between">
                                <div class="name">Standard Delivery <p>(1 ITEM)</p></div>
                                <div class="total-info">FREE</div>
                            </div>
                            <div class="info d-flex justify-content-between">
                                <div class="name"><h4>TOTAL</h4></div>
                                <div class="total-info"> ₹ <span>450.00</span></div>
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
