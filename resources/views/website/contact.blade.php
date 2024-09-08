@extends('website.public_layouts.header')
@section('title', 'Contact')
@section('content')
 
<section>
    <div class="once-contact">
        <div class="container">
            <div class="contact-us">
                <h2>Contact Us</h2>
                <p>Any question or remarks? Just write us a message!</p>
                <div class="contact-block d-flex flex-wrap">
                    <div class="col-lg-5 col-12">
                        <div class="contact-information">
                            <h3>Contact Information</h3>
                            <h4>Say something to start a live chat!</h4>
                            <div class="info d-flex align-items-center">
                                <img src="{{ asset('website/img/phone.png')}}" alt="">
                                <a href="tel:+1012 3456 789">+1012 3456 789</a>
                            </div>
                            <div class="info d-flex align-items-center">
                                <img src="{{ asset('website/img/email.png')}}" alt="">
                                <a href="mailto:">demo@gmail.com</a>
                            </div>
                            <div class="info d-flex align-items-center">
                                <img src="{{ asset('website/img/location.png')}}" alt="">
                                <a href="#">132 Dartmouth Street Boston, Massachusetts 02156 United States</a>
                            </div>
                            <ul class="social d-flex">
                                <li><a href=""><img src="{{ asset('website/img/tw-c.png')}}" alt=""></a></li>
                                <li><a href=""><img src="{{ asset('website/img/insta-c.png')}}" alt=""></a></li>
                                <li><a href=""><img src="{{ asset('website/img/ply.png')}}" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 col-12">
                        <div class="contact-form">
                            <form action="">
                                <div class="form-group d-flex flex-wrap">
                                    <div class="col-lg-6 col-12">
                                        <div class="block me-3">
                                            <label for="">First Name</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="block ms-3">
                                            <label for="">Last Name</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="block me-3">
                                            <label for="">Email</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="block ms-3">
                                            <label for="">Phone Number</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h3>Select Subject?</h3>
                                    <div class="radio d-flex align-items-center ">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label ms-2" for="flexRadioDefault1">
                                                General Inquiry
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            <label class="form-check-label ms-2" for="flexRadioDefault2">
                                                Vendor
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            <label class="form-check-label ms-2" for="flexRadioDefault2">
                                                Author
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="block mt-4">
                                            <label for="">Message</label>
                                            <textarea name="" id=""></textarea>
                                        </div>
                                        <div class="col-12">
                                            <div class="contact-btn d-flex justify-content-end">
                                                <button>Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
      