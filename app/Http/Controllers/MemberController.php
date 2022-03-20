<?php

namespace App\Http\Controllers;

use App\Exports\MemberExport;
use App\Models\Member;
use App\Imports\MemberImport;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use Illuminate\Http\Request;
use Session;
use Maatwebsite\Excel\Facades\Excel;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member = Member::get();
        return view('member.index', compact('member'));
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
     * @param  \App\Http\Requests\StoreMemberRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        Member::create($r->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMemberRequest  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r)
    {
        Member::findOrFail($r->id)->update($r->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
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
        return Excel::download(new MemberExport, $date.'member.xlsx');
    }
    
    public function importExcel(Request $r)
    {
        // validasi
		$this->validate($r, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $r->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('file_member',$nama_file);
 
		// import data
		Excel::import(new MemberImport, public_path('/file_member/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('sukses','Data Member Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect()->back();
    }
}
