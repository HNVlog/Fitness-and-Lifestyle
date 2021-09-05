<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;
    protected $table = 'blog_categories';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function blog(){
        return $this->hasMany(BlogComment::class, 'blog_category_id', 'id');
    }
}
