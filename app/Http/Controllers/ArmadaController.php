<?php

namespace App\Http\Controllers;
use App\Models\MsArmada;
use App\Http\Requests\ArmadaRequest;
use App\Models\MsKaryawan;
use Illuminate\Http\Request;

class ArmadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = MsArmada::with('karyawan')->get();
        return view('pages.armada.index', compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $karyawan = MsKaryawan::all();
        return view('pages.armada.create', compact('karyawan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArmadaRequest $request)
    {
        $data = $request->all();

        MsArmada::create($data);
        return redirect()->route('armada.index');
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
    public function edit($kode_armada)
    {
        $armada = MsArmada::findOrFail($kode_armada);
        $karyawan = MsKaryawan::all();
        return view('pages.armada.edit', compact('armada', 'karyawan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArmadaRequest $request, $kode_armada)
    {
        $data = $request->all();

        $armada = MsArmada::findOrFail($kode_armada);

        $armada->update($data);

        return redirect()->route('armada.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_armada)
    {
        $armada = MsArmada::findOrFail($kode_armada);
        $armada->delete();

        return redirect()->route('armada.index');
    }
}