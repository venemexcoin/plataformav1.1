<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 'name', 'except', 'body', 'status', 'file', 'zip', 'price', 'cripto'
    ];

    public function user()
    {
        return $this->belongsTo(User::tag);
    }

    public function category()
    {
        return $this->belongsTo(Category::tag);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
