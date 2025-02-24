<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author', 'isbn', 'copies_available'];

    // A book can be borrowed multiple times
    public function loans()
    {
        return $this->hasMany(Loan::class);
    }
}
