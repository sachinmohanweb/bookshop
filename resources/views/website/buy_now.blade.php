@extends('website.public_layouts.header')
@section('title', 'Buy Now')
@section('content')

<section>
    <div class="book-detail-sec">
        <div class="container">
            <div class="book-detail d-flex flex-wrap">
                <div class="col-lg-6 col-12">
                    <div id="sync1" class="slider owl-carousel">
                        <div class="item">
                            <img src="{{ asset('website/img/slide/1.png')}}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('website/img/slide/2.png')}}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('website/img/slide/3.png')}}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('website/img/slide/1.png')}}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('website/img/slide/2.png')}}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('website/img/slide/3.png')}}" alt="">
                        </div>
                    </div>
                    <div id="sync2" class="navigation-thumbs owl-carousel">
                        <div class="item">
                            <img src="{{ asset('website/img/slide/thumb/1.png')}}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('website/img/slide/thumb/2.png')}}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('website/img/slide/thumb/3.png')}}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('website/img/slide/thumb/1.png')}}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('website/img/slide/thumb/2.png')}}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('website/img/slide/thumb/3.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="cart-sec">
                        <h2>Shopping Cart</h2>
                        <div class="block d-flex mt-3 flex-wrap">
                            <div class="col-md-3 col-12">
                                <img src="{{ asset('website/img/slide/1.png')}}" alt="">
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
                        <div class="sub-total d-flex justify-content-between align-items-center">
                            <p>Subtotal </p>
                            <h4> ₹ <span>450.00</span></h4>
                        </div>
                        <div class="buy-now w-100">
                            <a href="{{route('purchase.details')}}"><button>Buy Now</button></a>
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
