<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;

class BackendController extends Controller
{
    public function admin_login() : View
    {
        return view('admin_panel.index',[]);
    }

    public function dashboard() : View
    {
        return view('admin_panel.dashboard',[]);
    }
}
