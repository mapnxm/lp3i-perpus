<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftarbuku extends Model
{
    use HasFactory;
    protected $table='daftarbuku';
    protected $fillable=[
        'nama',
        'kode',
        'penulis',
        'status',
    ];
}
