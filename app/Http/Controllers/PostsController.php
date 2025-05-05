<?php

namespace App\Http\Controllers;
 

use App\Models\Posts;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostEditRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Posts::all();

        return view('post.index', ['posts' => $posts] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {


        // Posts::create([
        //     'title' => $request->input('title'),
        //     'subtitle' => $request->input('subtitle'),
        //     'body' => $request->input('body'),
        //     'img' => $request->file('img')->store('images', 'public'),
        // ]);

        // ------------ Metodo per salvare un file jpg ---------- -


        

       $post = Posts::create([
                 'title' => $request->input('title'),
                 'subtitle' => $request->input('subtitle'),
                 'body' => $request->input('body'),
                 'user_id' => Auth::user()->id,
             ]);

             if ($request->file('img')) {

                $post->img = $request->file('img')->store('images', 'public');
    
             }


        // //Cosa fa dopo aver salvato sul database ?
        return redirect()->route('post.index')->with('message', 'Hai correttamente inserito in database');
        $article->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(Posts $post)
    {
        return view('post.show', compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Posts $post)
    {
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostEditRequest $request, Posts $post)
    {
        $post->update([
            $post->title = $request->input('title'),
            $post->subtitle = $request->input('subtitle'),
            $post->body = $request->input('body'),
            $post->user_id = Auth::user()->id,
        ]);
        if ($request->file('img')) { 
            $post->update([

                $post->img = $request->file('img')->store('images', 'public'),
            ]);
        }

        return redirect()->route('post.index')->with('message', 'Hai correttamente aggiornato il post');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Posts $post)
    {
        $post->delete();
        return redirect()->route('post.index')->with('message', 'Hai cancellato il post');
    }
}
