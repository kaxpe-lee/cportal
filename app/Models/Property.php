<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    public function accounts()
    {
        return $this->belongsToMany(Account::class)
            ->withPivot('participacion') // Incluir el campo adicional
            ->withTimestamps();
    }

    protected $fillable = ['property_id', 'type_property', 'rented','date_adquisition','referencia_catastro',
    'valor_catastro','address','address_number','street_number','street_type','city','province','cp'];
}
