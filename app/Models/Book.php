<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function genre(){

    	return $this->hasMany(Genre::class, 'bookid');
    }

    public function transactiondetail(){

    	return $this->hasMany(TransactionDetail::class, 'bookid');
    }
}
