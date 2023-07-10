<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sa = Admin::all();
        return view('pages.admin.crud.index',compact('sa'));            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('pages.admin.crud.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        // dd($request->except(['_token','submit']));
    //     $data = $request->validate([
    //         'merek' => 'required',
    //         'nama' => 'required',
    //         'harga' => 'required',
    //         'ram' => 'required',
    //         'memory' => 'required',
    //         'performasoc' => 'required',
    //         'kamera' => 'required',
    //         // 'image' => 'required|file|image|mimes:png,jpg,jpeg|max:2048'
    //     ]);

    //     $file = $request->file('image');

    //  $filename= uniqid().'.'. $file->getClientOriginalExtension();
    //    $file->storeAs('public/image',$filename);
    //    $data['image']= $filename;

    //     admin::create($data);

    //     return  redirect('/admin');
        // dd($request->all());
        $admin = new Admin;
        $admin->merek = $request->merek;
        $admin->nama = $request->nama;
        $admin->harga = $request->harga;
        $admin->ram = $request->ram;
        $admin->memory = $request->memory;
        $admin->performasoc = $request->performasoc;
        $admin->kamera = $request->kamera;
        $admin->save();
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Admin::find($id);
        // $alternatif->update();
        // dd($alternatif);
        return view('pages.admin.crud.edit', compact(['admin']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'merek'=>'required',
            'nama'=>'required',
            'harga'=>'required',
            'ram'=>'required',
            'memory'=>'required',
            'performasoc'=>'required',
            'kamera'=>'required'
        ]);

        $admin = Admin::find($id);
        $admin->merek = $request->merek;
        $admin->nama = $request->nama;
        $admin->harga = $request->harga;
        $admin->ram = $request->ram;
        $admin->memory = $request->memory;
        $admin->performasoc = $request->performasoc;
        $admin->kamera = $request->kamera;
        $admin->save();
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        return redirect('/admin')->with('success', 'berhasil dihapus');
    }
}
