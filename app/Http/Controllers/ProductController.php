<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    // dashboard
    public function index() {
        $products = Product::all(); 
        $categories = Category::all(); 
        return view('product.index',[
            'products' => $products,
            'categories' => $categories,
        ]);
    }
    // front
    public function productHome() {
        $boots = Product::where('category_id','6')->get(); 
        $tshirts = Product::where('category_id','5')->get();
        return view('front.index',[
            'boots' => $boots,
            'tshirts' => $tshirts,
        ]);
    }

    public function store(Request $request) {
        // dd($request);
        $name = $request->Name;
        $description= $request->Description;
        $price = $request->Price;
        $category_id = $request->category_id;
        $size = $request->size;
        $color1 = $request->color1;
        $color2 = $request->color2;
        $color3 = $request->color3;
        $color4 = $request->color4;
        $color=$request-> color;
        $discount = $request->Quantity;
        $image = $request->image;
        $image = $request->file('image')->getClientOriginalName();
        $code_barre = $request->file('CODE_BARE')->getClientOriginalName();
       
          // save image to folder and database
        if($request->hasFile('image')){
            $request->file('image')->storeAs('product',$image,'public');
        }
        if($request->hasFile('CODE_BARE')){
            $request->file('CODE_BARE')->storeAs('CodeBarreImages',$code_barre,'public');
        }
        
        //create 
        Product::create([
            'name'=>$name,
            'description'=>$description,
            'price'=>$price,
            'discount'=>$discount,
            'image'=>$image,
            'category_id'=>$category_id, 
            'size'=>$size,
            'color1'=>$color1,
            'color2'=>$color2,
            'color3'=>$color3,
            'color4'=>$color4,
            'code_barre'=>$code_barre,
        ]);
        //redirect
        return redirect('/products');

    }

    public function update(Request $request) {
        // dd($request);
        $id = $request->id;
        $name = $request->Name;
        $size = $request->size;
        $color1 = $request->color1;
        $color2 = $request->color2;
        $color3 = $request->color3;
        $color4 = $request->color4;
        $description= $request->Description;
        $price = $request->Price;
        $category_id = $request->category_id;
        $discount = $request->Quantity;
        $image = $request->image;
        $image = $request->file('image')->getClientOriginalName();
        $code_barre = $request->file('CODE_BARE')->getClientOriginalName();

        $product = Product::find($id);
       
          // save image to folder and database
        if($request->hasFile('image')){
            $request->file('image')->storeAs('product',$image,'public');
        }
        if($request->hasFile('CODE_BARE')){
            $request->file('CODE_BARE')->storeAs('CodeBarreImages',$code_barre,'public');
        }
        
        //update 
        $product->update([
            'name'=>$name,
            'description'=>$description,
            'price'=>$price,
            'discount'=>$discount,
            'image'=>$image,
            'size'=>$size,
            'color1'=>$color1,
            'color2'=>$color2,
            'color3'=>$color3,
            'color4'=>$color4,
            'category_id'=>$category_id, 
            'code_barre'=>$code_barre,
        ]);
        //redirect
        return redirect('/products');

    }

    public function destroy($id){
            $product=Product::find($id);
            $product->delete();
            return redirect('/products')->with('success','item deleted successfully');
        }

}