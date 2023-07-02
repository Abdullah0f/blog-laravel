<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // every fiels is fillable except id
    protected $guarded = ['id'];

    protected $with = ['category', 'author'];

    function category()
    {
        return $this->belongsTo(Category::class);
    }
    function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
