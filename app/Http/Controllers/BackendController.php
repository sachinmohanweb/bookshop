<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BackendController extends Controller
{
    public function admin_index() : View
    {
        return view('admin_panel.index',[]);
    }


    public function admin_login(Request $request): RedirectResponse
    {
        try{
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

            $remember = false;

            if($request['remember_password']){
                $remember = true;
            }

            if (Auth::guard('admin')->attempt($credentials,$remember)) {
                
                $request->session()->regenerate();
                return redirect()->route('admin.dashboard');
            }else{

                Session::flash('error', 'Incorrect Credentials');
                return redirect()->route('admin.index');

            }
        }catch (Exception $e) {

            Session::flash('error',  $e->getMessage());
            return redirect()->route('admin.index');

        }
    }

    public function dashboard() : View
    {
        return view('admin_panel.dashboard',[]);
    }

    public function admin_logout(Request $request): RedirectResponse
    {
        Auth::guard('admin')->logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect()->route('admin.index')->with('success', 'You have been successfully logged out.');
    }
}
