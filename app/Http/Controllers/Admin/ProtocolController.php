<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Protocol;
use App\House;

class ProtocolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prtcl = Protocol::all();
        return view('admin.protocol.index', compact('prtcl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prtcl = new Protocol;
        $houses = House::all()->pluck('name', 'id')->toArray();
//        dd($houses);
        return view('admin.protocol.create', compact('prtcl', 'houses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'n_protocol' => 'required|max:255',
            'theme' => 'required|max:255',
//            'house_number' => 'required|min:2|max:10',
            'description' => 'required|max:255',
        ]);

        $prtcl = new Protocol();
        $prtcl->n_protocol = $request->n_protocol;
        $prtcl->theme = $request->theme;
        $prtcl->house_number = $request->house_number;
        $prtcl->description = $request->description;

        if($request->file != null)
        {
           $file = $request->file;
           $fName = $file->getClientOriginalName();
//            $fName = date('Y-m-d-H:i:s')."-". $file->getClientOriginalName();
           $file->move(public_path().'/documents', $fName);
           $prtcl->file = '/documents/' . $fName;
        }
//        dd($prtcl);
        $prtcl->save();
        return redirect('/admin/protocol');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $prtcl = House::find($id);
//        return view('admin.protocol.index', compact('prtcl'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prtcl = Protocol::find($id);
        $houses = House::all()->pluck('name', 'id')->toArray();
        return view('admin.protocol.create', compact('prtcl', 'houses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'n_protocol' => 'required|max:255',
            'theme' => 'required|max:255',
//            'house_number' => 'required|min:2|max:10',
            'description' => 'required|max:255',
        ]);

        $prtcl = Protocol::find($id);
        $prtcl->n_protocol = $request->n_protocol;
        $prtcl->theme = $request->theme;
        $prtcl->house_number = $request->house_number;
        $prtcl->description = $request->description;

        if($request->file)
        {
            $file = $request->file;
            $fName = $file->getClientOriginalName();
            $file->move(public_path().'/documents', $fName);
            $prtcl->file = '/documents/' . $fName;
        }
        $prtcl->save();
        return redirect('/admin/protocol');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prtcl = Protocol::find($id);
        $prtcl->delete();
        return redirect('admin/protocol/');
    }
}
