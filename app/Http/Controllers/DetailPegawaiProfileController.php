<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PegawaiProfile;

class DetailPegawaiProfileController extends Controller
{
    public function index() {

        $items = PegawaiProfile::all();
        return view('pages.frontend.detailPegawaiProfile.index',compact('items'));
    }
}
