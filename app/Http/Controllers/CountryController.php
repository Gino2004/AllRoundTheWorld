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
        $placeofinterest = Placeofinterest::limit(2)->get();
        $photoo = Photo::limit(3)->get();
        $placeofinterestsen = Placeofinterest::limit(1)->get();


    
        return view('welcome',
    [
        'countries'=> $country,
        'photos'=>$photo,
        'placeofinterests'=> $placeofinterest,
        'photoo'=>$photoo,
        'placeofinterestsen'=> $placeofinterestsen

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
