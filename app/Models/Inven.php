<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inven extends Model
{
    use HasFactory;
    protected $table = 'invens';
    protected $fillable = ['nama_barang','merk_barang','qty','kondisi','tanggal_pengadaan'];
}
