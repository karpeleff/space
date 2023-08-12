<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biz extends Model
{
    use HasFactory;
    protected $fillable = [
        'category',
        'city',
        'title',
        'text',
        'img'
    ];
}
