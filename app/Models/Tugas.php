<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    //
    protected $table = 'tugas';
    protected $fillable = ['no_surat', 'mulai', 'akhir', 'provinsi_id', 'personel_id', 'pimpinan_id'];
    public $timestamps = false;
}
