<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        

        return redirect()->back();
    }


}
