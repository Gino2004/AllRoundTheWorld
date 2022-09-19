<?php

namespace App\Http\Controllers;

use App\Models\placeofinterest;
use App\Models\Photo;
use Illuminate\Http\Request;

class PlaceofinterestController extends Controller
{

    public function getplaceofinterest(placeofinterest $placeofinterest)
    {
        $photo = Photo::all();
        $placeofinterest = Placeofinterest::all();
        return view('welcome')->withPlaceofinterests($placeofinterest)->withPhoto($photo);
    }
    public function getTheplaceofinterest(placeofinterest $placeofinterest)
    {
        $photo = Photo::all();
        $placeofinterest = Placeofinterest::all();
        return view('country')->withPlaceofinterests($placeofinterest)->withPhoto($photo);
    }

}
