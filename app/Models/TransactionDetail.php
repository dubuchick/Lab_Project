<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    public function book(){

    	return $this->belongsTo(Book::class, 'bookid');
    }

    public function transaction(){

    	return $this->belongsTo(Transaction::class, 'transactionid');
    }

}