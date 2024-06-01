<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormAnnoncesModel extends Model
{
    use HasFactory;
    
    // Définir le nom de la table si ce n'est pas le pluriel du nom du modèle
    protected $table = 'annonce'; // Assurez-vous que c'est bien le nom correct
    protected $fillable = ['ID_Users', 'ID_Categorie', 'Titre', 'Description']; // Ajoutez les colonnes qui peuvent être remplies
}
