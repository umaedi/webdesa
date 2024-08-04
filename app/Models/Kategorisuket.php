<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategorisuket extends Model
{
    use HasFactory;
    protected $fillable = [
        'kategori_suket',
        'slug'
    ];

    public function suket()
    {
        return $this->hasMany(Suket::class, 'kategorisuket_id');
    }
}
