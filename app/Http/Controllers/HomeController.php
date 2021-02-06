<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Pagination\Paginator;

class HomeController extends Controller
{
    public function index() {
        // $items = News::with(['galleries'])->get();
        $items = News::with(['galleries'])->orderBy('id', 'DESC')->paginate(4);
        // Paginator::useBootstrap();
        // dd($items);
        $users = User::all();
        // dd($users);
        
        return view ('pages.frontend.home.index', [
            'items' => $items,
            'users' => $users
        ]);
    }
}
