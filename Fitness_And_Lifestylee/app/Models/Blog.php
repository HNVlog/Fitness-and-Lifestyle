<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function blogComments(){
        return $this->hasMany(BlogComment::class, 'blog_id', 'id');
    }
    public function blogCategories(){
        return $this->belongsTo(BlogCategory::class,'blog_category_id', 'id');
    }
    public function blogDetails(){
        return $this->hasMany(BlogComment::class, 'blog_id', 'id');
    }
    public function blogImages(){
        return $this->hasMany(BlogImage::class, 'blog_id', 'id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
