<?php

namespace App\Http\Controllers;
use App\Models\CategorieModel;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AnnoncesModel;



class AnnoncesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            // Récupérer toutes les catégories
    $categories = CategorieModel::all();

    // Passer les catégories à la vue Annonces.blade.php
    return view('Annonces', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Récupérer la catégorie avec l'ID spécifié
        $categorie = CategorieModel::findOrFail($id);

        // Récupérer les annonces de cette catégorie
        $annonces = $categorie->annonces;

        // Passer les données à la vue
        return view('ResultCategorie', compact('categorie', 'annonces'));
    }
    
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    // Récupérer l'annonce à modifier
    $annonce = AnnoncesModel::findOrFail($id);

    // Passer l'annonce à la vue ModifierMesAnnonces
    return view('ModifierMesAnnonces', compact('annonce'));
}

public function update(Request $request, $id)
{
    // Valider les données du formulaire
    $request->validate([
        'Titre' => 'required|string|max:255',
        'Description' => 'required|string',
    ]);

    // Récupérer l'annonce à modifier
    $annonce = AnnoncesModel::findOrFail($id);

    // Mettre à jour l'annonce
    $annonce->update([
        'Titre' => $request->Titre,
        'Description' => $request->Description,
    ]);

    // Rediriger avec un message de succès
    return redirect()->route('MesAnnonces')->with('success', 'Annonce mise à jour avec succès');
}


public function destroy($id)
{
    $annonce = AnnoncesModel::findOrFail($id);
    
    // Vérifier si des demandes sont associées à cette annonce
    $demandes = $annonce->demandes;

    foreach ($demandes as $demande) {
        // Vérifier si la demande est en cours
        if ($demande->statut->Statut == 1) {
            return redirect()->back()->with('error', 'Vous ne pouvez pas supprimer cette annonce car elle est associée à une demande en cours.');
        }
        
        // Supprimer le statut associé à cette demande
        $demande->statut()->delete();

        // Supprimer la demande
        $demande->delete();
    }

    // Supprimer l'annonce
    $annonce->delete();

    return redirect()->route('MesAnnonces')->with('success', 'Annonce supprimée avec succès.');
}







   

public function showMyPosts()
{
    // Récupérer l'ID de l'utilisateur authentifié
    $userId = Auth::id();

    // Récupérer les annonces créées par l'utilisateur
    $myPosts = AnnoncesModel::where('ID_Users', $userId)->get();

    // Passer les annonces à la vue
    return view('MesAnnonces', compact('myPosts'));
}

    
}
