<?php

namespace App\Http\Controllers;
use App\Models\News;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index() {
        $items = News::with(['galleries'])->get();
        // dd($items);
        return view ('pages.frontend.detailBerita.index', [
            'items' => $items
        ]);
    }
}
