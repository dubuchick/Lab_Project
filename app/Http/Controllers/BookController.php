<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function insertBook(Request $request){
        $book = new Book();
        $book->title = $request->title;
        $book->genreid = 1;
        $book->author = $request->author;
        $book->synopsis = $request->synopsis;
        //image
        $book->price = $request->price;

        $file = $request->file('cover');
        //waktu skrng .jpg
        $imageName = time().".".$file->getClientOriginalExtension();
        Storage::putFileAs('public/images',$file,$imageName);

        $book->cover = 'images/'.$imageName;

        $book->save();

        //ke previous page
        return redirect()->back();
    }

    
}
