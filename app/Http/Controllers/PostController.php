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

    function postActionDelete(){
        return DB::table('posts')
            ->insert([
                ['title' => 'Post Title 1',
                'slug' => 'post-title-1',
                'description' => 'Post Description 1',
                'category_id' => 3],
                ['title' => 'Post Title 2',
                'slug' => 'post-title-2',
                'description' => 'Post Description 2',
                'category_id' => 2],
                ['title' => 'Post Title 3',
                'slug' => 'post-title-3',
                'description' => 'Post Description 3',
                'category_id' => 3],
                ['title' => 'Post Title 4',
                'slug' => 'post-title-4',
                'description' => 'Post Description 4',
                'category_id' => 4],
                ['title' => 'Post Title 5',
                'slug' => 'post-title-5',
                'description' => 'Post Description 5',
                'category_id' => 3],
            ]);
    }
}
