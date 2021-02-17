<?php

namespace App\Http\Controllers\Api;

use App\Models\absens;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class absenController extends controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absens = absens::orderby('id') -> paginate(3);

        return response()->json([
            'success' => true,
            'message' => 'Daftar Tambah Mahasiswa',
            'data' => $absens
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'waktu_absen' => 'required|unique:presents|max:255',
        'mahasiswa_id' => 'required',
        'matakuliah_id' => 'required',
        'keterangan' => 'required',
    
        ]);

        $absens = absens::create([
            'waktu_absen' => $request->waktu_absen,
            'mahasiswa_id' => $request->mahasiswa_id,
            'matakuliah_id' => $request->matakuliah_id,
            'keterangan' => $request->keterangan
        ]);

        if($absens)
        {
            return response()->json([
                'success' => true,
                'message' => 'Mahasiswa Berhasil Ditambahkan',
                'data' => $absens
            ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Mahasiswa Gagal Ditambahkan',
                'data' => $absens
            ], 409);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $absen = absens::where('id', $id)->first();

        return response()->json([
            'success' => true,
            'message' => 'Detail data Mahasiswa',
            'data' => $absen
        ], 200);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $request->validate([
                'waktu_absen' => 'required|unique:absens|max:255',
                'mahasiswa_id' => 'required',
                'matakuliah_id' => 'required',
                'keterangan' => 'required',
         
                ]);
        
        $absen = absens::find($id)->update([
            'waktu_absen' => $request->waktu_absen,
            'mahasiswa_id' => $request->mahasiswa_id,
            'matakuliah_id' => $request->matakuliah_id,
            'keterangan' => $request->keterangan,
    
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Post Updated',
            'data' => $absen
        ], 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $cek = absens::find($id)->delete();

        return response()->json([
            'success' => true,
            'message' => 'Post Deleted',
            'data' => $cek
        ], 200);
    }

    
}