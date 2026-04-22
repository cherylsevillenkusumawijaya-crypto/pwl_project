<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('table_matakuliah', function (Blueprint $table) {
            $table->id();
            $table->string('jurusan_id');
            $table->string('Kode_MK');
            $table->string('Nama_MK');
            $table->string('SKS');
            $table->string('dosen_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_matakuliah');
    }
};


<h2>Form Mahasiswa</h2>
<form>
Nama Lengkap: <input type="text"><br><br>
NIM: <input type="text"><br><br>
NISN: <input type="text"<br><br>
Tempat Lahir: <input type="date"><br><br>
Tanggal Lahir: <input type="date"<br><br>
Alamat: <textarea></textarea><br><br>
<button type="submit">simpan<button>
</form>