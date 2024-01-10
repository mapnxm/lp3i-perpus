<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rentlogs extends Model
{
    use HasFactory;
    protected $table='rent_logs';
    protected $fillable=[
        'nama',
        'email',
        'tglKembali',
        'tglPinjam',
        'JudulBuku',
        'kode'
    ];
}
