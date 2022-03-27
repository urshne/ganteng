<?php

namespace App\Http\Controllers;

use App\Models\Pengjemputan;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Http\Controllers\JemputController;

class PenjemputanController extends Controller
{
    public function index()
    {
      $items = Pengjemputan::join('member','pengjemputan.id_member','=','member.id')->select('jemput.*','member.nama')->orderBy('member.nama')->get();

      $member = Member::orderBy('nama')->get();

      return view('pengjemputan.index')->with([
          'items' => $items,
          'member' => $member
      ]);
    }

    public function destroy(Request $r)
    {
        Pengjemputan::findOrFail($r->id)->delete($r->all());
        return back();
    }

    public function update(Request $r, Pengjemputan $pengjemputan)
    {
        Pengjemputan::findOrFail($r->id)->update($r->all());
        return back();
    }

}
