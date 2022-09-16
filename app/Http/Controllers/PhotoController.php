<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    //

    public function getphoto(Photo $photo)
    {
        $photo = Photo::all();
        return view('welcome')->withPhotos($photo);
    }
}
