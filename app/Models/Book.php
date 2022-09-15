<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $primaryKey = 'book_id';

    protected $fillable = [
        'book_title', 'author_id', 'date_publish'
    ];

    /* 
    relationships
    */
    public function author(){
        return $this->belongsTo(Author::class, 'author_id', 'author_id');
    }
}
