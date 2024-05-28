<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'service';
    protected $fillable = ['codeSer', 'nomSer'];

    public function salaries()
    {
        return $this->hasMany(Salarie::class, 'codeSer');
    }
}
