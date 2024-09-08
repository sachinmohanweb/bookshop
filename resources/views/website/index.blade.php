@extends('website.public_layouts.header')
@section('title', 'Home')
@section('content')

<section>
    <div class="owl-carousel owl-theme banner">
        <div class="banner-block">
            <img src="{{ asset('website/img/banner1.png')}}" alt="">
        </div>
        <div class="banner-block">
            <img src="{{ asset('website/img/banner2.png')}}" alt="">
        </div>
        <div class="banner-block">
            <img src="{{ asset('website/img/banner3.png')}}" alt="">
        </div>
    </div>
</section>
<section>
    <div class="all-books">
        <div class="container">
            <div class="books d-flex flex-wrap">
                <div class="col-lg-6 col-12">
                    <div class="block me-2" style="background: url('{{ asset("website/img/al1.png") }}');">
                        <div class="content">
                            <h2>All Books</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry s
                                standard dummy text ever since
                            </p>
                            <a href="">View All</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="block mb-4  ms-3 h-250" style="background: url('{{ asset("website/img/al2.png") }}');">
                        <div class="content">
                            <h2>Fictional</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry s
                                standard dummy text ever since
                            </p>
                            <a href="">View All</a>
                        </div>
                    </div>
                    <div class="block h-250 ms-3 " style="background: url('{{ asset("website/img/al3.png") }}');">
                        <div class="content">
                            <h2>Non Fictional</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry s
                                standard dummy text ever since
                            </p>
                            <a href="">View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="genre">
        <div class="container">
            <div class="book-heading d-flex  justify-content-between align-items-center">
                <h2>Genre</h2>
                <a href="">View All</a>
            </div>
            <div class="owl-carousel owl-theme genre-list">
                <div class="block">
                    <img src="{{ asset('website/img/genre/1.png')}}" alt="">
                    <div class="content">
                        <p>Action  <br> & <br> Adventure</p>
                    </div>
                </div>
                <div class="block">
                    <img src="{{ asset('website/img/genre/2.png')}}" alt="">
                    <div class="content">
                        <p>
                            Mystery
                        </p>
                    </div>
                </div>
                <div class="block">
                    <img src="{{ asset('website/img/genre/3.png')}}" alt="">
                    <div class="content">
                        <p>
                            Horror
                        </p>
                    </div>
                </div>
                <div class="block">
                    <img src="{{ asset('website/img/genre/4.png')}}" alt="">
                    <div class="content">
                        <p>
                            Historical <br> Fiction
                        </p>
                    </div>
                </div>
                <div class="block">
                    <img src="{{ asset('website/img/genre/5.png')}}" alt="">
                    <div class="content">
                        <p>
                            Science<br> &<br> Technology
                        </p>
                    </div>
                </div>
                <div class="block">
                    <img src="{{ asset('website/img/genre/6.png')}}" alt="">
                    <div class="content">
                        <p>
                            History
                        </p>
                    </div>
                </div>
                <div class="block">
                    <img src="{{ asset('website/img/genre/4.png')}}" alt="">
                    <div class="content">
                        <p>
                            Historical <br> Fiction
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
            <h2>New Arrival</h2>
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
                        <div class="price">
                            <div class="off">20%OFF</div>
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
            <div class="col-lg-4 col-md-6 col-12">
                <div class="block d-flex">
                    <div class="arrival-image" style="background:url('{{ asset("website/img/arrival3.png") }}');"></div>
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
        </div>
    </div>
</section>
<section>
    <div class="add">
        <div class="container">
            <div class="add-block">
                <img src="{{ asset('website/img/add.png')}}" alt="">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="new-arrival">
        <div class="container">
            <div class="book-heading d-flex  justify-content-between align-items-center">
                <h2>Best Sellers</h2>
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
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="block d-flex">
                        <div class="arrival-image" style="background:url('{{ asset("website/img/arrival3.png") }}');"></div>
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
            </div>
        </div>
    </section>
<section>
    <div class="author-month">
        <div class="container">
            <div class="month d-flex flex-wrap">
                <div class="col-lg-8 col-12">
                    <div class="content">
                        <h2>Robert Kiyosaki </h2>
                        <p>Robert Toru Kiyosaki, born on April 8, 1947, in Hilo, Hawaii, is a well-known figure in
                            personal finance and self-help literature. Raised in a family of educators, his early
                            exposure to different perspectives on money and success influenced his later work.
                            After serving as a helicopter gunship pilot in the Marine Corps during the Vietnam War,
                            he engaged in several business ventures, including a company that sold nylon and
                            Velcro wallets for surfers. In 1997, Kiyosaki published “Rich Dad Poor Dad,” a book that
                            presents the financial philosophies of two father figures in his life and explores themes
                            such as the importance of financial education and the value of entrepreneurial
                        thinking.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="author-image-block" style="background:url('{{ asset("website/img/author.png") }}');">
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
    <div class="add">
        <div class="container">
            <div class="add-block">
                <img src="{{ asset('website/img/add.png')}}" alt="">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="faq">
        <div class="container">
            <h2>FAQ,s</h2>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            By when can the book get delivered
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus voluptatibus vitae delectus perferendis aliquam ratione porro voluptas, aperiam unde odit quis sequi quod eius mollitia quidem at placeat, repudiandae, non! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo nulla eius ipsum pariatur est assumenda
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                By when can the book get delivered
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus voluptatibus vitae delectus perferendis aliquam ratione porro voluptas, aperiam unde odit quis sequi quod eius mollitia quidem at placeat, repudiandae, non! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo nulla eius ipsum pariatur est assumenda
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                By when can the book get delivered
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus voluptatibus vitae delectus perferendis aliquam ratione porro voluptas, aperiam unde odit quis sequi quod eius mollitia quidem at placeat, repudiandae, non! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo nulla eius ipsum pariatur est assumenda
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
