<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket(){
        $orderId = session('orderId');
        if(is_null($orderId)){
            $order = Order::create();
            session(['orderId'=>$order->id]);
        }
        else{
            $order = Order::find($orderId);
        }
        return view('basket', compact('order'));
    }
    public function basketPlace(){
        $orderId = session('orderId');
        if(is_null($orderId)){
            return redirect('/');
        }
        $order = Order::find($orderId);
        return view('order', compact('order'));
    }
    public function basketConfirm(Request $request){
        $orderId = session('orderId');
        if(is_null($orderId)){
            return redirect('/catalog');
        }
        $order = Order::find($orderId);
        $success = $order->saveOrder($request->name, $request->phone);
         if($success){
            session()->flash('success', 'Ваше замовлення прийняте');
         }else{
            session()->flash('warning', 'Сталась помилка, спробуйте ще раз!');
         }
        return redirect('/catalog');
    }
    public function basketAdd($productId, Request $request){
        $orderId = session('orderId');
        if(is_null($orderId)){
            $order = Order::create();
            session(['orderId'=>$order->id]);
        }
        else{
            $order = Order::find($orderId);
        }
        if($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            if($request->has('size')){
                $pivotRow->size = $request->input('size');
            }
            $pivotRow->count++;
            $pivotRow->update();
        }
        else{
            $order->products()->attach($productId);
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            if($request->has('size')){
                $pivotRow->size = $request->input('size');
            }else{
                $pivotRow->size = 'XS';
            }
            $pivotRow->update();
        }
        $product = Product::find($productId);
        session()->flash('success', 'Добавлено товар: '. $product->name);
        return redirect()->route('basket');
    }

    public function basketRemove($productId){
        $orderId = session('orderId');
        if(is_null($orderId)){
            return redirect()->route('basket');
        }
        $order = Order::find($orderId);

        if($order->products->contains($productId)){
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            if($pivotRow->count < 2){
                $order->products()->detach($productId);
            }
            else{
                $pivotRow->count--;
                $pivotRow->update();
            }
        }
        $product = Product::find($productId);
        session()->flash('warning', 'Вилучено товар: '. $product->name);
        return redirect()->route('basket');
    }
}
