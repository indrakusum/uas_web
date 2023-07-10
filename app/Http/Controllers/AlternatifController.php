<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    public function index()
    {
        //
        $alternatif = Alternatif::all();
        // dd($alternatif);
        return view('pages.admin.saw.alternatif.alternatif', compact('alternatif'));
    }
    public function create(){
        return view('pages.admin.saw.alternatif.adalternatif');
    }
    public function store(Request $request){
        // dd($request->all());
        // dd($request->except(['_token','submit']));
        $data = $request->validate([
            'nama' => 'required',
            'merek' => 'required',
            'harga' => 'required',
            'ram' => 'required',
            'memory' => 'required',
            'performasoc' => 'required',
            'kamera' => 'required',
        
        ]);

        // Alternatif::create($data);?\

        // return  redirect('/alternatif');
        // dd($request->all());
        $alternatif = new Alternatif;
        $alternatif->nama = $request->nama;
        $alternatif->merek = $request->merek;
        $alternatif->harga = $request->harga;
        $alternatif->ram = $request->ram;
        $alternatif->memory = $request->memory;
        $alternatif->performasoc = $request->performasoc;
        $alternatif->kamera = $request->kamera;
        $alternatif->save();
        return redirect('/alternatif');
    }
    public function destroy($id)
    {
        $alternatif = Alternatif::find($id);
        $alternatif->delete();
        return redirect('/alternatif')->with('success', 'berhasil dihapus');
    }
    public function edit($id)
    {
        $alternatif = Alternatif::find($id);
        // $alternatif->update();
        // dd($alternatif);
        return view('pages.admin.saw.alternatif.putalternatif', compact(['alternatif']));
    }
    public function update( Request $request, $id)
    {
       // dd($request->all());
        // dd($request->except(['_token','submit']));
        $request->validate([
            'nama' => 'required',
            'merek' => 'required',
            'harga' => 'required',
            'ram' => 'required',
            'memory' => 'required',
            'performasoc' => 'required',
            'kamera' => 'required'
        ]);
        $alternatif = Alternatif::find($id);
        $alternatif->nama = $request->nama;
        $alternatif->merek = $request->merek;
        $alternatif->harga = $request->harga;
        $alternatif->ram = $request->ram;
        $alternatif->memory = $request->memory;
        $alternatif->performasoc = $request->performasoc;
        $alternatif->kamera = $request->kamera;
        $alternatif->save();
        return redirect('/alternatif');
    }

}
