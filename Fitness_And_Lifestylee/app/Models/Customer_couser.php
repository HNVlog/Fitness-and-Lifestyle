<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer_couser extends Model
{
    use HasFactory;

    protected $table = 'Customer_couser';
    protected $fillable = [
        'id',
        'user_id',
        'image',
        'class_name',
//        'teacher_name',
        'price',
    ];
}
