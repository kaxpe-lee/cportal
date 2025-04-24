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

    protected $guarded = [];
}
