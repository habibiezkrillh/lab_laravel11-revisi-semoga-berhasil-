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
        $query = $request->input('query');
        $kategori = $request->input('kategori');
        $urutan = $request->input('urutan', 'asc');

        $data = [];

        if ($kategori === 'buku' || !$kategori) {
            $data['bukus'] = Buku::when($query, function ($q) use ($query) {
                return $q->where('judul', 'like', "%$query%");
            })->orderBy('tahun_terbit', $urutan)->get();
        }

        if ($kategori === 'jurnal' || !$kategori) {
            $data['jurnals'] = Jurnal::when($query, function ($q) use ($query) {
                return $q->where('judul', 'like', "%$query%");
            })->orderBy('tahun_terbit', $urutan)->get();
        }

        if ($kategori === 'cd' || !$kategori) {
            $data['cds'] = CD::when($query, function ($q) use ($query) {
                return $q->where('judul', 'like', "%$query%");
            })->orderBy('tahun_terbit', $urutan)->get();
        }

        if ($kategori === 'koran' || !$kategori) {
            $data['korans'] = Koran::when($query, function ($q) use ($query) {
                return $q->where('judul', 'like', "%$query%");
            })->orderBy('tahun_terbit', $urutan)->get();
        }

        if ($kategori === 'skripsi' || !$kategori) {
            $data['skripsis'] = Skripsi::when($query, function ($q) use ($query) {
                return $q->where('judul', 'like', "%$query%");
            })->orderBy('tahun_terbit', $urutan)->get();
        }

        return view('katalog.index', compact('data', 'query', 'kategori', 'urutan'));
    }
}