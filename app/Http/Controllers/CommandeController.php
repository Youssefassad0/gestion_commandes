<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commandes = DB::table('commandes')->join('clients', 'commandes.id_Client', '=', 'clients.id')->get();
        return view('commandes.index', compact('commandes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::all();
        return view('commandes.create', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'numCom' => 'required|numeric',
            'dateCom' => 'required|date',
            'id_Client' => 'required'
        ]);
        Commande::create($validateData);
        return redirect()->route("commandes.index")->with("success", "ajouter avec succes ");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $commande = Commande::find($id);
        // dd($id);
        $articles = DB::table('articles')
            ->join('commande-article', 'commande-article.article_id', '=', 'articles.id')
            ->where('commande-article.commande_id', $id)
            ->get([
                'numero' => 'articles.numero',
                'designation' => 'articles.designation',
                'prix' => 'articles.price',
                'quantite' => 'commande-article.quantite'
            ]);
        return view('commandes.show', compact('commande', 'articles'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // dd($id);
        $commande = Commande::find($id);

        $clients = Client::all();
        // dd($commande);
        return view('commandes.edit', compact('commande', 'clients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'numCom' => 'required',
            'dateCom' => 'required|date',
            'id_Client' => 'required',
        ]);
        Commande::find($id)->update($validate);
        return redirect()->route('commandes.index')->with('success', 'bien modifier');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $commande = Commande::find($id);
        $commande->delete();

        return redirect()->route('commandes.index')->with('success', 'supprimer avec succes !');
    }
}
