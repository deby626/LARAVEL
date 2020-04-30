<?php

namespace App\Http\Controllers;

use App\selections;
use Illuminate\Http\Request;

class SelectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $selections = selections::all();
        return view('selections.index', compact('selections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('selections.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        selections::create($request->all());
       return redirect('/selections')->with('status','Barang berhasil di tambah!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\selections  $selections
     * @return \Illuminate\Http\Response
     */
    public function show(selections $selections)
    {
        return view('selections.show', compact('selections'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\selections  $selections
     * @return \Illuminate\Http\Response
     */
    public function edit(selections $selections)
    {
        return view('selections.edit',compact('selections'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\selections  $selections
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, selections $selections)
    {
        selections::where('id', $selections->id)
                ->update([
                    'kode' => $request->kode,
                    'nama' => $request->nama,
                    'awal' => $request->awal,
                    'jual' => $request->jual,
                ]);

                return redirect('/selections')->with('status','Data Barang berhasil di ubah!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\selections  $selections
     * @return \Illuminate\Http\Response
     */
    public function destroy(selections $selections)
    {
        selections::destroy($selections->id);
        return redirect('/selections')->with('status','Data Barang berhasil di hapus!!!');
       
    }
}
