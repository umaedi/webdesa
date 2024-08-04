<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kritik extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'kritik',
        'status',
        'komentar'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
