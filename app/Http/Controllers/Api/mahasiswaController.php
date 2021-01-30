<?php

namespace App\Http\Controllers\Api;

use App\Models\students;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = students::orderBy('id', 'desc')->paginate(3);

        return response()->json([
            'success' => true,
            'message' => 'Daftar data mahasiswa',
            'data' => $gstudents
        ], 200);
    } /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:studentsmax:255',
            'description' => 'required',
        ]);

        $students = students::create([
            'name'=> $request->name,
            'description' => $request->description
            ]);

            if($students)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'students berhasil di tambahkan',
                    'data' => $students
                ], 200);
            }else{
                return response()->json([
                'success' => false,
                'message' => 'students gagal di tambahkan',
                'data' => $students
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
        $student = students::where('id', $id)->first();    
        return response()->json([
            'success' => true,
            'message' => 'Detail students',
            'data' => $student
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
            'name' => 'required|unique:students|max:255',
            'description' => 'required',
        ]);

        $s = students::find($id)->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'students Updated',
            'data' => $s
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
        $cek = students::find($id)->delete();

        return response()->json([
            'success' => true,
            'message' => 'students Deleted',
            'data' => $cek
        ], 200);
    }

}
