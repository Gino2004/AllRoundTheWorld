<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class placeofinterest extends Model
{
    use HasFactory;

    public function Photos()
    {
        return $this->hasMany(photo::class);
    }

    public function Countries()
    {
        return $this->belongsTo(Country::class);
    }
}
