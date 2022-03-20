<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jemput extends Model
{
    use HasFactory;
    protected $table = 'pengjemputan';
    protected $fillable = [
        'id_member',
        'petugas',
        'status',
    ];
}
