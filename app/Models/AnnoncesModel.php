<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DemandesModel;


class AnnoncesModel extends Model
{
    // Nom de la table associée au modèle
    protected $table = 'annonce';
      // Champs mass assignable
      protected $fillable = [
        'ID_Users',
        'ID_Categorie',
        'Titre',
        'Description',
        
    ];

    public function categorie()
    {
        return $this->belongsTo(CategorieModel::class, 'ID_Categorie');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'ID_Users');
    }
    
    public function demandes()
    {
        return $this->hasMany(DemandesModel::class, 'ID_Annonce');
    }
    public function getDemandeStatut()
    {
        $demande = $this->demandes()->first(); // Assure-toi de charger la relation
        if ($demande) {
            return $demande->statut->Statut;
        }
        return null;
    }

}
