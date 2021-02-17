<?php

namespace App\Http\Controllers;
use App\Models\kontrakmatakuliahs;
use Illuminate\Http\Request;


class kontrakmatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontrakmatakuliahs = kontrakmatakuliahs::orderBy('id')->get();
        return view('/kontrakmatakuliahs/index', compact('kontrakmatakuliahs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kontrakmatakuliahs/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kontrakmatakuliahs = new kontrakmatakuliahs;
        $kontrakmatakuliahs->mahasiswa_id = $request->mahasiswa_id;
        $kontrakmatakuliahs->semester_id = $request->semester_id;

        $kontrakmatakuliahs->save();

        return redirect('/kontrakmatakuliahs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mk = kontrakmatakuliahs::where('id', $id)->first();
        return view('kontrakmatakuliahs/edit', ['mk' => $mk]);
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
            'mahasiswa_id' => 'required',
            'semester_id' => 'required'
        ]);

        kontrakmatakuliahs::find($id)->update([
            'mahasiswa_id' => $request->mahasiswa_id,
            'semester_id' => $request->semester_id
        ]);

        return redirect('/kontrakmatakuliahs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kontrakmatakuliahs::find($id)->delete();
        return redirect('/kontrakmatakuliahs');
    }
}