<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'status',
        'image',
        'file',
        'url',
        'title',
        'final_date',
        'create_user'
    ];
    use HasFactory;
}
