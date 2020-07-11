<?php

namespace App\Http\Controllers;
use App\Http\Requests\TotalRequest;
use App\Models\MsBarang;
use App\Models\MsTotal;
use Illuminate\Http\Request;
use DB;

class TotalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        DB::setDateFormat('MM/DD/YYYY');
        $data = MsTotal::with('barang')->get();
        return view('pages.total.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = MsBarang::all();
        return view('pages.total.create', compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TotalRequest $request)
    {
        $data = $request->all();

        MsTotal::create($data);
        return redirect()->route('total.index');
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
        $data = MsTotal::findOrFail($id);
        $data['barang'] = MsBarang::all();
        return view('pages.total.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TotalRequest $request, $id)
    {
        $data = $request->all();
        $total = MsTotal::findOrFail($id);
        $total->update($data);
        return redirect()->route('total.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $total = MsTotal::findOrFail($id);
        $total->delete();

        return redirect()->route('total.index');
    }
}