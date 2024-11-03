<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fidyah extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'gender', 'phone', 'email', 'jumlah', 'nominal'];
}
