<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $table = "book";
    use HasFactory;

    public $timestamps = false;
    public function genre(){

    	return $this->hasMany(Genre::class);
    }

    public function transactiondetail(){

    	return $this->hasMany(TransactionDetail::class);
    }
}
