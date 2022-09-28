<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use App\Models\Country;
use App\models\Photo;
use App\Models\placeofinterest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CountryController extends Controller
{
    //
    public function getcountry()
    {
        $user = Auth::user();
        $continent = Continent::all();
        $country = Country::all();
        $photo = Photo::all();
        $placeofinterest = Placeofinterest::limit(2)->get();
        $photoo = Photo::limit(3)->get();
        $placeofinterestsen = Placeofinterest::limit(1)->get();        
    
        return view('welcome',
    [
        'user'=> $user,
        'continents'=> $continent,
        'countries'=> $country,
        'photos'=>$photo,
        'placeofinterests'=> $placeofinterest,
        'photoo'=>$photoo,
        'placeofinterestsen'=> $placeofinterestsen,
    ]);
    }

    public function getThecountry(Country $Country)
    {
        $user = Auth::user();
        $continent = Continent::all();
        $placeofinterest = Placeofinterest::limit(10)->get();
        $photoo = Photo::limit(3)->get();

        return view('country',[
        'user'=> $user,
        'continents'=> $continent,
        'countries'=> $Country,
        'placeofinterests'=> $placeofinterest,
        'photoo'=>$photoo,
        ]);
    }
    
}
