<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DemandesModel;
use App\Models\CreditModel;
use App\Models\AnnoncesModel;
use App\Models\StatutModel;
use Illuminate\Support\Facades\Auth;

class DemandesController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        
        $mesDemandes = DemandesModel::with(['annonce', 'userAnnonce', 'statut'])
            ->where('ID_Users_Demande', $userId)
            ->whereHas('statut', function ($query) {
                $query->where('Statut', 1);
            })
            ->get();

        $demandesRecues = DemandesModel::with(['annonce', 'userDemande', 'statut'])
            ->where('ID_Users_Annonce', $userId)
            ->whereHas('statut', function ($query) {
                $query->where('Statut', 1);
            })
            ->get();

        $demandesArchivees = DemandesModel::with(['annonce', 'userDemande', 'userAnnonce', 'statut'])
            ->whereHas('statut', function ($query) {
                $query->where('Statut', 2);
            })
            ->where(function ($query) use ($userId) {
                $query->where('ID_Users_Demande', $userId)
                      ->orWhere('ID_Users_Annonce', $userId);
            })
            ->get();

        return view('Demandes', compact('mesDemandes', 'demandesRecues', 'demandesArchivees'));
    }

    public function payment($annonceId)
    {
        $annonce = AnnoncesModel::findOrFail($annonceId);
        return view('payment', compact('annonce'));
    }

    public function confirm(Request $request, $annonceId)
    {
        $user = Auth::user();
        $annonce = AnnoncesModel::findOrFail($annonceId);

        $credits = $user->credit;

        if (!$credits || $credits->Nb_Credit < 1) {
            return redirect()->back()->with('error', 'Vous n\'avez pas assez de crédits.');
        }

        try {
            $demande = DemandesModel::create([
                'ID_Users_Annonce' => $annonce->ID_Users,
                'ID_Users_Demande' => $user->id,
                'ID_Annonce' => $annonce->id,
            ]);

            StatutModel::create([
                'ID_Demandes' => $demande->id,
                'Statut' => 1,
            ]);

            $credits->decrement('Nb_Credit', 1);

            $annonceUserCredit = CreditModel::where('ID_Users', $annonce->ID_Users)->first();
            if ($annonceUserCredit) {
                $annonceUserCredit->increment('Nb_Credit', 1);
            } else {
                CreditModel::create([
                    'ID_Users' => $annonce->ID_Users,
                    'Nb_Credit' => 1
                ]);
            }

            return redirect()->route('demandes')->with('success', 'Demande créée avec succès.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Une erreur est survenue : ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        $demande = DemandesModel::findOrFail($id);
        return view('demandes.show', compact('demande'));
    }

    public function complete($id)
    {
        $demande = DemandesModel::findOrFail($id);
        $statut = StatutModel::where('ID_Demandes', $demande->id)->first();
        $statut->Statut = 2;
        $statut->save();

        return redirect()->route('demandes')->with('success', 'Demande complétée.');
    }

    public function showChat($demandeId)
    {
        $demande = DemandesModel::findOrFail($demandeId);
        $receiverId = $demande->ID_Users_Annonce === Auth::id() ? $demande->ID_Users_Demande : $demande->ID_Users_Annonce;
    
        return view('chat', compact('demandeId', 'receiverId'));
    }
    
}
