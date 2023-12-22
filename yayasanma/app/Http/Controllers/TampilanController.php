<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Admin;
use App\Models\Children;


class TampilanController extends Controller
{
    public function index()
    {
        $admin = Admin::all();
        $child = Children::all();
        return view('Tampilan', compact('admin', 'child'));
    }
}
