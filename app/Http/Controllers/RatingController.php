<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Rating;
use App\Http\Resources\RatingResource;
use Illuminate\Http\Request;

class RatingController extends Controller
{
  public function index($book)
  {
    return Rating::with('books')->where('book_id', $book)->get();
  }
}
