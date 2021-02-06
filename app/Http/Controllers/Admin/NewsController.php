<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use App\Models\Image;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\User;

use RealRashid\SweetAlert\Facades\Alert;

class NewsController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = News::all();

        return view('pages.backend.news.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('pages.backend.news.create',[
            'users' => $users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        News::create($data);

        Alert::success('Success', 'Berhasil menambahkan berita terbaru');
        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = News::findOrFail($id);
        return view('pages.backend.news.show', ['items' => $items]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = News::findOrFail($id);
        return view('pages.backend.news.edit', [
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
    public function update(NewsRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $item = News::findOrFail($id);
        $item->update($data);

        Alert::info('Success', 'Berhasil Ubah berita');
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = News::findOrFail($id);
        $item->delete();

        Image::where('news_id', $id)->delete();

        Alert::info('Success', 'Berhasil Hapus berita');
        return redirect()->route('news.index');
    }
}
