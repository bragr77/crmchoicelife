<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependiente extends Model
{
    use HasFactory;

    protected $table = 'dependientes';

    protected $fillable = [
        'cliente_id',
        'nombres',
        'apellidos',
        'genero',
        'fechan',
        'relacion',
        'estatus',
        'ssn',
        'cobertura',
    ];

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
}
