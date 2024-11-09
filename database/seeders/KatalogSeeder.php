<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Buku;
use App\Models\Jurnal;
use App\Models\CD;
use App\Models\Koran;
use App\Models\Skripsi;


class KatalogSeeder extends Seeder
{
    public function run()
    {
        // 5 Buku
        Buku::create(['judul' => 'Naruto Vol. 1', 'penulis' => 'Masashi Kishimoto', 'penerbit' => 'Shueisha', 'tahun_terbit' => 2000]);
        Buku::create(['judul' => 'One Piece Vol. 1', 'penulis' => 'Eiichiro Oda', 'penerbit' => 'Shueisha', 'tahun_terbit' => 1997]);
        Buku::create(['judul' => 'Attack on Titan Vol. 1', 'penulis' => 'Hajime Isayama', 'penerbit' => 'Kodansha', 'tahun_terbit' => 2009]);
        Buku::create(['judul' => 'Death Note Vol. 1', 'penulis' => 'Tsugumi Ohba', 'penerbit' => 'Shueisha', 'tahun_terbit' => 2003]);
        Buku::create(['judul' => 'My Hero Academia Vol. 1', 'penulis' => 'Kohei Horikoshi', 'penerbit' => 'Shueisha', 'tahun_terbit' => 2014]);

        // 4 Jurnal
        Jurnal::create(['judul' => 'Artificial Intelligence and Society', 'penulis' => 'John McCarthy', 'penerbit' => 'TechInfo', 'tahun_terbit' => 2020]);
        Jurnal::create(['judul' => 'Quantum Computing Advances', 'penulis' => 'Jane Smith', 'penerbit' => 'Repoooost', 'tahun_terbit' => 2019]);
        Jurnal::create(['judul' => 'Jurnal Pembelajaran Sosial Emosional', 'penulis' => 'Citra Wulandari', 'penerbit' => 'Kemendikbud', 'tahun_terbit' => 2024]);
        Jurnal::create(['judul' => 'Advances in Machine Learning Algorithms for Big Data', 'penulis' => 'Alice Johnson', 'penerbit' => 'Computer Science', 'tahun_terbit' => 2023]);

        // 5 CD
        CD::create(['judul' => 'Taman Langit', 'penulis' => 'Peterpan', 'penerbit' => 'Musica Studio', 'tahun_terbit' => 2003]);
        CD::create(['judul' => 'Blonde', 'penulis' => 'Frank Ocean', 'penerbit' => 'Studio by Frank Ocean', 'tahun_terbit' => 2016]);
        CD::create(['judul' => 'Purpose', 'penulis' => 'Justin Bieber', 'penerbit' => 'Atlantic Records', 'tahun_terbit' => 2016]);
        CD::create(['judul' => 'brat', 'penulis' => 'Charli XCX', 'penerbit' => 'Warner Music', 'tahun_terbit' => 2024]);
        CD::create(['judul' => 'Zankyou Reference', 'penulis' => 'ONE OK ROCK', 'penerbit' => 'Amuse Inc', 'tahun_terbit' => 2013]);

        // 5 Koran
        Koran::create(['judul' => 'Berita Terkini Seputar Ekonomi', 'penulis' => 'Redaksi Koran Ekonomi', 'penerbit' => 'FAJAR', 'tahun_terbit' => 2023]);
        Koran::create(['judul' => 'Inovasi Teknologi di Era Digital', 'penulis' => 'Aiman', 'penerbit' => 'Tribun Kalimantan', 'tahun_terbit' => 2022]);
        Koran::create(['judul' => 'Perubahan Iklim dan Dampaknya', 'penulis' => 'Theo Malfoy', 'penerbit' => 'Kompas Media', 'tahun_terbit' => 2018]);
        Koran::create(['judul' => 'Pendidikan di Masa Pandemi', 'penulis' => 'Budi Santoso', 'penerbit' => 'CNN Indonesia', 'tahun_terbit' => 2020]);
        Koran::create(['judul' => 'Wibu Menjamuri Lingkungan UC Makassar?', 'penulis' => 'anonym', 'penerbit' => 'Dirahasikan', 'tahun_terbit' => 2024]);

        // 5 Skripsi
        Skripsi::create(['judul' => 'Pengaruh Media Sosial terhadap Perilaku Remaja', 'penulis' => 'Andi Setiawan', 'penerbit' => 'Universitas Indonesia', 'tahun_terbit' => 2023]);
        Skripsi::create(['judul' => 'Analisis Kualitas Pelayanan di Rumah Sakit', 'penulis' => 'Siti Nurhaliza', 'penerbit' => 'Universitas Gadjahmada', 'tahun_terbit' => 2022]);
        Skripsi::create(['judul' => 'Studi Kasus: Implementasi E-Government di Kota X', 'penulis' => 'Budi Arifin', 'penerbit' => 'Universitas Airlangga', 'tahun_terbit' => 2021]);
        Skripsi::create(['judul' => 'Dampak Globalisasi terhadap Budaya Lokal', 'penulis' => 'Rina Puspitasari', 'penerbit' => 'Universitas Diponegoro', 'tahun_terbit' => 2020]);
        Skripsi::create(['judul' => 'Persepsi Masyarakat terhadap Program Vaksinasi', 'penulis' => 'Joko Prasetyo', 'penerbit' => 'Universitas Hasanuddin', 'tahun_terbit' => 2019]);
    }
}
