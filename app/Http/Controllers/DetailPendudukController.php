<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;

class DetailPendudukController extends Controller
{
    public function index() {

        $items = Penduduk::all();
        return view('pages.frontend.detailPenduduk.index',compact('items'));
    }
}
