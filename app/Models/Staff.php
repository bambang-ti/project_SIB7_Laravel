<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Staff extends Model
{
    use HasFactory;
    protected $table = 'staff'; //deklarasi table
    protected $fillable = ['nip', 'name', 'alamat', 'email'];
    //deklarasi column 
    public $timestamps = false; //optional ketika ingin mematikan created_at dan updated_at
}
