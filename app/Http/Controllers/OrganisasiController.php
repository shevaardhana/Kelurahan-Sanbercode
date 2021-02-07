<?php

namespace App\Http\Controllers;

use App\Models\struktur_organisasi;
use Illuminate\Http\Request;

class OrganisasiController extends Controller
{
    public function index() {      
        $items = struktur_organisasi::latest()->first(); 
        // dd($items);       
        return view ('pages.frontend.organisasi', [
            'items' => $items
        ]);
    }
}
