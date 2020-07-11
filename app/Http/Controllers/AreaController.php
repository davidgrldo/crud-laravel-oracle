<?php

namespace App\Http\Controllers;
use App\Models\MsArmada;
use App\Http\Requests\AreaRequest;
use App\Models\MsArea;
use App\Models\MsKaryawan;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $armada = MsArea::with('armada')->get();
        return view('pages.area.index', compact('armada'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $armada = MsArmada::all();
        return view('pages.area.create', compact('armada'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AreaRequest $request)
    {
        $data = $request->all();

        MsArea::create($data);
        return redirect()->route('area.index');
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
    public function edit($kode_area)
    {
        $area = MsArea::findOrFail($kode_area);
        $armada = MsArmada::all();
        return view('pages.area.edit', compact('area', 'armada'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AreaRequest $request, $kode_area)
    {
        $data = $request->all();
        $area = MsArea::findOrFail($kode_area);
        $area->update($data);
        return redirect()->route('area.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_area)
    {
        $area = MsArea::findOrFail($kode_area);
        $area->delete();

        return redirect()->route('area.index');
    }
}