@extends('app')
@section('content')
<section class="container">
    <style>
        form{
            max-width: 400px;
            display: block;
            margin: 0rem auto;
        }
    </style>
    <form class="card my-5" action="/books/store" method="POST">
        @csrf
        <div class="card-header">
            <h3>Add Book</h3>
        </div>
        <div class="card-body">
            <div class=" mb-3">
                <div class="form-outline">
                    <input type="text" class="form-control" name="book_title" value="{{ old('book_title') }}">
                    <label class="form-label" >Book Title</label>
                </div>
                @error('book_title') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
            <div class="mb-3">
                <div class="form-outline">
                    <select class="form-select" aria-label="Default select example" name="author_id" >
                        <option selected>Select Author</option>
                        @foreach ($authors as $author)
                            <option value="{{ $author->author_id }}" {{ old('author_id') == $author->author_id ? 'selected' : '' }}>{{ $author->fullname }}</option>
                        @endforeach
                    </select>
                </div>
                @error('author_id') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
            <div class="mb-3">
                <input type="date" class="form-control" name="date_published"  value="{{ old('date_published') }}">
                @error('date_published') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary">Add</button>
        </div>
    </form>
</section>
@endsection