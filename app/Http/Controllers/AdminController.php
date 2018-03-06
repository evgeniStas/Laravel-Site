<?php
/**
 * Created by PhpStorm.
 * User: evgeni
 * Date: 02.03.18
 * Time: 14:33
 */


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            Auth::login(Auth::user(), true);
            return redirect()->route("admin");
        }else{
            return view('admin/login')->with(["error_message"=>1]);
        }
    }
}