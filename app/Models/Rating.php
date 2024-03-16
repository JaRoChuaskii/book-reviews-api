<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = ['book_id', 'score'];

     /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
      'book_id' => 'integer',
      'score' => 'integer'
    ];

    public function books()
    {
      return $this->belongsTo(Book::class);
    }
}
