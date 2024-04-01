<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'tahun',
        'model',
        'warna',
        'kategori',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori', 'nama');
    }
}
