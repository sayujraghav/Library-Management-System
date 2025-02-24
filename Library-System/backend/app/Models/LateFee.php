<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LateFee extends Model
{
    use HasFactory;

    protected $fillable = ['loan_id', 'amount', 'paid'];

    // A late fee belongs to a loan
    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }
}
