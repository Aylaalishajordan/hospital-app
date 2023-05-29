<?php

namespace App\Http\Controllers;

use App\Models\hospital;
use Illuminate\Http\Request;
use Carbon\Carbonx;
use Illuminate\Support\Facades\Auth;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospital = Hospital::all();
        return view('home.index', compact('hospital'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $request->validate([
            'nama' => 'required|min:3',
            'umur' => 'required',
            'alamat' => 'required',
            'dokter' => 'required',
        ]);

        hospital::create([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'dokter' => $request->dokter,
        ]);
        return redirect()->route('home')->with('succesupdate', 'Edit Succes!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function show(hospital $hospital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Hospital::where('id', '=', $id)->firstOrFail();
        return view('home.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'umur' => 'required',
            'alamat' => 'required',
            'dokter' => 'required',
        ]);

        hospital::where('id', '=', $id)->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'dokter' => $request->dokter,
        ]);

        return redirect()->route('home')->with('succesupdate', 'Edit Succes!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hospital::where('id', '=', $id)->delete();
        return redirect()->back();
    }
}
