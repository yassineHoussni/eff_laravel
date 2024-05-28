<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;
    protected $primaryKey = 'matricule';
    public $incrementing = false;
    protected $table = 'voitures';
    protected $fillable = ['matricule', 'marque', 'couleur', 'dateMiseEnCirculation'];

    public function salaries()
    {
        return $this->belongsToMany(Salarie::class, 'utilisation', 'matricule', 'codeSal')
                    ->withPivot('dateDebutUtilisation', 'dateFinUtilisation');
    }
}
