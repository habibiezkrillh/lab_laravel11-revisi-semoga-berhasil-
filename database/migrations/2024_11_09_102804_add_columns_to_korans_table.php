<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('korans', function (Blueprint $table) {
            $table->string('judul')->after('id'); // Menambahkan kolom judul
            $table->string('penulis')->after('judul'); // Menambahkan kolom penulis
            $table->string('penerbit')->after('penulis'); // Menambahkan kolom penerbit
            $table->year('tahun_terbit')->after('penerbit'); // Menambahkan kolom tahun_terbit 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('korans', function (Blueprint $table) {
            $table->dropColumn(['judul', 'penulis', 'penerbit', 'tahun_terbit']);
        });
    }
};
