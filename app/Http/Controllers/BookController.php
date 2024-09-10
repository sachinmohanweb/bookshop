<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    
    public function books() : View
    {
        return view('admin_panel.books.index',[]);
    }
    
    public function add_book() : View
    {
        return view('admin_panel.books.create',[]);
    }

    public function edit_book() : View
    {
        return view('admin_panel.books.edit',[]);
    }

    public function book_details() : View
    {
        return view('admin_panel.books.details',[]);
    }

    public function authors() : View
    {
        return view('admin_panel.authors.index',[]);
    }

    public function add_author() : View
    {
        return view('admin_panel.authors.create',[]);
    }

    public function edit_author() : View
    {
        return view('admin_panel.authors.edit',[]);
    }

    public function author_details() : View
    {
        return view('admin_panel.authors.details',[]);
    }

    public function genres() : View
    {
        return view('admin_panel.genres.index',[]);
    }

    public function add_genre() : View
    {
        return view('admin_panel.genres.create',[]);
    }

    public function edit_genre() : View
    {
        return view('admin_panel.genres.edit',[]);
    }

    public function genre_details() : View
    {
        return view('admin_panel.genres.details',[]);
    }
}
