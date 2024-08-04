<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'judul_pengaduan',
        'kategori_pengaduan_id',
        'deskripsi',
        'komentar',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
