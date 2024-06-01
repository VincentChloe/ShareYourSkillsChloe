<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategorieModel;
use App\Models\AnnoncesModel;

class CategorieController extends Controller
{
    public function index()
    {
        
        $annonces = AnnoncesModel::all();
        $categories = CategorieModel::all();

        // Passer les catégories à la vue Annonces.blade.php
        return view('ResultCategorie', compact('annonces'));
    }


    public function resultatCategorie($id)
{
    // Récupérer les annonces de la catégorie spécifiée
    $annonces = Annonce::where('categorie_id', $id)->get();

    // Passer les annonces à la vue ResultCategorie.blade.php
    return view('ResultCategorie', compact('annonces'));
}
public function create()
{
    $categories = CategorieModel::all(); // Récupérez toutes les catégories
    return view('CreateAnnonce', compact('categories')); // Passez les catégories à la vue
}



}

