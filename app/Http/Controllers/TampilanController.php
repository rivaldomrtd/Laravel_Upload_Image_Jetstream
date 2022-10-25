<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Image;
class TampilanController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        $images = Image::orderBy('id', 'desc')->get();
        return view('dashboard', ['posts' => $posts],['images' => $images] );
    }
}
