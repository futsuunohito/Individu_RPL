<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   protected $fillable = [
        'title',
        'user_id',
        'content',
        'categories_id',
        'slug'
        ];
   
   public function categories()
   {
       return $this->belongsTo(Category::class);
   }
   public function user()
    {
      return $this->belongsTo(User::class);
    }
   public function comments()
    {
      return $this->hasMany(Comment::class);
    } 
}
