<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'book_id', 'borrowed_at', 'due_date', 'returned_at'];

    // A loan belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // A loan belongs to a book
    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    // A loan can have one late fee
    public function lateFee()
    {
        return $this->hasOne(LateFee::class);
    }
}
