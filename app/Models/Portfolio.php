<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $table = 'portfolio';
    protected $primaryKey = 'id_portofolio';
    protected $fillable = ['judul', 'kategori_id', 'nama_klient', 'tanggal_project', 'image_path'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id_kategori');
    }
}
