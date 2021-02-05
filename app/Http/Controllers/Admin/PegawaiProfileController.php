<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\PegawaiProfileRequest;
use App\Models\PegawaiProfile;
use RealRashid\SweetAlert\Facades\Alert;


class PegawaiProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = PegawaiProfile::all();

        return view('pages.backend.pegawaiprofile.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backend.pegawaiprofile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PegawaiProfileRequest $request)
    {
        $data = $request->all();
        PegawaiProfile::create($data);

        Alert::success('Success', 'Berhasil menambahkan Profil Pegawai terbaru');
        return redirect()->route('pegawaiprofile.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = PegawaiProfile::findOrFail($id);
        return view('pages.backend.pegawaiprofile.show',compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = PegawaiProfile::findOrFail($id);
        return view('pages.backend.pegawaiprofile.edit', compact('items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PegawaiProfileRequest $request, $id)
    {
        $data = $request->all();

        $items = PegawaiProfile::findOrFail($id);
        $items->update($data);

        Alert::info('Success', 'Berhasil Update Profile Pegawai');
        return redirect()->route('pegawaiprofile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items = PegawaiProfile::findOrFail($id);
        $items->delete();

        Alert::info('Success', 'Berhasil Delete Data Pegawai');
        return redirect()->route('pegawaiprofile.index');
    }

}
