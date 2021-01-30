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
    public function adminIndex(INT $limit = 4)
    {
        // $posts = Post::orderBy('created_at', 'desc')
        //             -> take($limit)
        //             -> get();
        $posts = Post::orderBy('created_at', 'desc')->paginate($limit);
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
    public function store(Request $request)
    {
        // Post::insert(['insert into posts (name) values (?, ?)'], ['Marc']);
        // Post::insert(['insert into posts (title) values (?)'], ['Marc']);
        // \DB::insert(['insert into posts (title,content) values (?, ?)'], ['Marc','content lorem']);

        $rules = [
            'title' => 'required|string|min:3|max:255',
            'content' => 'required|string|min:3|max:255',
            'categorie_id' => 'required|int|min:0|max:255'
            // 'image' => 'required|string|min:3|max:255'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('/dashboard/posts/create/fails')
                ->withInput()
                ->withErrors($validator);
        } else {
            $data = $request->input();
            try {
                $post = new Post;
                $post->title = $data['title'];
                $post->content = $data['content'];
                $post->categorie_id = $data['categorie_id'];
                $post->image = $data['image'];



                // $destinationPath = 'path/th/save/file/';
                // $file = $request->file('file'); // will get all files


                // $file_name = '$file->getClientOriginalName()'; //Get file original name
                // $file->move($destinationPath , $file_name); // move files to destination folder



                // $filename = time().$post->image;

                // $destinationPath = 'uploads';
                // $post->image->move($destinationPath);

                // Storage::disk('local')->putFileAs(
                //     '/'.$filename,
                //     $post->image,
                //     $filename
                //   );
                $post->save();
                return redirect('/dashboard/posts/create')->with('status', "Insert successfully");
            } catch (Exception $e) {
                return redirect('/dashboard/posts/create')->with('failed', "operation failed");
            }
        }
    }
    public function upload(Request $request)
    {
        $uploadedFile = $request->file('file');
        $filename = time() . $uploadedFile->getClientOriginalName();

        Storage::disk('local')->putFileAs(
            'files/' . $filename,
            $uploadedFile,
            $filename
        );

        $upload = new Upload;
        $upload->filename = $filename;

        $upload->user()->associate(auth()->user());

        $upload->save();

        return response()->json([
            'id' => $upload->id
        ]);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
