<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suket extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function kategorisuket()
    {
        return $this->belongsTo(Kategorisuket::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
