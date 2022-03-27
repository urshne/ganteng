<?php

namespace App\Imports;

use App\Models\Jemput;
use Maatwebsite\Excel\Concerns\ToModel;

class JemputImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Jemput([
            //
        ]);
    }
}
