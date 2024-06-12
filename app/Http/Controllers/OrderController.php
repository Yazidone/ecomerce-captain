<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        return view('order.index');
    }

    public function store(Request $request) {
        $name = $request->name;
        $image = $request->image;
        $description= $request->description;
        $price = $request->price;
        

        // validate
        $request->validate([
            'name'=>'required|string',
            'image'=>'required|string',
            'description'=>'required',
            'price'=>'required',""

        ]);
        //create 
        Order::create([
            'name'=>$name,
            'image'=>$image,
            'description'=>$description,
            'price'=>$price,
        ]);
        //redirect
        return redirect('/order');

    }

    public function show() {
        return view('order.show');
    }

    public function checkout(Checkout $request) 
    {
        $user = auth()->user();
        $cartItems = json_decode($request->cartItems, true);
        $total = 0;
        $orderProducts = [];
        if (empty($cartItems)) {
            return response()->json([
                'status'=>'empty',
                'msg'=>__('front.passOrderBtn')
            ]);
        }else{
            foreach ($cartItems as $item) {
                $product = Product::find($item['id']);
                $price = $product->currentPrice;
                $quantity = $item['quantity'];
                $orderProduct = [
                    "product"=>$product,
                    "quantity"=>$quantity,
                    "price"=>$price,
                ];
                $orderProducts[] =  $orderProduct;
                $subTotal = $price * $quantity;
                $total += $subTotal;
            }
            //save to order
            $order = Order::create([
                "user_id" => $user->id,
                "telephone" => $request->telephone,
                // "email" => $request->email,
                "delvery_address" => $request->delvery_address,
                "total" => $total,
                "status" => 'Reçue',
            ]);
            
            if($order){
                foreach ($orderProducts as $orderProduct) {
                    $product = $orderProduct['product'];
                
                    $order->product()->attach($product->id, [
                        'quantity' => $orderProduct['quantity'], 
                        'price' => $orderProduct['price']
                    ]);

                }     
                return  response()->json([
                    'status'=>true,
                    "msg"=>__('front.passOrderBtnGood')
                ]);
            }else{
                return  response()->json([
                    'status'=>false,
                    "msg"=>__('front.passOrderBtnFailed')
                ]);
            }
            
        }
    }

}
