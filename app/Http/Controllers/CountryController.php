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
        return view('welcome')->withCountries($country);
    }

}
