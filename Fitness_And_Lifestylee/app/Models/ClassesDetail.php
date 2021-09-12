<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassesDetail extends Model
{
    use HasFactory;

    protected $table = 'product_detail';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function products(){
        return $this->hasMany(Product::class, 'product_id', 'id');
    }
}
