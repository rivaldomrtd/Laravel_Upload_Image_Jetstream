<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ImageController extends Controller
{
    public function index()
    {
        $image = Image::orderBy('created_at','desc')->paginate(4);
        return view('image/index',['images' => $image]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'file' => ['mimes:jpg,jpeg,png'],
        ]);
        $fileName = time().'.'.$request->file->extension();
        $request->file->move(public_path('uploads'), $fileName);
        Image::create([
            'title' => $request->title,
            'description' => $request->description,
            'file' => $fileName
        ]);
        return redirect()->route('images.index');
    }
    public function create()
    {
        return view('image/create');
    }

    public function show(Image $image)
    {
        //
    }

    public function edit(Image $image)
    {
        //
    }

    public function update(Request $request, Image $image)
    {
        //
    }

    public function destroy($id)
    {
        $image = Image::find($id);
        $image->delete();
        return redirect()->route('images.index');
    }
}
