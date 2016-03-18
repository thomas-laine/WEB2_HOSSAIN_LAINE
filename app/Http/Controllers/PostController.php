<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    //verification de la connexion
    public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //affichage de tous les articles
    public function index()
    {
        $posts = Post::all();

        return view('articles.index')
            ->with(compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //céation d'un article
    public function create()
    {
        $users = User::all()->lists('name', 'id');

        return view('articles.create')->with(compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //validation d'un article
    public function store(Requests\ValidatePostRequest $request)
    {
        /*
        $this->validate($request,[
            'user_id' => 'required',
            'title'   => 'required|min:10',
            'description' => 'required|min:10'
        ], [
            'user_id.required' => 'User id manquant',
            'title.required' => 'Titre obligatoire',
            'title.min' => 'Titre > 10 caractères',
            'description.required' => 'Description obligatoire',
            'description.min' => 'Description > 10 caractères,'
        ]);
        */

        //Méthode 1
        $post = new Post;

        $post->user_id      = $request->user()->id;
        $post->title        = $request->title;
        $post->description  = $request->description;

        $post->save();


        //Méthode 2
        //$data = $request->except('_token');
        //$data['user_id'] = $request->user()->id;
        //$post = Post::create($data);

        return redirect()->route('articles.show', $post->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //affichage de l'article selectionner
    public function show($id)
    {
        $post = Post::find($id);

        if(!$post) {
            return redirect()->to('/articles');
        }

        return view('articles.show')->with(['article' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //modification d'un article
    public function edit($id)
    {
        $users = User::all()->lists('name', 'id');
        $post  = Post::find($id);

        if(!$post) {
            return redirect()->to('/articles');
        }

        return view('articles.edit')->with(compact('users', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //validation de la modification d'un article
    public function update(Requests\ValidatePostRequest $request, $id)
    {
        $post = Post::find($id);

        if(!$post) {
            return redirect()->to('/articles');
        }

        $post->title        = $request->title;
        $post->description  = $request->description;
        $post->user_id      = $request->user_id;

        $post->save();

        return redirect()->route('articles.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //supprimer un article
    public function destroy($id)
    {
        $post = Post::find($id);

        if(!$post) {
            return redirect()->route('articles.index');
        }

        $post->delete();

        return redirect()->route('articles.index');
    }
}
