<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Category;
use App\Tad;

class Post extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 'name', 'except', 'body', 'status', 'file', 'zip', 'price', 'cripto'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
