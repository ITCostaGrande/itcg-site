<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boletine extends Model
{
    protected $fillable = [
        'image_1',
        'image_2',
        'title',
        'small_description',
        'description',
        'create_date',
        'final_date',
        'create_user'
    ];
    use HasFactory;
}
