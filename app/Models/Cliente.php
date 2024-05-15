<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    protected $fillable = [
        'user_id',
        'nombres',
        'apellidos',
        'genero',
        'fechan',
        'direccion',
        'ciudad',
        'condado',
        'estado',
        'postal',
        'telefono',
        'email',
        'estatus',
        'ssn',
        'estadocivil',
        'ingreso',
        'banco',
        'ruta',
        'cuenta',
        'dependientes',
        'activo',
        'perfil',
    ];

    public function conyugue(){
        return $this->hasOne(Conyugue::class);
    }

    public function dependientes(){
        return $this->hasMany(Dependiente::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
