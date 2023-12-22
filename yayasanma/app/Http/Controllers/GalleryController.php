<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\galery;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = galery::all();
        return view('gallery', compact('galleries'));
    }

  
}
