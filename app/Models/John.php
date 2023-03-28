<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class John extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'linkedin',
        'github',
    ];
}
