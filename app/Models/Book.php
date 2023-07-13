<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'price', 'author', 'editor', 'year_published'];

    public function ratings()
    {
      return $this->hasMany(Rating::class);
    }
}
