<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  integer $limit [description]
     * @return \Illuminate\Http\Response
     */
    public function index(INT $limit = 4)
    {
        // $posts = Post::orderBy('created_at', 'desc')
        //             -> take($limit)
        //             -> get();
        $posts = Post::orderBy('created_at', 'desc')->paginate($limit);
        return view('posts.index', compact('posts'));
    }

    /**
     * Display a listing of the resource for back office.
     *
     * @param  integer $limit [description]
     * @return \Illuminate\Http\Response
     */
    public function adminIndex(INT $limit = 10)
    {
        // $posts = Post::orderBy('created_at', 'desc')
        //             -> take($limit)
        //             -> get();
        $posts = Post::orderBy('created_at', 'desc')->simplePaginate($limit);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // asset('assets/img/blog/' . $post->image)

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'categorie_id' => 'required'
        ]);

        if ($request->hasFile('image')) :
            // On renomme l'image avec le timestamp UNIX actuel + l'extension
            $imageName = time() . '.' . $request->image->extension();
            // On enregistre l'image dans le storage Laravel
            $request->image->storeAs('posts/images', $imageName);
            // On déplace l'image du storage Laravel vers son emplacement public
            $request->image->move(public_path('assets/img/blog'), $imageName);
        // On utilise $request->only au lieu de $request->all pour enregistrer le nom de l'image dans la db au lieu de son temporary name
        // Exemple: on obtient ça 1612360218.jpg au lieu de tmp/phpUrlmh
        else :
            $imageName = 'postDefault.jpg';
        endif;

        Post::create($request->only(['title', 'content', 'categorie_id']) + ['image' => $imageName]);
        return redirect()->route('admin.posts.index');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable',
            'categorie_id' => 'required'
        ]);

        if ($request->hasFile('image')) :
            // On renomme l'image avec le timestamp UNIX actuel + l'extension
            $imageName = time() . '.' . $request->image->extension();
            // On enregistre l'image dans le storage Laravel
            $request->image->storeAs('posts/images', $imageName);
            // On déplace l'image du storage Laravel vers son emplacement public
            $request->image->move(public_path('assets/img/blog'), $imageName);
        // On utilise $request->only au lieu de $request->all pour enregistrer le nom de l'image dans la db au lieu de son temporary name
        // Exemple: on obtient ça 1612360218.jpg au lieu de tmp/phpUrlmh
        $post->update($request->only(['title', 'content', 'categorie_id']) + ['image' => $imageName]);
        else:
            $post->update($request->only(['title', 'content', 'categorie_id']));
        endif;

        return redirect()->route('admin.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index');
    }
}
