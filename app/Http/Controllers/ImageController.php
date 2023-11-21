<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Storage;
use App\Models\Kategori;

class ImageController extends Controller
{
    public function index()
    {
        $portofolios = Portfolio::all();
        return view('portofolio.index', compact('portofolios'));
    }

    public function show($id)
    {
        $portofolio = Portfolio::find($id);
        return view('portofolio.show', compact('portofolio'));
    }
}
