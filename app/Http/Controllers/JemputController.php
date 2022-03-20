<?php

namespace App\Http\Controllers;

use App\Exports\JemputExport;
use App\Models\Jemput;
use App\Models\Member;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Http\Requests\StoreJemputRequest;
use App\Http\Requests\UpdateJemputRequest;

class JemputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Jemput::join('tb_member','pengjemputan.id_member','=','tb_member.id')->select('pengjemputan.*','tb_member.nama','tb_member.alamat', 'tb_member.tlp')->get();
        $member = Member::orderBy('nama')->get();
        return view('jemput.index')->with([
            'data' => $data,
            'member' => $member
        ]);
    }

    public function updateStatus(Request $r)
    {
        Jemput::findOrFail($r->id)->update([
            'status' => $r->status
        ]);
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJemputRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        Jemput::create($r->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jemput  $jemput
     * @return \Illuminate\Http\Response
     */
    public function show(Jemput $jemput)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jemput  $jemput
     * @return \Illuminate\Http\Response
     */
    public function edit(Jemput $jemput)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJemputRequest  $request
     * @param  \App\Models\Jemput  $jemput
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, Jemput $jemput)
    {
        Jemput::findOrFail($r->id)->update($r->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jemput  $jemput
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $r)
    {
        Member::findOrFail($r->id)->delete($r->all());
        return back();
    }

    public function export()
    {
        $date = date('Y-m-d-');
        return Excel::download(new JemputExport, $date.'jemput.xlsx');
    }
}
