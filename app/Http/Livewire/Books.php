<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;
use Livewire\WithPagination;

class Books extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.books',
        [
            'books' => Book::query()->with(['author'])->paginate(5)
        ]
        )->layout('welcome');
    }

    public function changeGreetings(){
        $this->greetings = "ok greetings change";
    }
}
