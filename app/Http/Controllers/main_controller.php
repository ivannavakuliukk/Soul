<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use App\Models\contacts;

class main_controller extends Controller
{
    //
    public function main(){
        return view('main');
    }
    public function review(){
        $reviews = new contacts();
        return view('review', ['reviews' =>$reviews->all()]);
    }
    public function review_check(Request $request){
        $valid =$request->validate([
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required'
        ]);

        $review = new contacts();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('review');
    }
    public function search(Request $request){
        $s = $request->s;
        $products = Product::where('name', 'LIKE', "%{$s}%")->get();
        return view('search', compact('products'), compact('s'));
    }
    public function size(){
        $sizes = Size::get();
        return view('sizes', compact('sizes'));
    }
    public function catalog(){
        $products = Product::get();
        return view('catalog', compact('products'));
    }
    public function product($code){
        $product = Product::where('code', $code)->first();
        $reccomended = Product::inRandomOrder()->limit(3)->get();
        return view('product',compact('product'), compact('reccomended'));
    }
    public function color($code = null){
        $color = Color::where('code', $code)->first();
        return view('color',compact('color'));
    }
    public function category($code = null){
        $category = category::where('code', $code)->first();
        return view('category',compact('category'));
    }

}
