<?php

namespace App\Exports;

use App\Models\Jemput;
use Maatwebsite\Excel\Concerns\FromCollection;

class JemputExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Jemput::all();
    }
}
