<?php

namespace App\Http\Controllers;
use App\Models\jadwals;
use Illuminate\Http\Request;


class jadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwals = jadwals::orderBy('id')->get();
        return view('/jadwals/index', compact('jadwals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jadwals/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jadwals = new jadwals;
        $jadwals->jadwal = $request->jadwal;
        $jadwals->matakuliah_id = $request->matakuliah_id;

        $jadwals->save();

        return redirect('/jadwals');
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
        $jdw = jadwals::where('id', $id)->first();
        return view('jadwals/edit', ['jdw' => $jdw]);
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
            'jadwal' => 'required',
            'matakuliah_id' => 'required'
        ]);

        jadwals::find($id)->update([
            'jadwal' => $request->jadwal,
            'matakuliah_id' => $request->matakuliah_id
        ]);

        return redirect('/jadwals');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        jadwals::find($id)->delete();
        return redirect('/jadwals');
    }
}