<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mantap extends Model
{
    use HasFactory;
    protected $table = "mantaps";
    protected $fillable = ["nama_barang","merk","tanggal_beli","harga","qty"];
}
