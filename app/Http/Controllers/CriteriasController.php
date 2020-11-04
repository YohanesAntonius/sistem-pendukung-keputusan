<?php

namespace App\Http\Controllers;

use App\Models\Criterias;
use Illuminate\Http\Request;

class CriteriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $criterias = Criterias::all();
        return view('criterias.index', compact('criterias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('criterias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Criterias::create($request->all());
        return redirect('/criterias');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Criterias  $criterias
     * @return \Illuminate\Http\Response
     */
    public function show(Criterias $criterias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Criterias  $criterias
     * @return \Illuminate\Http\Response
     */
    public function edit(Criterias $criterias)
    {
        Criterias::find($criterias);
        return view('criterias.edit', compact('criterias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Criterias  $criterias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Criterias $criterias)
    {
        Criterias::where('id', $criterias->id)
        ->update([
            'bobot' => $request->bobot,
            'usia' => $request->usia,
            'status_pernikahan' => $request->status_pernikahan,
            'pekerjaan' => $request->pekerjaan,
            'pendapatan' => $request->pendapatan,
            'status_tinggal' => $request->status_tinggal,
            'tanggungan' => $request->tanggungan
        ]);

        return redirect('/criterias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Criterias  $criterias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Criterias $criterias)
    {
        Criterias::destroy($criterias->id);
        return redirect('/criterias');
    }
}
