<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    public function role(){
        return $this->belongsTo(Role::class);
    }
    public function transaction(){
        return $this->hasMany(Transaction::class);
    }
}
