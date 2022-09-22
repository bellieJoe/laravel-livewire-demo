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
    <form action="/authors/store" method="POST" class="card my-4">
        @csrf
        <div class="card-header">
            <h3>Add Author</h3>
        </div>
        <div class="card-body">
            <div class=" mb-3">
                <div class="form-outline">
                    <input type="text" class="form-control" name="fullname" value="{{ old('fullname') }}">
                    <label class="form-label" >Fullname <span class="text-danger">*</span></label>
                </div>
                @error('fullname') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary">Add</button>
        </div>
    </form>
</section>
@endsection