<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class Posts extends Controller
{
    /**
     * [index description]
     * @param  integer $limit [description]
     * @return [type]         [description]
     */
    public function index(INT $limit = 10) {
      $posts = Post::orderBy('created_at', 'desc')
                  -> take($limit)
                  -> get();
      return view('posts.index', compact('posts'));
    }

    /**
     * [show description]
     * @param  Post   $post [description]
     * @return [type]       [description]
     */
    public function show (Post $post) {
      return view('posts.show', compact('post'));
    }


    public function more(Request $request) {

        $limit = (isset($request->limit)) ? $request->limit : 10;

        $posts = Post::orderBy('created_at', 'desc')
                     ->take($limit)
                     ->offset($request->offset)
                     ->get();
        return view('posts._list', compact('posts'));
      }

}
