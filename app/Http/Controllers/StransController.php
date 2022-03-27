<?php

namespace App\Http\Controllers;

use App\Models\Strans;
use App\Http\Requests\StoreStransRequest;
use App\Http\Requests\UpdateStransRequest;

class StransController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            return view('simulasit.strans');

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
     * @param  \App\Http\Requests\StoreStransRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStransRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Strans  $strans
     * @return \Illuminate\Http\Response
     */
    public function show(Strans $strans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Strans  $strans
     * @return \Illuminate\Http\Response
     */
    public function edit(Strans $strans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStransRequest  $request
     * @param  \App\Models\Strans  $strans
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStransRequest $request, Strans $strans)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Strans  $strans
     * @return \Illuminate\Http\Response
     */
    public function destroy(Strans $strans)
    {
        //
    }
}
