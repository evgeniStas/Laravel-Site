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
use Validator;

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
    public function addClient(Request $request){

        if (Auth::check())
        {

           $validator = Validator::make($request->all(), [
                'first_name' => 'required|max:50',
                'last_name' => 'required|max:50',
                'phone' => 'required|unique:clients|max:50',
                'email' => 'required|email|unique:clients|max:50'
            ]);

            if ($validator->fails())
            {
                if($request->AddOrder == 1){
                    $clients = new \App\Client();
                    $clientsAll = $clients->getAll();

                    $categories = new \App\Category();
                    $categoriesAll = $categories->getAll();

                    return view('admin/add')->with(["clients"=>$clientsAll,"categories"=>$categoriesAll])->withErrors($validator->errors());
                }else {
                    return view('admin/addClient')->withErrors($validator->errors());
                }
            }else{
                DB::table('clients')->insert(
                    [
                        'first_name' => $request->first_name,
                        'last_name' => $request->last_name,
                        'phone' => $request->phone,
                        'email' => $request->email,
                        'activity' => $request->activity,
                        'seller' => Auth::id()
                    ]
                );
                if($request->AddOrder == 1){
                    $clients = new \App\Client();
                    $clientsAll = $clients->getAll();

                    $categories = new \App\Category();
                    $categoriesAll = $categories->getAll();
                    return view('admin/add')->with(["clients"=>$clientsAll,"categories"=>$categoriesAll,"success"=>1]);
                }else {
                    return view('admin/addClient')->with(["success" => 1]);
                }
            }
        }else {
            return view('admin/login');
        }
    }
}