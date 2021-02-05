<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\struktur_organisasi;
use Illuminate\Http\Request;
use App\Http\Requests\struktur_organisasiRequest;
use Illuminate\Support\Str;

use RealRashid\SweetAlert\Facades\Alert;


class struktur_organisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = struktur_organisasi::all();
        return view('pages.backend.struktur.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backend.struktur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/image', 'public'
        );

        struktur_organisasi::create($data);
        Alert::success('Success', 'Berhasil menambahkan gambar');
        return redirect()->route('struktur.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = struktur_organisasi::findOrFail($id);
        // dd($item);

        return view('pages.backend.struktur.edit', [
            'item' => $item
        ]);
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
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/image', 'public'
        );

        $item = struktur_organisasi::findOrFail($id);
        $item->update($data);

        Alert::info('Success', 'Berhasil Ubah gambar');
        return redirect()->route('struktur.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = struktur_organisasi::findOrFail($id);
        $item->delete();

        Alert::info('Success', 'Berhasil Hapus gambar');
        return redirect()->route('struktur.index');
    }
}
