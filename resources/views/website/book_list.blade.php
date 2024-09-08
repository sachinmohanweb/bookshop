@extends('website.public_layouts.header')
@section('title', 'Book List')
@section('content')
<section>
    <div class="book-list-banner">
        <div class="container">
            <div class="book-banner">
                <img src="{{ asset('website/img/book-list.png')}}" alt="">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="book-list">
        <div class="container">
            <div class="book-list-sec d-flex flex-wrap">
                <div class="col-lg-3 col-12">
                    <button class="filter">Filters</button>
                    <div class="sort">
                        <div class="search-box">
                            <div class="search-container">
                                <!-- Search bar button-->
                                <button class="search-button">
                                    <img src="{{ asset('website/img/u_search.png')}}" alt="">
                                </button>
                                <input type="text" id="search-input" class="search-input" placeholder="Search...">
                            </div>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Genre
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Fiction
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Non Fiction
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Memoir
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Historical fiction
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Non Fiction
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Pricing
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="range">
                                            <span id="demo"></span>
                                            <input type="range" min="0" max="100000" value="2500" class="slider" id="myRange">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Rating
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                4<i class="fa-solid fa-star"></i> & above
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                3<i class="fa-solid fa-star"></i> & above
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Author
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Leo Tolstoy
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                J. K. Rowling
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Stephen King
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Jane Austen
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Ernest Hemingway
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Language
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Malayalam
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                English
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Hindi
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Arabic
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Bengali
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        Bestseller
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                New Books
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Premium Books
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Book In A Letter
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Surprise Stack
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Classic Books
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-12">
                    <div class="once-book">
                        <div class="once-nav d-flex justify-content-between align-items-center ms-2 mb-4">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#All-Books" type="button" role="tab" aria-controls="home" aria-selected="true">All Books</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#Fiction" type="button" role="tab" aria-controls="profile" aria-selected="false">Fiction</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#Non-Fiction" type="button" role="tab" aria-controls="contact" aria-selected="false">Non-Fiction</button>
                                </li>
                            </ul>
                            <div class="once-sort">
                                <select name="cars" id="cars">
                                    <option value="1">Sort by: Popular</option>
                                    <option value="2">Price -- Low to High</option>
                                    <option value="3">Price -- High to Low</option>
                                    <option value="4">Newest First</option>
                                </select>
                            </div>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="All-Books" role="tabpanel" aria-labelledby="home-tab">
                                <div class="arrival d-flex flex-wrap">
                                    <div class="col-md-6 col-12">
                                        <div class="block d-flex">
                                            <div class="arrival-image" style="background:url('{{ asset("website/img/arrival1.png") }}');"></div>
                                            <div class="content d-flex flex-column justify-content-between">
                                                <div class="top-content">
                                                    <div class="adv d-flex">
                                                        <span>Adventure</span> <span>Action</span> <span>Thriller</span>
                                                    </div>
                                                    <a href="{{route('book.details')}}">
                                                        <h2>The Adventures of Huckleberry Finn....</h2>
                                                    </a>
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
                                                    <div class="seller">Best Seller</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
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
                                    <div class="col-md-6 col-12">
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
                                    <div class="col-md-6 col-12">
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
                                    <div class="col-md-6 col-12">
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
                                    <div class="col-md-6 col-12">
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
                            <div class="tab-pane fade" id="Fiction" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="arrival d-flex flex-wrap">
                                    <div class="col-md-6 col-12">
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
                                    <div class="col-md-6 col-12">
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
                                    <div class="col-md-6 col-12">
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
                                                    <div class="seller">Best Seller</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
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

                                    <div class="col-md-6 col-12">
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
                                    <div class="col-md-6 col-12">
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
                                </div></div>
                                <div class="tab-pane fade" id="Non-Fiction" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="arrival d-flex flex-wrap">
                                        <div class="col-md-6 col-12">
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
                                                        <div class="seller">Best Seller</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
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
                                        <div class="col-md-6 col-12">
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
                                        <div class="col-md-6 col-12">
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
                                        <div class="col-md-6 col-12">
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
                                        <div class="col-md-6 col-12">
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