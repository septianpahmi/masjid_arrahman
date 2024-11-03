<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zakat extends Model
{
    use HasFactory;

    protected $fillable = ['id_kategori', 'nominal', 'nama', 'gender', 'phone', 'email'];

    public function idkategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}
