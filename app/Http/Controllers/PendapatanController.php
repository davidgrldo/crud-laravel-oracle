<?php

namespace App\Http\Controllers;
use App\Http\Requests\PendapatanRequest;
use App\Models\MsBarang;
use App\Models\MsArmada;
use App\Models\MsPendapatan;
use Illuminate\Http\Request;
use DB;

class PendapatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        DB::setDateFormat('MM/DD/YYYY');
        $data = MsPendapatan::with('armada','barang')->get();
        return view('pages.pendapatan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $armada = MsArmada::all();
        $barang = MsBarang::all();
        return view('pages.pendapatan.create', compact('armada', 'barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PendapatanRequest $request)
    {
        $data = $request->all();

        MsPendapatan::create($data);
        return redirect()->route('pendapatan.index');
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
        $data = MsPendapatan::findOrFail($id);
        $armada = MsArmada::all();
        $barang = MsBarang::all();
        return view('pages.pendapatan.edit', compact('data', 'barang', 'armada'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PendapatanRequest $request, $id)
    {
        $data = $request->all();
        $area = MsPendapatan::findOrFail($id);
        $area->update($data);
        return redirect()->route('pendapatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $area = MsPendapatan::findOrFail($id);
        $area->delete();

        return redirect()->route('pendapatan.index');
    }
}