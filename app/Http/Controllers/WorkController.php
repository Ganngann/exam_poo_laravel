<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(INT $limit = 6)
    {
        $works = Work::orderBy('created_at', 'desc')
            ->take($limit)
            ->get();
        return view('works.index', compact('works'));
    }

    /**
     * Display a listing of the resource for ajax.
     *
     * @return \Illuminate\Http\Response
     */
    public function more(Request $request)
    {

        $limit = (isset($request->limit)) ? $request->limit : 10;

        $works = Work::orderBy('created_at', 'desc')
            ->take($limit)
            ->offset($request->offset)
            ->get();
        return view('works._list_el', compact('works'));
    }


    /**
     * Display a listing of the resource for back office.
     *
     * @param  integer $limit [description]
     * @return \Illuminate\Http\Response
     */
    public function adminIndex(INT $limit = 10)
    {
        // $works = Work::orderBy('created_at', 'desc')
        //             -> take($limit)
        //             -> get();
        $works = Work::orderBy('created_at', 'desc')->simplePaginate($limit);
        return view('admin.works.index', compact('works'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.works.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'client_id' => 'required',
            'content' => 'required',
            'image' => 'image|nullable|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('image')) :
            // On renomme l'image avec le timestamp UNIX actuel + l'extension
            $imageName = time() . '.' . $request->image->extension();
            // On enregistre l'image dans le storage Laravel
            $request->image->storeAs('works/images', $imageName);
            // On déplace l'image du storage Laravel vers son emplacement public
            $request->image->move(public_path('assets/img/portfolio'), $imageName);
        // On utilise $request->only au lieu de $request->all pour enregistrer le nom de l'image dans la db au lieu de son temporary name
        // Exemple: on obtient ça 1612360218.jpg au lieu de tmp/phpUrlmh
        else :
            $imageName = 'workDefault.jpg';
        endif;

        Work::create($request->only(['title', 'client_id', 'content', 'inSlider',]) + ['image' => $imageName])->tags()->sync($request->tags);
        return redirect()->route('admin.works.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function show(Work $work)
    {
        return view('works.show', compact('work'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function edit(Work $work)
    {
        return view('admin.works.edit', compact('work'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Work $work)
    {
        $request->validate([
            'title' => 'required',
            'client_id' => 'required',
            'content' => 'required',
            'image' => 'image|nullable|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        // dd($request);

        if ($request->hasFile('image')) :
            // On renomme l'image avec le timestamp UNIX actuel + l'extension
            $imageName = time() . '.' . $request->image->extension();
            // On enregistre l'image dans le storage Laravel
            $request->image->storeAs('works/images', $imageName);
            // On déplace l'image du storage Laravel vers son emplacement public
            $request->image->move(public_path('assets/img/portfolio'), $imageName);
            // On utilise $request->only au lieu de $request->all pour enregistrer le nom de l'image dans la db au lieu de son temporary name
            // Exemple: on obtient ça 1612360218.jpg au lieu de tmp/phpUrlmh
            $work->update($request->only(['title', 'client_id', 'content', 'inSlider',]) + ['image' => $imageName]);
        else :
            // $work->update($request->only(['title', 'client_id', 'content', 'inSlider',]))->tags()->sync($request->tags);
            $work->update($request->only(['title', 'client_id', 'content', 'inSlider',]));
        endif;
        $work->tags()->sync($request->tags);
        return redirect()->route('admin.works.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function destroy(Work $work)
    {
        $work->tags()->detach();
        $work->delete();
        return redirect()->route('admin.works.index');
    }
}
