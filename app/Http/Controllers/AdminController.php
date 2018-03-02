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
        $user = DB::table('admins')->where('email', $request->email)->first();
        //var_dump($user);

        if($user && Hash::check($request->password, $user->password)){
            echo "ok";
        }else{
            echo "fail";
        }

    }
}