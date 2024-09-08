@extends('website.public_layouts.header')
@section('title', 'Book Details')
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
                    <div class="content">
                        <div class="adv d-flex">
                            <span>Adventure</span> <span>Action</span> <span>Thriller</span>
                        </div>
                        <h2>Rich Dad Poor Dad</h2>
                        <div class="info d-flex align-items-center justify-content-between me-3">
                            <div class="author">By: <span>Robert Kiyosaki</span> </div>
                            <div class="rating"><i class="fa-solid fa-star"></i><span>(4.2)</span><span class="ms-1">4.2K</span>
                                <span>Review</span>
                            </div>
                        </div>
                        <div class="rate mt-3"><span class="discount"><del>₹700</del></span><span class="actual ms-3">₹450</span></div>
                        <div class="cover d-flex">
                            <div class="block">
                                <p>Paperback</p>
                                <h3>₹450</h3>
                            </div>
                            <div class="block">
                                <p>Paperback</p>
                                <h3>₹450</h3>
                            </div>
                        </div>
                        <div class="description">
                            <h4>Description</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laboriosam praesentium nemo ut libero ipsum ipsa. Maxime illo eius in saepe, cumque, quo unde corrupti, aliquid aperiam ad omnis dignissimos! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, dolores nostrum, voluptate qui fuga quibusdam minima</p>
                        </div>
                        <div class="buy-now">
                            <a href="{{route('buy.now')}}"><button>Buy Now</button></a>
                            <a href="{{route('cart')}}"><button>Add To Cart</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="top-authors">
        <div class="container">
            <div class="book-heading d-flex  justify-content-between align-items-center">
                <h2>Top Authors</h2>
                <a href="">View All</a>
            </div>
            <div class="owl-carousel owl-theme author-list">
                <div class="block">
                    <div class="top-author-image">
                        <div class="image" style="background:url('{{ asset("website/img/author.png") }}');"></div>
                    </div>
                    <h3>Robert Kiyosaki </h3>
                    <p>Author</p>
                </div>
                <div class="block">
                    <div class="top-author-image">
                        <div class="image" style="background:url('{{ asset("website/img/author.png") }}');"></div>
                    </div>
                    <h3>Robert Kiyosaki </h3>
                    <p>Author</p>
                </div>
                <div class="block">
                    <div class="top-author-image">
                        <div class="image" style="background:url('{{ asset("website/img/author.png") }}');"></div>
                    </div>
                    <h3>Robert Kiyosaki </h3>
                    <p>Author</p>
                </div>
                <div class="block">
                    <div class="top-author-image">
                        <div class="image" style="background:url('{{ asset("website/img/author.png") }}');"></div>
                    </div>
                    <h3>Robert Kiyosaki </h3>
                    <p>Author</p>
                </div>
                <div class="block">
                    <div class="top-author-image">
                        <div class="image" style="background:url('{{ asset("website/img/author.png") }}');"></div>
                    </div>
                    <h3>Robert Kiyosaki </h3>
                    <p>Author</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="product-details">
        <div class="container">
            <h2>Product Details</h2>
            <ul>
                <li>
                    <p>Title</p>
                    <h3>Rich Dad Poor Dad</h3>
                </li>
                <li>
                    <p>Author</p>
                    <h3> Robert Kiyosaki</h3>
                </li>
                <li>
                    <p>SKU</p>
                    <h3> BK0501281</h3>
                </li>
                <li>
                    <p>Size</p>
                    <h3> Small</h3>
                </li>
                <li>
                    <p>EAN</p>
                    <h3> 9780008710637</h3>
                </li>
                <li>
                    <p>Number Of Pages</p>
                    <h3> 463 pages</h3>
                </li>
                <li>
                    <p>Language</p>
                    <h3> English</h3>
                </li>
                <li>
                    <p>Binding</p>
                    <h3> Paperback</h3>
                </li>
                <li>
                    <p>Country Of Origin</p>
                    <h3> USA</h3>
                </li>
                <li>
                    <p>Published Date</p>
                    <h3> 12-Oct 2022</h3>
                </li>
            </li>
            <li>
                <p>Additional Information</p>
                <h3>  Pure breed Shih Tzu.
                    Good body structure.
                    With
                    MKA cert and Microchip.
                    Father from champion
                    lineage.
                </h3>
            </li>
        </ul>
    </div>
</div>
</section>
<section>
    <div class="review-book">
        <div class="container">
            <div class="owl-carousel owl-theme review-sec">
                <div class="block">
                    <div class="info d-flex justify-content-between align-items-center">
                        <div class="info-img">
                            <img src="{{ asset('website/img/r1.png')}}" alt="">
                        </div>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                    </div>
                    <div class="name">
                        <h3>Floyd Miles</h3>
                    </div>
                    <div class="content">
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, dignissimos provident hic aliquid repellendus, tempore facilis, nobis, rem accusamus reprehenderit tenetur maxime esse cum porro consequatur! Odit atque vel asperiores. Lorem ipsum dolor sit amet consectetur adipisicing, elit. Explicabo officiis libero consequatur minus delectus expedita 
                        </p>
                    </div>
                </div>
                <div class="block">
                    <div class="info d-flex justify-content-between align-items-center">
                        <div class="info-img">
                            <img src="{{ asset('website/img/r2.png')}}" alt="">
                        </div>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                    </div>
                    <div class="name">
                        <h3>Ronald Richards</h3>
                    </div>
                    <div class="content">
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, dignissimos provident hic aliquid repellendus, tempore facilis, nobis, rem accusamus reprehenderit tenetur maxime esse cum porro consequatur! Odit atque vel asperiores.
                        </p>
                    </div>
                </div>
                <div class="block">
                    <div class="info d-flex justify-content-between align-items-center">
                        <div class="info-img">
                            <img src="{{ asset('website/img/r3.png')}}" alt="">
                        </div>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                    </div>
                    <div class="name">
                        <h3>Savannah Nguyen</h3>
                    </div>
                    <div class="content">
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, dignissimos provident hic aliquid repellendus, tempore facilis, nobis, rem accusamus 
                        </p>
                    </div>
                </div>
                <div class="block">
                    <div class="info d-flex justify-content-between align-items-center">
                        <div class="info-img">
                            <img src="{{ asset('website/img/r1.png')}}" alt="">
                        </div>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                    </div>
                    <div class="name">
                        <h3>Floyd Miles</h3>
                    </div>
                    <div class="content">
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, dignissimos provident hic aliquid repellendus, tempore facilis, nobis, rem accusamus reprehenderit tenetur maxime esse cum porro consequatur
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="new-arrival">
        <div class="container">
            <div class="book-heading d-flex  justify-content-between align-items-center">
                <h2>Other Books by Robert Kiyosaki</h2>
                <a href="">View All</a>
            </div>
            <div class="arrival d-flex flex-wrap">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="block d-flex">
                        <div class="arrival-image" style="background:url('{{ asset("website/img/arrival1.png") }}');"></div>
                        <div class="content d-flex flex-column justify-content-between">
                            <div class="top-content">
                                <div class="adv d-flex">
                                    <span>Adventure</span> <span>Action</span> <span>Thriller</span>
                                </div>
                                <h2>The Adventures of Huckleberry Finn....</h2>
                                <div class="author">By: <span>Robert Kiyosaki</span> </div>
                                <div class="rating"><i class="fa-solid fa-star"></i><span>(4.2)</span><span class="ms-1">4.2K</span></div>
                            </div>
                            <div class="bottom-content">
                                <div class="rate"><span class="discount"><del>700</del></span><span class="actual">₹450</span></div>
                                <button class="add-cart">Add To Cart</button>
                            </div>
                            <div class="love">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="block d-flex">
                        <div class="arrival-image" style="background:url('{{ asset("website/img/arrival2.png") }}');"></div>
                        <div class="content d-flex flex-column justify-content-between">
                            <div class="top-content">
                                <div class="adv d-flex">
                                    <span>Adventure</span> <span>Action</span> <span>Thriller</span>
                                </div>
                                <h2>Rich Dad Poor Dad</h2>
                                <div class="author">By: <span>Robert Kiyosaki</span> </div>
                                <div class="rating"><i class="fa-solid fa-star"></i><span>(4.2)</span><span class="ms-1">4.2K</span></div>
                            </div>
                            <div class="bottom-content">
                                <div class="rate"><span class="discount"><del>700</del></span><span class="actual">₹450</span></div>
                                <button class="add-cart">Add To Cart</button>
                            </div>
                            <div class="love">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="block d-flex">
                        <div class="arrival-image" style="background:url('{{ asset("website/img/arrival1.png") }}');"></div>
                        <div class="content d-flex flex-column justify-content-between">
                            <div class="top-content">
                                <div class="adv d-flex">
                                    <span>Adventure</span> <span>Action</span> <span>Thriller</span>
                                </div>
                                <h2>The Adventures of Huckleberry Finn....</h2>
                                <div class="author">By: <span>Robert Kiyosaki</span> </div>
                                <div class="rating"><i class="fa-solid fa-star"></i><span>(4.2)</span><span class="ms-1">4.2K</span></div>
                            </div>
                            <div class="bottom-content">
                                <div class="rate"><span class="discount"><del>700</del></span><span class="actual">₹450</span></div>
                                <button class="add-cart">Add To Cart</button>
                            </div>
                            <div class="love">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                            <div class="love">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="new-arrival pt-3">
            <div class="container">
                <div class="book-heading d-flex  justify-content-between align-items-center">
                    <h2>You May Also Like</h2>
                    <a href="">View All</a>
                </div>
                <div class="arrival d-flex flex-wrap">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="block d-flex">
                            <div class="arrival-image" style="background:url('{{ asset("website/img/arrival1.png") }}');"></div>
                            <div class="content d-flex flex-column justify-content-between">
                                <div class="top-content">
                                    <div class="adv d-flex">
                                        <span>Adventure</span> <span>Action</span> <span>Thriller</span>
                                    </div>
                                    <h2>The Adventures of Huckleberry Finn....</h2>
                                    <div class="author">By: <span>Robert Kiyosaki</span> </div>
                                    <div class="rating"><i class="fa-solid fa-star"></i><span>(4.2)</span><span class="ms-1">4.2K</span></div>
                                </div>
                                <div class="bottom-content">
                                    <div class="rate"><span class="discount"><del>700</del></span><span class="actual">₹450</span></div>
                                    <button class="add-cart">Add To Cart</button>
                                </div>
                                <div class="love">
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="block d-flex">
                            <div class="arrival-image" style="background:url('{{ asset("website/img/arrival2.png") }}');"></div>
                            <div class="content d-flex flex-column justify-content-between">
                                <div class="top-content">
                                    <div class="adv d-flex">
                                        <span>Adventure</span> <span>Action</span> <span>Thriller</span>
                                    </div>
                                    <h2>Rich Dad Poor Dad</h2>
                                    <div class="author">By: <span>Robert Kiyosaki</span> </div>
                                    <div class="rating"><i class="fa-solid fa-star"></i><span>(4.2)</span><span class="ms-1">4.2K</span></div>
                                </div>
                                <div class="bottom-content">
                                    <div class="rate"><span class="discount"><del>700</del></span><span class="actual">₹450</span></div>
                                    <button class="add-cart">Add To Cart</button>
                                </div>
                                <div class="love">
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="block d-flex">
                            <div class="arrival-image" style="background:url('{{ asset("website/img/arrival1.png") }}');"></div>
                            <div class="content d-flex flex-column justify-content-between">
                                <div class="top-content">
                                    <div class="adv d-flex">
                                        <span>Adventure</span> <span>Action</span> <span>Thriller</span>
                                    </div>
                                    <h2>The Adventures of Huckleberry Finn....</h2>
                                    <div class="author">By: <span>Robert Kiyosaki</span> </div>
                                    <div class="rating"><i class="fa-solid fa-star"></i><span>(4.2)</span><span class="ms-1">4.2K</span></div>
                                </div>
                                <div class="bottom-content">
                                    <div class="rate"><span class="discount"><del>700</del></span><span class="actual">₹450</span></div>
                                    <button class="add-cart">Add To Cart</button>
                                </div>
                                <div class="love">
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                                <div class="love">
                                    <i class="fa-regular fa-heart"></i>
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
