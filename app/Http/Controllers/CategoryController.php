<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
   
    public function index() {
        $categories = Category::All();
        return view('category.index',[
            'categories'=>$categories,
        ]
    );
    }

    public function store(Request $request) {
        $name = $request->name;
        $image = $request->file('image')->getClientOriginalName();
        // ==================image==================
        if($request->hasFile('image')){
            $request->file('image')->storeAs('category',$image,'public');
        }

        // validate
        $request->validate([
            'name'=>'required|string',
            'image'=>'required',
        ]);
        //create 
        Category::create([
            'name'=>$name,
            'image'=>$image,
        ]);
        //redirect
        return redirect('/category');
        }


        public function update(Request $request) {
            // dd($request);
            $name = $request->name;
            $image = $request->file('image')->getClientOriginalName();
           
              // save image to folder and database
            if($request->hasFile('image')){
                $request->file('image')->storeAs('category',$image,'public');
            }
            
            
            //create 
            Category::create([
                'name'=>$name,
                'image'=>$image,
               
            ]);
            //redirect
            return redirect('/category');
    
        }

        public function destroy($id){
            $product=Category::find($id);
            $product->delete();
            return redirect('/category')->with('success','item deleted successfully');
        }

}