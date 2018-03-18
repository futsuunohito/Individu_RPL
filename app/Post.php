<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   protected $fillable = ['title', 'content','categories_id', 'slug'];
   
   public function categories()
   {
       return $this->belongsTo(Category::class);
   }
//    public function latest($posts = 'created_at')
//     {
//     return $this->orderBy($posts, 'desc');
//     } 
}
