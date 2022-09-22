<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Books;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    //
    public function create(){
        return view('pages.books.create')->with([
            'authors' => Author::all()
        ]);
    }

    public function store(Request $request){
        $messages = [
            'author_id.required' => 'The Author is required.',
            'author_id.exists' => 'The selected author is invalid'
        ];
        $rules = [
            'book_title' => ['required', 'max:1000'],
            'author_id' => ['required', 'exists:authors,author_id'],
            'date_published' => ['required', 'date', 'before:'.Carbon::now()]
        ];

        Validator::make($request->all(), $rules, $messages)->validate();

        Book::create([
            'book_title' => $request->book_title, 
            'author_id' => $request->author_id, 
            'date_published' => $request->date_published
        ]);

        return redirect('/books');
    }
}
