<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\NewsRequest;
use App\Http\Requests\TagRequest;

use App\Tag;
use App\Models\News;

use RealRashid\SweetAlert\Facades\Alert;

class TagNewsController extends Controller
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
        $items = News::with(['tags'])->get();       
        $news = News::all();
        $tags = Tag::all();
        return view('pages.backend.tags.index', [
            'news' => $news,
            'tags' => $tags,
            'items' => $items,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news = News::all();
        return view('pages.backend.tags.create', [
            'news' => $news
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
    {
        $data = $request->all();
        // dd($TagRequest);
      
        Tag::create($data);
        Alert::success('Success', 'Berhasil menambahkan kategori Berita');
        return redirect()->route('tags.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Tag::findOrFail($id);
        // dd($item);     

        return view('pages.backend.tags.edit', [
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
    public function update(TagRequest $request, $id)
    {
        $data = $request->all();

        $item = Tag::findOrFail($id);
        $item->update($data);

        Alert::info('Success', 'Berhasil Ubah kategori');
        return redirect()->route('tags.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Tag::findOrFail($id);
        $item->delete();

        Alert::info('Success', 'Berhasil Hapus kategori');
        return redirect()->route('tags.index');
    }
}
