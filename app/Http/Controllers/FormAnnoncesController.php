<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormAnnoncesModel;
use App\Models\CategorieModel; // Importez le modèle CategorieModel
use Illuminate\Support\Facades\Auth;

class FormAnnoncesController extends Controller
{
    public function index()

    {
        $categories = CategorieModel::all();
        $formAnnonces = FormAnnoncesModel::all();
        return view('FormAnnonces', compact('categories'));
    }

    public function create()
    {
        $categories = CategorieModel::all(); // Récupérez toutes les catégories
        return view('CreateAnnonce', compact('categories')); // Passez les catégories à la vue
    }

    public function store(Request $request)
    {
        $request->validate([
            'ID_Categorie' => 'required|exists:categorie,id',
            'Titre' => 'required|string|max:255',
            'Description' => 'required|string',
        ]);

        FormAnnoncesModel::create([
            'ID_Users' => Auth::id(),
            'ID_Categorie' => $request->ID_Categorie,
            'Titre' => $request->Titre,
            'Description' => $request->Description,
        ]);

        return redirect()->route('annonces')->with('success', 'Annonce créée avec succès!');
    }
    
}
