<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    // dashboard
    public function index() {
        $products = Product::all(); 
        $categories = Category::all(); 
        $nombreL = count(Product::all()->where("size","=","L"));
        return view('product.index',[
            'products' => $products,
            'categories' => $categories,
            'nombreL' => $nombreL,
        ]);
    }
    // front
    public function productHome() {
        $boots = Product::where('category_id','2')->get(); 
        $tshirts = Product::where('category_id','1')->get();
        $productSlides = Product::limit(6)->get();
        return view('front.index',[
            'boots' => $boots,
            'tshirts' => $tshirts,
            'productSlides' => $productSlides,

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
        // $image = $request->file('image')->getClientOriginalName();
        $code_barre = $request->file('CODE_BARE')->hashName();
        if($request->hasFile('CODE_BARE')){
            $request->file('CODE_BARE')->storeAs('CodeBarreImages',$code_barre,'public');
        } 
          // save image to folder and database
       
        // dd($code_barre);
        //create 
        $product =Product::create([
            'name'=>$name,
            'description'=>$description,
            'price'=>$price,
            'discount'=>$discount,
            // 'image'=>$image,
            'category_id'=>$category_id, 
            'size'=>$size,
            'color1'=>$color1,
            'color2'=>$color2,
            'color3'=>$color3,
            'color4'=>$color4,
            'code_barre'=>$code_barre,
        ]);

        if($request->hasFile('image1')){
            $image1=$request->file('image1')->hashName();
            $request->file('image1')->storeAs('product',$image1,'public');
            Image::create([
                'name'=> $image1,
                 'product_id'=> $product->id ,
            ]);
        } 
        if($request->hasFile('image2')){
            $image2=$request->file('image2')->hashName();
            $request->file('image2')->storeAs('product',$image2,'public');
            Image::create([
                'name'=>$image2,
                 'product_id'=> $product->id ,
            ]);
        }
        if($request->hasFile('image3')){
            $image3=$request->file('image3')->hashName();
            $request->file('image3')->storeAs('product',$image3,'public');
            Image::create([
                'name'=>$image3,
                 'product_id'=> $product->id ,
            ]);
        }
        if($request->hasFile('image4')){
            $image4=$request->file('image4')->hashName();
            $request->file('image4')->storeAs('product',$image4,'public');
            Image::create([
                'name'=>$image4,
                 'product_id'=> $product->id ,
            ]);
        }
        if($request->hasFile('image5')){
            $image5=$request->file('image5')->hashName();
            $request->file('image5')->storeAs('product',$image5,'public');
            Image::create([
                'name'=>$image5,
                 'product_id'=> $product->id ,
            ]);
        }
      
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
        $image = $request->file('image')->hashName();
        $code_barre = $request->file('CODE_BARE')->hashName();

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
            $images=Image::where('product_id',$id)->delete();
            $product->delete();
            return redirect('/products')->with('success','item deleted successfully');
        }

}