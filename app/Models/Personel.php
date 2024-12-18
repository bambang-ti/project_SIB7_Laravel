<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personel extends Model
{
    //
    protected $table = 'personel';
    protected $fillable = ['nama', 'nrp', 'alamat', 'agama_id', 'kesatuan_id', 'foto'];
    public $timestamps = false;
}
