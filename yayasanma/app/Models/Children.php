<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'umur', 'jenis_kelamin', 'tanggal_lahir', 'tempat_tanggal_lahir', 'foto_anak'];
}
