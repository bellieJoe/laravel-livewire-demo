<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthorController extends Controller
{
    //
    public function create(){
        return view('pages.authors.create');
    }

    public function store(Request $request){
        $rules = [
            'fullname' => ['required', 'max:255']
        ];
        
        Validator::make($request->all(), $rules)->validate();

        Author::create([
            'fullname' => $request->fullname
        ]);

        return redirect('/books');
    }

    public function show($author_id){
        return view('pages.authors.show')->with([
            'author' => Author::where('author_id', $author_id)->with('books')->first()
        ]);
    }
}
