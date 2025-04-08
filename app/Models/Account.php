<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Account extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function properties()
    {
        return $this->belongsToMany(Property::class);
            
    }

    protected $fillable = ['nombre','user_id', 'email', 'apellidos','idioma','cuenta_id',
    'telelfono','residencia_direccion','residencia_ciudad','tipo_persona','residencia_provincia',
    'residencia_cp','nie','residencia_pais','residencia_fiscal_pais','pais_nacimiento',
    'ciudad_nacimiento','fecha_nacimiento'];
}
