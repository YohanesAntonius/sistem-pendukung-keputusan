<?php

namespace App\Http\Controllers;

use App\Models\Civilians;
use Illuminate\Http\Request;

class CiviliansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $civilians = Civilians::all();
        return view('civilians.index', compact('civilians'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('civilians.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Civilians::create($request->all());
        return redirect('/civilians');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Civilians  $civilians
     * @return \Illuminate\Http\Response
     */
    public function show(Civilians $civilians)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Civilians  $civilians
     * @return \Illuminate\Http\Response
     */
    public function edit(Civilians $civilians)
    {
        Civilians::find($civilians);
        return view('civilians.edit', compact('civilians'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Civilians  $civilians
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Civilians $civilians)
    {
        Civilians::where('id', $civilians->id)
        ->update([
            'nama' => $request->nama,
            'usia' => $request->usia,
            'status_pernikahan' => $request->status_pernikahan,
            'pekerjaan' => $request->pekerjaan,
            'pendapatan' => $request->pendapatan,
            'status_tinggal' => $request->status_tinggal,
            'tanggungan' => $request->tanggungan
        ]);

        return redirect('/civilians');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Civilians  $civilians
     * @return \Illuminate\Http\Response
     */
    public function destroy(Civilians $civilians)
    {
        Civilians::destroy($civilians->id);
        return redirect('/civilians');
    }
}
