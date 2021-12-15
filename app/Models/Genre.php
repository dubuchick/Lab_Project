<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public $table = "genre";
    use HasFactory;
    public $table = "genre";
    public $timestamps = false;
    public function book(){

    	return $this->belongsTo(Book::class);
    }
}
