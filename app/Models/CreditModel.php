<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditModel extends Model
{
    
        use HasFactory;
    
        protected $table = 'credit';
    
        protected $primaryKey = 'ID_Users'; // Spécifier la clé primaire
    
        protected $fillable = ['ID_Users', 'Nb_Credit', 'last_ad_watched_at'];
    
        public function user()
        {
            return $this->belongsTo(User::class, 'ID_Users');
        }
    }
    