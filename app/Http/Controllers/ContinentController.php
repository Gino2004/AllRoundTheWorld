<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use App\Models\Country;
use Illuminate\Http\Request;

class ContinentController extends Controller
{
    public function getContinent()
    {
        $contitnents = Continent::all();
        return view('welcome',
    [
        'contitnents'=> $contitnents,
    ]);
    }
}
