<?php
 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatutModel extends Model
{
    use HasFactory;

    protected $table = 'statuts';

    protected $fillable = [
        'Statut',
        'ID_Demandes',
    ];

    public function demande()
    {
        return $this->belongsTo(DemandesModel::class, 'ID_Demandes');
    }
}

