<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = 'name';
    use HasFactory;

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // Task 11
    public function latestPost()
    {
        return DB::table('posts')
            ->where('category_id', $this->id)
            ->orderBy('created_at', 'desc')
            ->first();
    }

}
