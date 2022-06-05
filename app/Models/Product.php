<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    //
    protected $fillable = ['title','desc','price','sale','started_at','ended_at'];

    public function carts(){
        return $this->hasMany(Cart::class);
    }
    public function orderDetails(){
        return $this->hasMany(OrderDetail::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
