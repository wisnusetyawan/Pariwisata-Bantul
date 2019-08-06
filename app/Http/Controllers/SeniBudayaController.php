<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeniBudayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $budaya = \App\Senibudaya::paginate(10);
        return view('budaya.index', ['budaya' => $budaya]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('budaya.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $senibudaya = new \App\Senibudaya;
            $senibudaya->nama = $request->get('name');
            $senibudaya->jenis = $request->get('jenis');
            $senibudaya->jumlah = $request->get('jumlah');
            $senibudaya->digunakan = $request->get('digunakan');
            $senibudaya->tersedia = $request->get('tersedia');
            $gmbr1 = $request->file('gmbr1');
            if($gmbr1)
            {
                $gambar1 = $gmbr1->store('senibudaya', 'public');
                $senibudaya->gambar1 = $gambar1;
            }

            $gmbr2 = $request->file('gmbr2');
            if($gmbr2)
            {
                $gambar2 = $gmbr2->store('senibudaya', 'public');
                $senibudaya->gambar2 = $gambar2;
            }

            $gmbr3 = $request->file('gmbr3');
            if($gmbr3)
            {
                $gambar3 = $gmbr3->store('senibudaya', 'public');
                $senibudaya->gambar3 = $gambar3;
            }

            $gmbr4 = $request->file('gmbr4');
            if($gmbr4)
            {
                $gambar4 = $gmbr4->store('senibudaya', 'public');
                $senibudaya->gambar4 = $gambar4;
            }

            $gmbr5 = $request->file('gmbr5');
            if($gmbr5)
            {
                $gambar5 = $gmbr5->store('senibudaya', 'public');
                $senibudaya->gambar5 = $gambar5;
            }

            $senibudaya->save();

            return redirect()->route('budaya.index')->with('status', 'Seni Budaya Berhasil Di Buat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $senibudaya = \App\Senibudaya::findOrFail($id);
        return view('budaya.detail', ['budaya' => $senibudaya]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $budaya = \App\Senibudaya::findOrFail($id);
        return view('budaya.edit', ['budaya' => $budaya]);
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
        $senibudaya = \App\Senibudaya::findOrFail($id);
            $senibudaya->nama = $request->get('name');
            $senibudaya->jenis = $request->get('jenis');
            $senibudaya->jumlah = $request->get('jumlah');
            $senibudaya->digunakan = $request->get('digunakan');
            $senibudaya->tersedia = $request->get('tersedia');
            $gmbr1 = $request->file('gmbr1');
            if($gmbr1)
            {
                $gambar1 = $gmbr1->store('senibudaya', 'public');
                $senibudaya->gambar1 = $gambar1;
            }

            $gmbr2 = $request->file('gmbr2');
            if($gmbr2)
            {
                $gambar2 = $gmbr2->store('senibudaya', 'public');
                $senibudaya->gambar2 = $gambar2;
            }

            $gmbr3 = $request->file('gmbr3');
            if($gmbr3)
            {
                $gambar3 = $gmbr3->store('senibudaya', 'public');
                $senibudaya->gambar3 = $gambar3;
            }

            $gmbr4 = $request->file('gmbr4');
            if($gmbr4)
            {
                $gambar4 = $gmbr4->store('senibudaya', 'public');
                $senibudaya->gambar4 = $gambar4;
            }

            $gmbr5 = $request->file('gmbr5');
            if($gmbr5)
            {
                $gambar5 = $gmbr5->store('senibudaya', 'public');
                $senibudaya->gambar5 = $gambar5;
            }

            $senibudaya->save();

            return redirect()->route('budaya.index')->with('status', 'Seni Budaya Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $budaya = \App\Senibudaya::findOrFail($id);
        $budaya->delete();
        return redirect()->route('budaya.index')->with('status', 'Seni Budaya Berhasil Dihapus');
    }
}
