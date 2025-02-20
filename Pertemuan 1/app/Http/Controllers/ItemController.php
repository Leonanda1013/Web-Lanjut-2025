<?php

namespace App\Http\Controllers; // Mendefinisikan namespace untuk controller

use App\Models\Item; // Mengimpor model Item untuk berinteraksi dengan database
use Illuminate\Http\Request; // Mengimpor Request untuk menangani input pengguna

class ItemController extends Controller // Mendefinisikan kelas ItemController yang merupakan turunan dari Controller
{
    public function index() // Method untuk menampilkan daftar item
    {
        $items = Item::all(); // Mengambil semua data item dari database
        return view('items.index', compact('items')); // Mengirim data ke tampilan 'items.index'
    }

    public function create() // Method untuk menampilkan form tambah item
    {
        return view('items.create'); // Menampilkan tampilan 'items.create'
    }

    public function store(Request $request) // Method untuk menyimpan item baru ke database
    {
        $request->validate([ // Memvalidasi input sebelum menyimpan ke database
            'name' => 'required', // 'name' harus diisi
            'description' => 'required', // 'description' harus diisi
        ]);
         
        Item::create($request->only(['name', 'description'])); // Menyimpan item baru hanya dengan atribut yang diizinkan
        return redirect()->route('items.index')->with('success', 'Item added successfully.'); // Redirect ke halaman index dengan pesan sukses
    }

    public function show(Item $item) // Method untuk menampilkan detail item tertentu
    {
        return view('items.show', compact('item')); // Mengirim data item ke tampilan 'items.show'
    }

    public function edit(Item $item) // Method untuk menampilkan form edit item
    {
        return view('items.edit', compact('item')); // Mengirim data item ke tampilan 'items.edit'
    }

    public function update(Request $request, Item $item) // Method untuk memperbarui data item
    {
        $request->validate([ // Memvalidasi input sebelum update
            'name' => 'required', // 'name' harus diisi
            'description' => 'required', // 'description' harus diisi
        ]);
         
        $item->update($request->only(['name', 'description'])); // Mengupdate item hanya dengan atribut yang diizinkan
        return redirect()->route('items.index')->with('success', 'Item updated successfully.'); // Redirect ke halaman index dengan pesan sukses
    }

    public function destroy(Item $item) // Method untuk menghapus item dari database
    {
        $item->delete(); // Menghapus item dari database
        return redirect()->route('items.index')->with('success', 'Item deleted successfully.'); // Redirect ke halaman index dengan pesan sukses
    }
}
