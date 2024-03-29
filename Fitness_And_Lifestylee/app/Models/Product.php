<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $guarded = [];


    public function productCategory(){
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
    }

    public function productImages(){
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }

    public function courses(){
        return $this->belongsTo(Course::class, 'product_id', 'id');
    }

    public function productComments(){
        return $this->hasMany(ProductComment::class, 'product_id', 'id');
    }

    public function orderDetails(){
        return $this->hasMany(OrderDetail::class, 'product_id', 'id');
    }

    protected $fillable=[
        'name','email','messages','rating', 'blog_id', 'product_id', 'user_id'
    ];
}
