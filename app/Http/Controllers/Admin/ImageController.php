<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImageRequest;
use App\Models\News;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Image::with(['news'])->get();
        // dd ($items);
        return view('pages.backend.image.index', [
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
        $news = News::all();
        return view('pages.backend.image.create', [
            'news' => $news
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImageRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/image', 'public'
        );

        Image::create($data);
        return redirect()->route('image.index');
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
        $item = Image::findOrFail($id);
        // dd($item);
        $news = News::all();
        // dd($news);

        return view('pages.backend.image.edit', [
            'item' => $item,
            'news' => $news
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ImageRequest $request, $id)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/image', 'public'
        );

        $item = Image::findOrFail($id);
        $item->update($data);
        return redirect()->route('image.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Image::findOrFail($id);
        $item->delete();
        return redirect()->route('image.index');
    }
}
