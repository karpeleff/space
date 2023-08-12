<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Advt extends Model
{
    use HasFactory;

    public function category()
    {
      //  return $this->hasOne('Category', 'id', 'cat_id');
        return $this->hasOne(Category::class);
    }
}
