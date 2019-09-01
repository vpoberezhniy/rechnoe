<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Protocol;
use App\House;

class HouseController extends Controller
{
    public function index()
    {
        $house = House::all();
        return view('admin.protocol.index', compact('house'));
    }
}
