@extends('app')
@section('content')
<section>
    <details class="bg-primary text-white">
        <summary>Bootstrap Headings</summary>
        <h1>This is Bootstrap heading 1</h1>
        <h2>This is Bootstrap heading 2</h2>    
        <h3>This is Bootstrap heading 3</h3>
        <h4>This is Bootstrap heading 4</h4>
        <h5>This is Bootstrap heading 5</h5>
        <h6>This is Bootstrap heading 6</h6>
    </details>

    <details class="bg-dark text-white">
        <summary>Bootstrap Display Headings</summary>
        <h1 class="display-1">This is Bootstrap Display heading 1</h1>
        <h2 class="display-2">This is Bootstrap Display heading 2</h2>
        <h3 class="display-3">This is Bootstrap Display heading 3</h3>
        <h4 class="display-4">This is Bootstrap Display heading 4</h4>
        <h5 class="display-5">This is Bootstrap Display heading 5</h5>
        <h6 class="display-6">This is Bootstrap Display heading 6</h6>
    </details>

    <details class="bg-primary text-white">
        <summary>Bootstrap lead text and alignments</summary>
        <p>This is a normal paragraph</p> 
        <p class="lead">This is a lead paragraph</p> 
    </details>
    
</section>
@endsection
