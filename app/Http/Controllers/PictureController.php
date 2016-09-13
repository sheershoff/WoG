<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Image;

class PictureController extends Controller {

    public function showPictureList() {
        $pictures = User::all();
        return view('picturelist')->with('pictures', $pictures);
    }

    public function addPicture() {
        return view('addpicture');
    }

    public function savePicture(Request $request) {

        $file = Input::file('pic');
        $img = Image::make($file);
        Response::make($img->encode('jpeg'));

        Auth::user()->photo = $img;
        Auth::user()->save();


        return Redirect::to('list');
    }

    /*
     * Extracts picture's data from DB and makes an image 
     */

    public function showPicture($id) {
        $picture = User::findOrFail($id);
        $pic = Image::make($picture->photo);
        $response = Response::make($pic->encode('jpeg'));

        //setting content-type
        $response->header('Content-Type', 'image/jpeg');

        return $response;
    }

}
