<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvisModel extends Model
{
    use HasFactory;

    protected $table = 'avis';

    protected $fillable = [
        'contenu_commentaire',
        'note',
        'id_utilisateur',
    ];

    public $timestamps = true;

    public function utilisateur()
    {
        return $this->belongsTo(User::class, 'id_utilisateur');
    }
}
