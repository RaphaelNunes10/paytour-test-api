<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'object',
        'material',
        'images',
        'user_id',
        'description',
        'tags'
    ];
}
