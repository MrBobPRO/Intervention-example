<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function upload(Request $request)
    {
        $file = $request->file('file');
        $file->storeAs('imgs', $file->getClientOriginalName(), 'public');

        $img = Image::make($file->path());


        //Set image width 200 and height auto by saving ration
        $img->resize(200, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        //save image
        $img->save(storage_path('app/public/thumbs') . '/' . $file->getClientOriginalName());



        // Second image by fit method
        $img2 = Image::make($file->path());
        //Set image width 200 and height 300 croping from center
        $img2->fit(200, 300, function ($constraint) {
            $constraint->upsize();
        }, 'center');
        // Save image2
        $img2->save(storage_path('app/public/fits') . '/' . $file->getClientOriginalName());

        return redirect()->back();
    }


}
