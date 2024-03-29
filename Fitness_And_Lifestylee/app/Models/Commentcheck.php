<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentcheck extends Model
{
    use HasFactory;
    protected $table = 'comment_check';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function blog(){
        return $this->belongsTo(Blog::class, 'blog_id', 'id');
    }
    public function user() {
        return $this->belongsTo(User::class,'user_id', 'id');
    }
    protected $fillable=[
        'name','email','messages','rating', 'blog_id', 'product_id', 'user_id'
    ];
}
