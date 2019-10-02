<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name', 'except'
   ];

   public function post(){
       return $this->belongsToMany(Post::class);
   }
}
