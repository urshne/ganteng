<?php

namespace App\Http\Controllers;

use App\Models\Mantap;
use App\Http\Requests\StoreMantapRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateMantapRequest;

class MantapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mantap = Mantap::get();
        return view('mantap.index', compact('mantap'));
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
     * @param  \App\Http\Requests\StoreMantapRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $r)
    {
        Mantap::create($r->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mantap  $mantap
     * @return \Illuminate\Http\Response
     */
    public function show(Mantap $mantap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mantap  $mantap
     * @return \Illuminate\Http\Response
     */
    public function edit(Mantap $mantap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMantapRequest  $request
     * @param  \App\Models\Mantap  $mantap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, Mantap $mantap)
    {
        Mantap::findOrFail($r->id)->update($r->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mantap  $mantap
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $r )
    {
        Mantap::findOrFail($r->id)->delete($r->all());
        return back();
    }
}
