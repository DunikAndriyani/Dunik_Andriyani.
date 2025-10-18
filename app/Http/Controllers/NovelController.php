<?php

namespace App\Http\Controllers;

use App\Models\Novel;
use App\Models\KategoriNovel;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NovelController extends Controller
{
    public function index(): View
    {
        $novel = Novel::with('kategori')->get(); // ambil data novel + kategori
        return view('novel', compact('novel'));
    }

    public function create(): View
    {
        $kategori = KategoriNovel::all(); // ambil semua kategori
        return view('tambah-novel', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'genre' => 'required|max:255',
            'penulis' => 'required|max:255',
            'kategori_novel_id' => 'nullable|exists:kategori_novel,id'
        ]);

        Novel::create($request->all());
        return redirect('/novel')->with('success', 'Novel berhasil ditambahkan!');
    }

    public function edit($id): View
    {
        $novel = Novel::findOrFail($id);
        $kategori = KategoriNovel::all();
        return view('edit-novel', compact('novel', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'genre' => 'required|max:255',
            'penulis' => 'required|max:255',
            'kategori_novel_id' => 'nullable|exists:kategori_novel,id'
        ]);

        $novel = Novel::findOrFail($id);
        $novel->update($request->all());
        return redirect('/novel')->with('success', 'Data novel berhasil diperbarui!');
    }

    public function destroy($id)
    {
        Novel::findOrFail($id)->delete();
        return redirect('/novel')->with('success', 'Data novel berhasil dihapus!');
    }
}