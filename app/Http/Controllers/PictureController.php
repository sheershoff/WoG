<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
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
        $pictures = UserProfile::all();
        return view('picturelist')->with('pictures', $pictures);
    }

    public function addPicture() {
        return view('addpicture');
    }

    public function savePicture(Request $request) {

        $file = Input::file('pic');
        $img = Image::make($file);
        Response::make($img->encode('jpeg'));

        $picture = new UserProfile;
        $picture->name = $request->get('name');
        $picture->pic = $img;
        $picture->save();


        return Redirect::to('list');
    }

    /*
     * Extracts picture's data from DB and makes an image 
     */

    public function showPicture($id) {
        $picture = UserProfile::findOrFail($id);
        $pic = Image::make($picture->pic);
        $response = Response::make($pic->encode('jpeg'));

        //setting content-type
        $response->header('Content-Type', 'image/jpeg');

        return $response;
    }

}
