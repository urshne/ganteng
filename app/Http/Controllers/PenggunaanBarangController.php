<?php

namespace App\Http\Controllers;

use App\Models\PenggunaanBarang;
use App\Export\PenggunaanBarangExport;
use App\Exports\PenggunaanExport;
use App\Http\Requests\StorePenggunaanBarangRequest;
use App\Http\Requests\UpdatePenggunaanBarangRequest;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class PenggunaanBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penggunaan_barang = PenggunaanBarang::get();
        return view('Penggunaan_Barang.databarang', compact('penggunaan_barang'));
    }

    public function updateStatus(Request $r)
    {
        PenggunaanBarang::findOrFail($r->id)->update([
            'status' => $r->status
        ]);
        return back();
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
     * @param  \App\Http\Requests\StorePenggunaanBarangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        PenggunaanBarang::create($r->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PenggunaanBarang  $penggunaanBarang
     * @return \Illuminate\Http\Response
     */
    public function show(PenggunaanBarang $penggunaanBarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PenggunaanBarang  $penggunaanBarang
     * @return \Illuminate\Http\Response
     */
    public function edit(PenggunaanBarang $penggunaanBarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePenggunaanBarangRequest  $request
     * @param  \App\Models\PenggunaanBarang  $penggunaanBarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, PenggunaanBarang $penggunaan_barang)
    {
        PenggunaanBarang::findOrFail($r->id)->update($r->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PenggunaanBarang  $penggunaanBarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $r)
    {
        PenggunaanBarang::findOrFail($r->id)->delete($r->all());
        return back();
    }

    public function export()
    {
        $date = date('Y-m-d-');
        return Excel::download(new PenggunaanExport, $date.'penggunaanbarang.xlsx');
    }
}
