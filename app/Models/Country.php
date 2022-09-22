<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public function placeofinterests()
    {
        return $this->hasMany(placeofinterest::class,'countrie_id');
    }

    public function Continents()
    {
        return $this->belongsTo(Continent::class);
    }
}
