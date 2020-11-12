<?php

namespace App\Http\Controllers;

use App\Models\Alternatives;
use Illuminate\Http\Request;

class AlternativesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $alternatives = Alternatives::all();
        return view('alternatives.index', compact('alternatives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alternatives.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alternatives::create($request->all());
        return redirect('/alternatives')->with('pesan', 'Data alternatif berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alternatives  $alternatives
     * @return \Illuminate\Http\Response
     */
    public function show(Alternatives $alternatives)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alternatives  $alternatives
     * @return \Illuminate\Http\Response
     */
    public function edit(Alternatives $alternatives)
    {
        Alternatives::find($alternatives);
        return view('alternatives.edit', compact('alternatives'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alternatives  $alternatives
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alternatives $alternatives)
    {
        Alternatives::where('id', $alternatives->id)
        ->update([
            'nama' => $request->nama,
            'bobot' => $request->bobot
        ]);

        return redirect('/alternatives')->with('pesan','Data alternatif berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alternatives  $alternatives
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alternatives $alternatives)
    {
        Alternatives::destroy($alternatives->id);
        return redirect('/alternatives')->with('pesan','Data alternatif berhasil dihapus');
    }
}
