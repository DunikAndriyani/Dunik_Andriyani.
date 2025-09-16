<?php

namespace App\Http\Controllers;

use App\Models\Novel;
use Illuminate\Http\Request;

class NovelController extends Controller
{
    public function index()
    {
        $novel = Novel::all();
        return view('novel', compact('novel'));
    }

    public function create(){
        return view('tambah-novel');
    }

    public function store(Request $request){
        $validasiData = $request->validate([
            'judul' => 'required|max:255',
            'genre' => 'required|max:255',
            'penulis' => 'required|max:255',
        ]);

        Novel::create($validasiData);
        return redirect('novel');
    }
}