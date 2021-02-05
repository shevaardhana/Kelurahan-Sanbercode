<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PendudukRequest;
use Illuminate\Http\Request;
use App\Models\Penduduk;
use RealRashid\SweetAlert\Facades\Alert;
use PDF;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Penduduk::all();
        return view('pages.backend.penduduk.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backend.penduduk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PendudukRequest $request)
    {
        $data = $request->all();
        Penduduk::create($data);

        Alert::success('Success', 'Berhasil menambahkan Data Penduduk terbaru');
        return redirect()->route('penduduk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = Penduduk::findOrFail($id);
        return view('pages.backend.penduduk.show', compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = Penduduk::findOrFail($id);
        return view('pages.backend.penduduk.edit', compact('items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PendudukRequest $request, $id)
    {
        $data = $request->all();

        $items = Penduduk::findOrFail($id);
        $items->update($data);

        Alert::info('Success', 'Berhasil Update Data Penduduk');
        return redirect()->route('penduduk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items = Penduduk::findOrFail($id);
        $items->delete();

        Alert::info('Success', 'Berhasil Delete Data Penduduk');
        return redirect()->route('penduduk.index');
    }
}
