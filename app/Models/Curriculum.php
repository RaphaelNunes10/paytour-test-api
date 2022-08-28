<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip',
        'nome',
        'email',
        'telefone',
        'cargo',
        'escolaridade',
        'obs',
        'arquivo'
    ];
}
