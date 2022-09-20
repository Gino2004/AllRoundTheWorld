<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\models\Photo;
use App\Models\placeofinterest;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    //

    public function getcountry()
    {
        $country = Country::all();
        $photo = Photo::all();
        $placeofinterest = Placeofinterest::all();

    
        return view('welcome',
    [
        'countries'=> $country,
        'photos'=>$photo,
        'placeofinterests'=> $placeofinterest

    ]);
    }

    public function getThecountry()
    {
        $country = Country::all();
        return view('country')->withCountrys($country);
    }
    public function getThecountries(Country $country)
    {
        $country = Country::all();
        return view('country')->withCountrys($country);
    }
    
}
