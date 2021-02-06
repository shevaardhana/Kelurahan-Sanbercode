<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\User;
$users = User::all();
use PDF;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $request, $slug) 
    {
        $item = News::with(['galleries'])
        ->where('slug', $slug)
        ->firstOrfail();

        $users = User::all();

        // $items = News::with(['galleries'])->get();
        // dd($items);
        return view ('pages.frontend.detailBerita.index', [
            'item' => $item,
            'users' => $users
        ]);
    }
}
