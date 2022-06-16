<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\contacts;

class main_controller extends Controller
{
    //
    public function main(){
        return view('main');
    }
    public function catalog(){
        return view('catalog');
    }
    public function card(){
        return view('product_card');
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

}
