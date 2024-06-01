<?php
use App\Http\Controllers\FormAnnoncesController;
use App\Http\Controllers\AnnoncesController;
use App\Http\Controllers\DemandesController;
use App\Http\Controllers\AvisController;
use App\Http\Controllers\CreditsController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('welcome');
    })->name('dashboard');
    Route::get('/credits', [CreditsController::class, 'index'])->name('credits');
    Route::post('/credits/add-review', [CreditsController::class, 'addReviewCredit'])->name('credits.add-review');
    Route::post('/credits/watch-ad-credit', [CreditsController::class, 'watchAdCredit'])->name('credits.watch-ad-credit');

    Route::get('/messages/{demandeId}', [MessageController::class, 'index']);
    Route::post('/messages/{demandeId}', [MessageController::class, 'store']);
    Route::get('/chat/{demandeId}', [DemandesController::class, 'showChat'])->name('demande.chat');

    Route::get('/avis/{id}/edit', [AvisController::class, 'edit'])->name('avis.edit');
    Route::get('/avis/create', [AvisController::class, 'createFormAvis'])->name('avis.create');
    Route::post('/avis/store', [AvisController::class, 'store'])->name('avis.store');
    Route::put('/avis/{avis}', [AvisController::class, 'update'])->name('avis.update');
    Route::get('/avis', [AvisController::class, 'index'])->name('avis');
    Route::delete('/avis/{avis}', [AvisController::class, 'destroy'])->name('avis.destroy');

    Route::get('/annonces', [AnnoncesController::class, 'index'])->name('annonces');
    Route::get('/ResultCategorie/{id}', [AnnoncesController::class, 'show'])->name('ResultCategorie');

    Route::get('/FormAnnonces', [FormAnnoncesController::class, 'index'])->name('FormAnnonces');
    Route::get('/annonces/create', [FormAnnoncesController::class, 'create'])->name('annonces.create');
    Route::post('/annonces', [FormAnnoncesController::class, 'store'])->name('annonces.store');
    Route::get('/FormAnnonces/my-posts', [FormAnnoncesController::class, 'showMyPosts'])->name('my-posts');

    Route::get('/demandes', [DemandesController::class, 'index'])->name('demandes');
    Route::get('/demandes/{annonce}/payment', [DemandesController::class, 'payment'])->name('demandes.payment');
    Route::post('/demandes/{annonce}/confirm', [DemandesController::class, 'confirm'])->name('demandes.confirm');
    Route::get('/demandes/{id}', [DemandesController::class, 'show'])->name('demandes.show');
    Route::put('/demandes/{id}/complete', [DemandesController::class, 'complete'])->name('demandes.complete');

  

    Route::get('/MesAnnonces', [AnnoncesController::class, 'showMyPosts'])->name('MesAnnonces');
    Route::get('/annonces/{id}/edit', [AnnoncesController::class, 'edit'])->name('annonces.edit');
    Route::put('/annonces/{id}', [AnnoncesController::class, 'update'])->name('annonces.update');
    Route::delete('/annonces/{id}', [AnnoncesController::class, 'destroy'])->name('annonces.destroy');

 

});
