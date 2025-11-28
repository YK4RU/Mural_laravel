<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;

class PostController extends Controller
{
    public readonly Post $posts;

    public function __construct()
    {
        $this->posts = new Post();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $image = $request->file('url_da_imagem')->store('postagens', 'public');

        $created = Post::create ([

            'descricao'=> $request->input('descricao'),
            'url_da_imagem'=> $image,
           
        ]);


        if ($created){
            return redirect()->route('dashboard')->with('message', 'deu certo Ü');
        }else{
            return redirect()->back()->with('message', 'deu certo não Ü');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $posts = Post::findOrFail($id);
        return view('posts.edit', compact('posts'));
    }

    
    public function update(Request $request, string $id)
    {
        $posts = Post::findOrFail($id);
        $updated = $posts->update([
            'descricao' => $request->descricao
        ]);

        if ($updated){
            return redirect()->route('profile.index')->with('message', 'deu certo Ü');
        }else{
            return redirect()->back()->with('message', 'deu certo não Ü');
        }
    }

    
    public function destroy(string $id)
    {
        $posts = Post::findOrFail($id);
        $deleted = $posts->delete();

        return redirect()->route('profile.index')->with('message', 'massa doido Ü');;
    }
}
