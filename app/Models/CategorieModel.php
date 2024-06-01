<?php

namespace App\Models;

use App\Http\Controllers\AnnoncesController;
use Illuminate\Database\Eloquent\Model;

class CategorieModel extends Model
{
    protected $table = 'categorie';

    public function annonces()
    {
        return $this->hasMany(AnnoncesModel::class, 'ID_Categorie');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'ID_users');
    }
}

