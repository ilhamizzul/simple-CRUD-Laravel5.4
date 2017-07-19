<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\karyawan;

class karyawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawans = karyawan::all();    
        return view('karyawan.karyawan', compact('karyawans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawan.tambah_karyawan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $karyawans = new karyawan;
        $this->validate($request, [
                'nama'=>'required|unique:karyawans',
                'nopeg'=>'required|unique:karyawans',
                'alamat'=>'required',
            ]);
        $karyawans->nama = $request->nama;
        $karyawans->nopeg = $request->nopeg;
        $karyawans->alamat = $request->alamat;
        $karyawans->save();
        session()->flash('message', 'Tambah Karyawan Berhasil');
        return redirect('karyawan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = karyawan::find($id); 
        return view('karyawan.lihat_karyawan', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = karyawan::find($id); 
        return view('karyawan.edit_karyawan',compact('item'));
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
        $karyawans = karyawan::find($id);
        $this->validate($request, [
                'nama'=>'required',
                'nopeg'=>'required',
                'alamat'=>'required',
            ]);
        $karyawans->nama = $request->nama;
        $karyawans->nopeg = $request->nopeg;
        $karyawans->alamat = $request->alamat;
        $karyawans->save();
        return redirect('karyawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = karyawan::find($id);
        session()->flash('message', 'Hapus Berhasil');
        $item->delete();
        return redirect('/karyawan');
    }
}
