<?php

namespace App\Http\Controllers;

use App\Models\Minyak;
use App\Http\Requests\StoreMinyakRequest;
use App\Http\Requests\UpdateMinyakRequest;
use Illuminate\Http\Request;

class MinyakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $minyak = Minyak::get();
        return view('minyak.index', compact('minyak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMinyakRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $r)
    {
        Minyak::create($r->all());
        return back();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Minyak  $minyak
     * @return \Illuminate\Http\Response
     */
    public function show(Minyak $minyak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Minyak  $minyak
     * @return \Illuminate\Http\Response
     */
    public function edit(Minyak $minyak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMinyakRequest  $request
     * @param  \App\Models\Minyak  $minyak
     * @return \Illuminate\Http\Response
     */
    public function update(request $r, Minyak $minyak)
    {
        Minyak::findOrFail($r->id)->update($r->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Minyak  $minyak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $r)
    {
        Minyak::findOrFail($r->id)->delete($r->all());
        return back();
    }
}
