<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProjetController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets = Projet::all();

        return view('projets.index')->with(compact('projets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projets.create')->with(compact('projets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\ValidateProjetRequest $request)
    {

        $projet = new Projet;


        $projet->title = $request->title;
        $projet->name = $request->name;
        $projet->adresse = $request->adresse;
        $projet->email = $request->email;
        $projet->tel = $request->tel;
        $projet->ficheID = $request->ficheID;
        $projet->typeProjet = $request->typeProjet;
        $projet->contexte = $request->contexte;
        $projet->demande = $request->demande;
        $projet->objectifs = $request->objectifs;
        $projet->contraintes = $request->contraintes;

        $projet->save();

        return redirect()->route('projets.show', $projet->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projet = Projet::find($id);

        if(!$projet) {
            return redirect()->to('/projets');
        }

        return view('projets.show')->with(['projet' => $projet]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all()->lists('name', 'id');
        $projet  = Projet::find($id);

        if(!$projet) {
            return redirect()->to('/projets');
        }

        return view('projets.edit')->with(compact('users', 'projet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\ValidateProjetRequest $request, $id)
    {
        $projet = Projet::find($id);

        if(!$projet) {
            return redirect()->to('/articles');
        }

        $projet->title = $request->title;
        $projet->name = $request->name;
        $projet->adresse = $request->adresse;
        $projet->email = $request->email;
        $projet->tel = $request->tel;
        $projet->ficheID = $request->ficheID;
        $projet->typeProjet = $request->typeProjet;
        $projet->contexte = $request->contexte;
        $projet->demande = $request->demande;
        $projet->objectifs = $request->objectifs;
        $projet->contraintes = $request->contraintes;


        $projet->save();

        return redirect()->route('projets.show', $projet->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projet = Projet::find($id);

        if(!$projet) {
            return redirect()->route('projets.index');
        }

        $projet->delete();

        return redirect()->route('projets.index');
    }
}
