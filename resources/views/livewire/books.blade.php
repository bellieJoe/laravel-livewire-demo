
<div class="container py-4">
    {{-- <button wire:click="changeGreetings" class="btn btn-primary">Change greetings</button> --}}
    <div class="btn-group float-end" role="group">
        <button class="btn btn-secondary btn-sm" disabled>Delete</button>
        <a href="/books/create" class="btn btn-primary btn-sm">Add Book</a>
        <a href="/authors/create" class="btn btn-primary btn-sm">Add Author</a>
    </div>
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Date Published</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <th scope="row">{{ $book->book_id }}</th>
                <td >{{ $book->book_title }}</td>
                <td ><a href="/authors/{{ $book->author->author_id }}">{{ $book->author->fullname }}</a></td>
                <td >{{ $book->date_published->format('F d, Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $books->links() }}
</div>

