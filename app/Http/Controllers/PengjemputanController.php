<?php

namespace App\Http\Controllers;

use App\Models\Pengjemputan;
use Illuminate\Http\Request;
use App\Models\Member;

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
}
