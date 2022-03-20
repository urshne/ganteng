<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Minyak extends Model
{
    use HasFactory;
    protected $table = "minyaks";
    protected $fillable = ["jenis_minyak","merk","qty","kondisi","tanggal_beli"];

}
