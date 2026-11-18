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
        Schema::create('matakuliahs', function (Blueprint $table) {
            $table->id();                                         // primary key, auto increment
            $table->string('kode_matakuliah', 20)->unique();      // VARCHAR(20), tidak boleh kembar
            $table->string('nama_matakuliah', 100);               // VARCHAR(100)
            $table->integer('sks');                               // INTEGER
            $table->timestamps();                                 // created_at dan updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('matakuliahs');
    }
};
