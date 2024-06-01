<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandesModel extends Model
{
    use HasFactory;

    protected $table = 'demandes';

    protected $fillable = [
        'ID_Users_Annonce',
        'ID_Users_Demande',
        'ID_Annonce',
    ];

    public function annonce()
    {
        return $this->belongsTo(AnnoncesModel::class, 'ID_Annonce');
    }

    public function userDemande()
    {
        return $this->belongsTo(User::class, 'ID_Users_Demande');
    }

    public function userAnnonce()
    {
        return $this->belongsTo(User::class, 'ID_Users_Annonce');
    }

    public function statut()
    {
        return $this->hasOne(StatutModel::class, 'ID_Demandes');
    }

    public function messages()
    {
        return $this->hasMany(Message::class, 'demande_id');
    }
}
