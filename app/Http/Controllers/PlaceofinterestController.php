<?php

namespace App\Http\Controllers;

use App\Models\placeofinterest;
use App\Models\Photo;
use App\Models\Continent;
use App\Models\Country;
use Illuminate\Http\Request;

class PlaceofinterestController extends Controller
{
    public function getTheplaceofinterest(Country $Country)
    {
        $continent = Continent::all();
        $placeofinterest = Placeofinterest::all();
        $photoo = Photo::all();

        return view('country',[
        'continents'=> $continent,
        'countries'=> $Country,
        'placeofinterests'=> $placeofinterest,
        'photoo'=>$photoo,
        ]);
    }
}
