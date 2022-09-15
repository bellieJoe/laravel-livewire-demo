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
    <form action="card" class="py-5">
        <h3>Add Book</h3>
        <div class="form-outline mb-3">
            <input type="text" class="form-control">
            <label class="form-label" >Book Title</label>
        </div>
        <div class="form-outline mb-3">
            <select class="form-select" aria-label="Default select example">
                <option selected>Select Author</option>
                @foreach ($authors as $author)
                    <option value="{{ $author->author_id }}">{{ $author->fullname }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <input type="date" class="form-control">
        </div>
        <div class="mb-3">
            <button class="btn btn-primary">Add</button>
        </div>
    </form>
</section>
@endsection