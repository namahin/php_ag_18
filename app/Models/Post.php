<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Task 4
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Task 6
    public static function countPostsByCategory($categoryId)
    {
        $category = Category::findOrFail($categoryId);
        return $category->posts()->count();
    }


}


