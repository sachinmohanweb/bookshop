<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BannerController extends Controller
{

    public function banners() : View
    {
        return view('admin_panel.banners.index',[]);
    }
}
