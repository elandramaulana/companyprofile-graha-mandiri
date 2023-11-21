<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('portfolio', function (Blueprint $table) {
            $table->id('id_portofolio');
            $table->string('judul');
            $table->unsignedBigInteger('kategori_id');
            $table->foreign('kategori_id')->references('id_kategori')->on('kategori')->onDelete('cascade');
            $table->string('nama_klient');
            $table->date('tanggal_project');
            $table->string('image_path');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('portfolio');
    }
};
