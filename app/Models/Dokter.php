<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    protected $table = "Dokter";
    public $timestamps=false;
    protected $fillable = [
        'id',
        'nama',
        'jabatan'
    ];
}
