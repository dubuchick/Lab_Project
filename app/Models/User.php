<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends \Illuminate\Foundation\Auth\User
{
    use HasFactory;

    public function role(){
        return $this->belongsTo(Role::class);
    }
    public function transaction(){
        return $this->hasMany(Transaction::class);
    }
}
