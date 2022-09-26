<?php

namespace App\Http\Controllers;

use App\Models\placeofinterest;
use App\Models\Photo;
use App\Models\Continent;
use App\Models\Country;
use Illuminate\Http\Request;

class PlaceofinterestController extends Controller
{
    public function getTheplaceofinterest(Country $Country, Placeofinterest $placeofinterest, Photo $photoo )
    {
        $continent = Continent::all();

        return view('placeofinterest',[
        'continents'=> $continent,
        'countries'=> $Country,
        'placeofinterest'=> $placeofinterest,
        'photoo'=>$photoo,
        ]);
    }
}
