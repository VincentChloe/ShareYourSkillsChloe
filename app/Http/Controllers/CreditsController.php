<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CreditModel;
use Illuminate\Support\Facades\Storage;

class CreditsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $credits = CreditModel::where('ID_Users', $user->id)->first();
        $nbCredits = $credits ? $credits->Nb_Credit : 0;
        return view('Credits', ['nbCredits' => $nbCredits]);
    }

    public function addReviewCredit()
    {
        $user = Auth::user();
        $credit = CreditModel::where('ID_Users', $user->id)->first();

        if ($credit) {
            $credit->Nb_Credit += 1;
            $credit->save();
        } else {
            CreditModel::create([
                'ID_Users' => $user->id,
                'Nb_Credit' => 1
            ]);
        }

        return response()->json(['success' => true, 'message' => 'Un crédit ajouté pour l\'ajout d\'un avis']);
    }

    public function watchAdCredit()
    {
        $user = Auth::user();
        $credit = CreditModel::where('ID_Users', $user->id)->first();

        $filePath = 'user_ads/' . $user->id . '_last_ad_watched.txt';

        if (Storage::exists($filePath)) {
            $lastWatched = Storage::get($filePath);
            $lastWatchedTime = strtotime($lastWatched);
            $currentTime = time();

            if (($currentTime - $lastWatchedTime) < 86400) {
                return response()->json(['success' => false, 'message' => 'Vous ne pouvez regarder une publicité qu\'une fois toutes les 24 heures.']);
            }
        }

        Storage::put($filePath, now());

        if ($credit) {
            $credit->Nb_Credit += 1;
            $credit->save();
        } else {
            CreditModel::create([
                'ID_Users' => $user->id,
                'Nb_Credit' => 1
            ]);
        }

        return response()->json(['success' => true, 'message' => 'Un crédit ajouté pour avoir regardé une pub']);
    }

    // Autres méthodes CRUD si nécessaire...
}
