<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    //
    public function create(){

        return view('pages.books.create')->with([
            'authors' => Author::all()
        ]);
    }
}
