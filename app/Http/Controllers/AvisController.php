<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AvisModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\CreditModel;
use Carbon\Carbon;

class AvisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $avis = AvisModel::with(['utilisateur'])->latest()->paginate(4);
        return view('Avis', compact('avis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createFormAvis()
    {
        // Vérifier si l'utilisateur a déjà soumis un avis aujourd'hui
        $lastReviewDate = Auth::user()->avis()->latest()->value('created_at');
        if ($lastReviewDate && Carbon::parse($lastReviewDate)->isToday()) {
            // Si l'utilisateur a déjà soumis un avis aujourd'hui, redirigez-le avec un message d'erreur
            return Redirect::back()->with('error', 'Vous avez déjà atteint la limite d\'avis pour aujourd\'hui.');
        }
    
        // Si l'utilisateur n'a pas déjà soumis d'avis aujourd'hui, affichez le formulaire normal
        return view('create-avis');
    }
    
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'contenu_commentaire' => 'required',
            'note' => 'required',
        ]);
    
        // Créer un nouvel avis
        AvisModel::create([
            'contenu_commentaire' => $request->input('contenu_commentaire'),
            'note' => $request->input('note'),
            'id_utilisateur' => Auth::id(),
        ]);
    
        // Ajouter un crédit à l'utilisateur
        $credit = CreditModel::where('ID_Users', Auth::id())->first();
        if ($credit) {
            $credit->Nb_Credit += 1;
            $credit->save();
        } else {
            CreditModel::create([
                'ID_Users' => Auth::id(),
                'Nb_Credit' => 1
            ]);
        }
    
        // Rediriger avec un message de succès
        return Redirect::route('avis')->with('success', 'Avis ajouté avec succès!');
    }
    
    
    


   
    public function edit($id)
    {
        $avis = AvisModel::find($id);
        if (!$avis) {
            // Gérer le cas où l'avis n'est pas trouvé, par exemple, rediriger vers une autre page ou afficher un message d'erreur
            return redirect()->back()->with('error', 'Avis non trouvé.');
        }
    
        return view('ModifierAvis', compact('avis'));
        
    }
    


public function update(Request $request, AvisModel $avis)
{
    //$this->authorize('update', $avis);

    // Validation des données
    $validatedData = $request->validate([
        'contenu_commentaire' => 'required|string',
        'note' => 'required|integer|between:1,10',
    ]);

    // Mise à jour de l'avis
    $avis->update($validatedData);

    return redirect()->route('avis')->with('success', 'Avis mis à jour avec succès.');
}

public function destroy(AvisModel $avis)
{
    // Vérifier si l'utilisateur est autorisé à supprimer cet avis
    if (Auth::id() !== $avis->id_utilisateur) {
        return redirect()->route('avis')->with('error', 'Vous n\'êtes pas autorisé à supprimer cet avis.');
    }

    // Vérifier si l'avis peut être supprimé (après un jour)
    if (\Carbon\Carbon::now()->diffInDays($avis->created_at) < 1) {
        return redirect()->route('avis')->with('error', 'Vous ne pouvez supprimer cet avis qu\'à partir de demain.');
    }

    // Supprimer l'avis
    $avis->delete();

    return redirect()->route('avis')->with('success', 'Avis supprimé avec succès.');
}



}
