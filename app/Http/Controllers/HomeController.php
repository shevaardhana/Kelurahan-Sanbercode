<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

use PDF;

class HomeController extends Controller
{
    public function index() {
        $items = News::with(['galleries'])->get();
        // dd($items);
        return view ('pages.frontend.home.index', [
            'items' => $items
        ]);
    }
}
