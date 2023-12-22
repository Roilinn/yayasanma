<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galery;
use App\Models\News;

class RumahController extends Controller
{


    public function index()
    {
        $galleries = Galery::all();
        $news = News::all();
        return view('home', compact('galleries', 'news'));
    }

    public function show($id)
    {
        $galleries = Galery::all();
        $news = News::findOrFail($id);
        return view('home', compact('galleries', 'news'));

    }

}

