<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conyugue extends Model
{
    use HasFactory;

    protected $table = 'conyugues';

    protected $fillable = [
        'cliente_id',
        'nombres',
        'apellidos',
        'genero',
        'fechan',
        'estatus',
        'ssn',
    ];

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
}
