@extends('app')
@section('content')
<section class="container py-4">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item " ><a href="/books">Books</a></li>
            <li class="breadcrumb-item active" >{{ $author->fullname }}</li>
        </ol>
    </nav>
    <h1>{{ $author->fullname }}</h1>
    <h5>Books</h5>
    <div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <th>Book Title</th>
                    <th>Date Published</th>
                </thead>
                @foreach($author->books as $book)
                <tr>
                    <td>{{ $book->book_title }}</td>
                    <td>{{  $book->date_published->format('F d, Y') }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</section>
@endsection