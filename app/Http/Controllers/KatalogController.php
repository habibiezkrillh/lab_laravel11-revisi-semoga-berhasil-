<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Jurnal;
use App\Models\CD;
use App\Models\Koran;
use App\Models\Skripsi;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index(Request $request)
    {
        // Retrieve sorting and search parameters
        $sort = $request->input('sort', 'asc'); // Default to ascending
        $category = $request->input('category', 'all');
        $search = $request->input('search');

        // Define base query for each model
        $items = collect();

        if ($category == 'buku' || $category == 'all') {
            $items = $items->merge(Buku::query()->where('judul', 'LIKE', "%{$search}%")->orderBy('judul', $sort)->get());
        }
        if ($category == 'jurnal' || $category == 'all') {
            $items = $items->merge(Jurnal::query()->where('judul', 'LIKE', "%{$search}%")->orderBy('judul', $sort)->get());
        }
        if ($category == 'cd' || $category == 'all') {
            $items = $items->merge(CD::query()->where('judul', 'LIKE', "%{$search}%")->orderBy('judul', $sort)->get());
        }
        if ($category == 'koran' || $category == 'all') {
            $items = $items->merge(Koran::query()->where('judul', 'LIKE', "%{$search}%")->orderBy('judul', $sort)->get());
        }
        if ($category == 'skripsi' || $category == 'all') {
            $items = $items->merge(Skripsi::query()->where('judul', 'LIKE', "%{$search}%")->orderBy('judul', $sort)->get());
        }

        return view('katalog.index', compact('items', 'sort', 'category', 'search'));
    }
}
