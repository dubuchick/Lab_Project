<?php


namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    //
    public function displayGenre(){
        $genre = Genre::all();
        return view('manage_genre',compact('genre'));
    }

    public function delete(){

    }

    public function insertGenre(Request $request){
        $genre = new Genre();
        $genre->name = $request->name;

        $genre->save();
        return redirect()->back();
    }

    public function showGenreDetail($id){
        $genre = Genre::find($id);
        return view('genre_detail',compact('genre'));
    }

    public function updateGenre(Request $request, $id){
        $genre = Genre::find($id);
        $genre->name = $request->name;

        $genre->save();
        return redirect()->back();
    }
}
