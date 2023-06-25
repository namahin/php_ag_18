<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    // Task 10
    public function getPostsByCategory($id){
        $category = DB::table('categories')->where('id', $id)->first();
        $posts = DB::table('posts')
            ->select('posts.*')
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->where('categories.id', '=', $id)
            ->get();

        return view('category-posts', compact('category', 'posts'));
    }

    // Task 12
    public function getLatestPostByCategory($id)
    {
        $categories = DB::table('categories')
            ->select('categories.name')
            ->find($id);
        $latestPost = DB::table('posts')
            ->select('posts.*')
            ->where('category_id', $id)
            ->orderBy('created_at', 'desc')
            ->first();

        return view('latest-posts', compact('categories', 'latestPost'));
    }
}
