<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class AllPortofolioController extends Controller
{
    public function index()
    {
        $portofolios = Portfolio::all();
        $categories = Kategori::all();

        // dd($categories);
        return view('allportofolio.index', compact('portofolios', 'categories'));
    }
}
