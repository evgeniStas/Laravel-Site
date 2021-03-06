<?php
/**
 * Created by PhpStorm.
 * User: evgeni
 * Date: 02.03.18
 * Time: 14:33
 */


namespace App\Http\Controllers;


use App\Order;
use App\order_products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Validator;

class AdminController extends Controller
{
    /*
     *
     * Login seller, table : sellers
     *
     * */
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            Auth::login(Auth::user(), true);
            return redirect()->route("admin");
        }else{
            return view('admin/login')->with(["error_message"=>1]);
        }
    }

    /*
     *
     * Add new client
     *
     * */
    public function addClient(Request $request){

        if (Auth::check())
        {

           $validator = Validator::make($request->all(), [
                'first_name' => 'required|max:50',
                'last_name' => 'required|max:50',
                'phone' => 'required|unique:clients|max:50',
                'email' => 'required|email|unique:clients|max:50'
            ]);

            if ($validator->fails()) // Fail feelds
            {
                if($request->AddOrder == 1){ // Return in add new order page
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
                if($request->AddOrder == 1){ // Return in add new order page
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

    /*
     *
     * Get products of category
     *
     * */
    public function getProducts(Request $request){
        if (Auth::check())
        {
            $products = new \App\Product();
            $productsAll = $products->getAll($request->category);
            return view('admin/products')->with(["products"=>$productsAll]);
        }else{
            return view('admin/login');
        }

    }

    /*
     *
     * Get truck list
     *
     * */
    public function TrucksList(Request $request){
        if (Auth::check())
        {
            $trucks = new \App\Truck();
            $trucksAll = $trucks->getAll($request->id);
            return view('admin/trucks')->with(["trucks"=>$trucksAll]);
        }else{
            return view('admin/login');
        }

    }


    public function create_order_add_products(Request $request){
        if (Auth::check())
        {
            if($request->orderId == 0) //if the orderId id 0 so this is a new order - create a new order in DB
                $orderId = Order::insertGetId(['seller' => 1, 'client' => 1]);
            else
                $orderId = $request->orderId;

            $id = order_products::where('order',$orderId)->where('product', $request->product)->pluck('id')->first();
            if(!$id)
                order_products::create(['order' => $orderId, 'product' => $request->product, 'count' => 1]);
            else{
                $count = order_products::where('id',$id)->pluck('count')->first();
                if($count == 0)
                    order_products::where('order',$orderId)->where('product',$request->product)->update(['count' => 1]);
                else
                    order_products::where('order',$orderId)->where('product',$request->product)->update(['count' => 0]);
            }


            return $orderId;
        }else{
            return view('admin/login');
        }

    }
}