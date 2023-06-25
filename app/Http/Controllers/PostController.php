<?php

namespace App\Http\Controllers;

use http\Env\Request;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    function postAction():Collection{
        return DB::table('posts')->get();
    }

    // Task 7
    function postActionDelete($id){
        return DB::table('posts')
            ->where('id', $id)
            ->delete();
    }

    // Task 9
    public function postView(){
        $posts = DB::table('posts')
            ->select('posts.title', 'categories.name as category_name', 'posts.description')
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->get();

        return view('posts', compact('posts'));
    }
}
