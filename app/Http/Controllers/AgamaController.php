<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agama;
use App\Http\Resources\ResponsResource;
use DB;
class AgamaController extends Controller
{
    //
    public function index(){
        $agama = DB::table('agama')->get();

        return new ResponsResource(true, 'Data Agama', $agama);
    }

    public function store(Request $request){
        $agama = Agama::create([
            'agama'=>$request->agama,
        ]);
        return new ResponsResource(true, 'Berhasil Menambahkan agama', $agama);
    }
    public function edit(string $id){
        $agama = Agama::find($id);
        return new ResponsResource(true, 'Data Agama', $agama);
    }

    public function update(Request $request, string $id){
        $agama = Agama::find($id);
        $agama->update([
            'agama'=>$request->agama,
        ]);
        return new ResponsResource(true, 'Berhasil Mengupdate agama', $agama);
    }
}
