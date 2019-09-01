<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Protocol;
use App\House;

class PrtclController extends Controller
{
    public function index()
    {
        $prtcl = Protocol::all();
        $house = House::all();

        return view('prtcl.index', compact('prtcl', 'house') );
    }

//    public function getDownload()
//    {
//        $file= public_path(). "/download/info.pdf";
//
//        return response()->download($file);
//    }
}
