<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class CheckinBooksController extends Controller
{
    public function store(Book $book)
    {
        try {
            $book->checkin(auth()->user());
        } catch (\Exception $e) {
            abort(404);
        }
    }
}
