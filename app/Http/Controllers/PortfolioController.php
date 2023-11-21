<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Storage;
use App\Models\Kategori;


class PortfolioController extends Controller
{
    public function create()
    {
        $kategori = Kategori::all();
        return view('portofolios.addpost', compact('kategori'));
    }

    public function store(Request $request)
    {
        // Validasi request sesuai kebutuhan Anda
        $request->validate([
            'judul' => 'required|string',
            'kategori_id' => 'required|exists:kategori,id_kategori',
            'nama_klient' => 'required|string',
            'tanggal_project' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan gambar ke storage dan dapatkan path-nya
        $imagePath = $request->file('image')->store('portofolio');

        // Simpan data ke database
        Portfolio::create([
            'judul' => $request->judul,
            'kategori_id' => $request->kategori_id,
            'nama_klient' => $request->nama_klient,
            'tanggal_project' => $request->tanggal_project,
            'image_path' => $imagePath,
        ]);

        return redirect()->route('portfolios.create')->with('success', 'Project berhasil disimpan.');
    }

    public function index()
    {
        $portfolios = Portfolio::all();
        $categories = Kategori::all();

   
        return view('managepost', compact('portfolios', 'categories'));
    }

   

    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $kategori = Kategori::all();

        return view('editpost', compact('portfolio', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        $portfolio = Portfolio::findOrFail($id);
    
        $request->validate([
            'judul' => 'required',
            'kategori_id' => 'required|exists:kategori,id_kategori',
            'nama_klient' => 'required',
            'tanggal_project' => 'required|date',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Menghapus gambar lama jika ada gambar baru yang diunggah
        if ($request->hasFile('image')) {
            $oldImagePath = public_path($portfolio->image_path);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
    
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('assets/portofolio'), $imageName);
            $portfolio->image_path = 'assets/portofolio/'.$imageName;
        }
    
        // Memperbarui data portofolio
        $portfolio->update([
            'judul' => $request->judul,
            'kategori_id' => $request->kategori_id,
            'nama_klient' => $request->nama_klient,
            'tanggal_project' => $request->tanggal_project,
        ]);
    
        return redirect()->route('portfolios.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);

        // Hapus gambar terkait jika ada
        Storage::delete($portfolio->image_path);

        // Hapus data portofolio
        $portfolio->delete();

        return redirect()->route('portfolios.index')->with('success', 'Portofolio berhasil dihapus!');
    }


    public function show($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('portfolio.details', compact('portfolio'));
    }



}
