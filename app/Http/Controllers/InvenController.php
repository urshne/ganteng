<?php

namespace App\Http\Controllers;

use App\Models\Inven;
use App\Http\Requests\StoreInvenRequest;
use App\Http\Requests\StoreinventarisRequest;
use App\Http\Requests\UpdateInvenRequest;
use Illuminate\Http\Request;

class InvenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inven = Inven::get();
        return view('inven.index', compact('inven'));
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
     * @param  \App\Http\Requests\StoreInvenRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        Inven::create($r->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inven  $Inven
     * @return \Illuminate\Http\Response
     */
    public function show(Inven $Inven)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inven  $Inven
     * @return \Illuminate\Http\Response
     */
    public function edit(Inven $Inven)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvenRequest  $request
     * @param  \App\Models\Inven  $Inven
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, Inven $Inven)
    {
        Inven::findOrFail($r->id)->update($r->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inven  $Inven
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $r)
    {
        Inven::findOrFail($r->id)->delete($r->all());
        return back();
    }
}
