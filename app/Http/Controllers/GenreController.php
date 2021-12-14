<?php


namespace App\Http\Controllers;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    //
    public function displayGenre(){
        $genre = Genre::all();
        return view('manage',compact('genre'));
    }
}
