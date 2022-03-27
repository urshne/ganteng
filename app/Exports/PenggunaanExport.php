<?php

namespace App\Exports;

use App\Models\PenggunaanBarang;
use Maatwebsite\Excel\Concerns\FromCollection;

class PenggunaanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PenggunaanBarang::all();
    }
}
