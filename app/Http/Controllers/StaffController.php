<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Http\Resources\ResponsResource;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $staff = Staff::all(); //syntax menggunakan eloquent

        return view ('staff.index', compact('staff'));
        //compact => salah satu library yang membantu kita 
        //untuk mengirimkan variable kedalam view
        //return view ('staff.index', [$staff => 'staff']);
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
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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

    //mengirimkan data kedalam routing dan diakses api get untuk dilihat datanya secara json
    public function apiStaff(){
        $staff = Staff::all();
        
        if($staff){
            return new ResponsResource(true, 'Data Staff berhasil dilihat', $staff);
        } else {
            return new ResponsResource(false, 'Data tidak dapat dilihat');
        }

        // return response()->json(
        //     [
        //         'success' => true,
        //         'message' => 'Melihat data staff',
        //         'data' => $staff

        //     ], 200);

    }

    public function apiStaffDetail($id){
        $staff = Staff::find($id);
        if($staff){
            return new ResponsResource(true, 'Data Staff berhasil dilihat', $staff);
        } else {
          
            return new ResponsResource(false, 'Data tidak dapat dilihat', $staff);
        }
    }
}
