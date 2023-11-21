<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';
    protected $fillable = ['nama_kategori'];

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class, 'kategori_id', 'id_kategori');
    }

     public static function getAllCategories()
     {
         return self::all();
     }
}
