<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
// use App\Models\Kreterias;
use Illuminate\Routing\Controller;
// use Illuminate\Support\Facades\Request;
    use Illuminate\Http\Request;


class KreteriaController extends Controller
{
    public function index()
    {
        //
        $kriteria = Kriteria::all();
        // dd($kriteria);
        return view('pages.admin.saw.kriteria', compact('kriteria'));
    }
    public function create(){
        return view('pages.admin.saw.addkriteria');
    }
    public function store(Request $request){
        // dd($request->all());
        // dd($request->except(['_token','submit']));
         $request->validate([
            "nama" => 'required',
            "bobot" => 'required',
            "label" => 'required'
        ]);
        $kriteria = new Kriteria;
        $kriteria->nama = $request->nama;
        $kriteria->bobot = $request->bobot;
        $kriteria->label = $request->label;
        $kriteria->save();

        return redirect('/kriteria');
    }
    public function delete($id)
    {
        $kriteria = Kriteria::find($id);
        $kriteria->delete();
        return redirect('/kriteria')->with('success', 'berhasil dihapus');
    }
    public function edit($id)
    {
        $kriteria = Kriteria::find($id);
        // $kriteria->update();
        // dd($kriteria);
        return view('pages.admin.saw.putkreteria', compact(['kriteria']));
    }
    public function update($id, Request $request)
    {
       // dd($request->all());
        // dd($request->except(['_token','submit']));
        $request->validate([
            "nama" => 'required',
            "bobot" => 'required',
            "label" => 'required'
        ]);
        $kriteria = Kriteria::find($id);
        $kriteria->nama = $request->nama;
        $kriteria->bobot = $request->bobot;
        $kriteria->label = $request->label;
        $kriteria->save();

        return redirect('/kriteria');
    }

}
