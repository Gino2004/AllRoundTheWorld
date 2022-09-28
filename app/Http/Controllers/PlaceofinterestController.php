<?php

namespace App\Http\Controllers;

use App\Models\placeofinterest;
use App\Models\Photo;
use App\Models\Continent;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlaceofinterestController extends Controller
{
    public function getTheplaceofinterest(Country $Country, Placeofinterest $placeofinterest, Photo $photoo )
    {
        $continent = Continent::all();
        $user = Auth::user();

        return view('placeofinterest',[
        'user'=> $user,
        'continents'=> $continent,
        'countries'=> $Country,
        'placeofinterest'=> $placeofinterest,
        'photoo'=>$photoo,
        ]);
    }
}
