@extends('app')
@section('content')
<section class="container py-4">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item " ><a href="/authors">Authors</a></li>
            <li class="breadcrumb-item active" >{{ $author->fullname }}</li>
        </ol>
    </nav>
    <h1>{{ $author->fullname }}</h1>
    <h5>Books</h5>
    <div>
        {{ $author->books() }}
    </div>
</section>
@endsection