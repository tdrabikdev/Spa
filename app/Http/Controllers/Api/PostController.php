<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->select('id','title', 'slug', 'body', 'created_at')->paginate(5);
       return PostResource::collection($posts);
    }
}
