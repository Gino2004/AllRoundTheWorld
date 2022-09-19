<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    //

    public function getcountry()
    {
        $country = Country::all();
        return view('welcome')->withCountrys($country);
    }

    public function getcountries(Country $country)
    {
        $country = Country::all();
        return view('welcome')->withCountrys($country);
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
