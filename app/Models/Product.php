<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // public function getCategory(){
    //     return Category::find($this->category_id);
    // }
    public function color(){
        return $this->belongsTo(Color::class);
    }
    public function categories(){
        return $this->belongsToMany(Category::class, 'product_category', 'product_id', 'category_id');
    }
    public function getPriceForCount($count){
        return $this->price * $count;
    }
}
