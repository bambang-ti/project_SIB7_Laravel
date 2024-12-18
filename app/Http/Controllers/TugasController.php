<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tugas;
use DB;
use App\Http\Resources\ResponsResource;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $tugas = DB::table('tugas')->get();
        $tugas = Tugas::join('provinsi', 'provinsi.id', '=', 'tugas.provinsi_id')
        ->join('personel', 'personel.id', '=', 'tugas.personel_id')
        ->join('pimpinan', 'pimpinan.id', '=', 'tugas.pimpinan_id')
        ->select('tugas.no_surat', 'tugas.mulai', 'tugas.akhir', 'provinsi.wilayah', 
        'personel.nama as personel','pimpinan.nama as pimpinan')
        ->get();
        return new ResponsResource(true, 'Data Tugas ', $tugas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        //
        $tugas = Tugas::create([
            'no_surat' => $request->no_surat,
            'mulai' => $request->mulai,
            'akhir' => $request->akhir,
            'provinsi_id' => $request->provinsi_id,
            'personel_id' => $request->personel_id,
            'pimpinan_id' => $request->pimpinan_id
            
        ]);
        return new ResponsResource(true, 'Berhasil menambahkan data ', $tugas);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $tugas = Tugas::find($id);
        $tugas = Tugas::join('provinsi', 'provinsi.id', '=', 'tugas.provinsi_id')
        ->join('personel', 'personel.id', '=', 'tugas.personel_id')
        ->join('pimpinan', 'pimpinan.id', '=', 'tugas.pimpinan_id')
        ->select('tugas.no_surat', 'tugas.mulai', 'tugas.akhir', 'provinsi.wilayah', 
        'personel.nama as personel','pimpinan.nama as pimpinan')
        ->where('tugas.id', '=', $id)
        ->get();
        return new ResponsResource(true, 'Detail Tugas ', $tugas);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
