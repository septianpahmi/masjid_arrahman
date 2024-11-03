<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infak extends Model
{
    use HasFactory;
    protected $fillable = ['id_infak', 'nominal'];

    public function idinfak()
    {
        return $this->belongsTo(KatInfak::class, 'id_infak');
    }
}
