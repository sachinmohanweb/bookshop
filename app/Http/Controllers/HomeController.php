<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;

class HomeController extends Controller
{

    public function home_page() : View
    {
        return view('website.index');
    }

    public function book_list() : View
    {
        return view('website.book_list');
    }

    public function book_details() : View
    {
        return view('website.book_detail');
    }

    public function contact() : View
    {
        return view('website.contact');
    }

    public function buy_now() : View
    {
        return view('website.buy_now');
    }

    public function cart() : View
    {
        return view('website.shoping_cart');
    }

    public function purchase_details() : View
    {
        return view('website.purchase_details');
    }
}
