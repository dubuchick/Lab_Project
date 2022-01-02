<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function insertBook(Request $request){
        $book = new Book();
        $book->title = $request->title;
        $book->genreid = $request->genre;
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
    //buat list books di manage page
    public function showBooks(){
        $books = Book::all();
        $genre = Genre::all();
        // $user = User::all();
        return view('manage', compact('books','genre'));
    }
    //buat show books di home page
    public function booksHome(){
        // $books = Book::all();
        $books = Book::paginate(5);
        return view('home', compact('books'));
    }

    public function search(Request $request){
        $search = $request->search;

        $books = Book::where('title','LIKE','%'.$search.'%')
                       ->paginate(5)
                       ->appends(['search'=>$search]);
        return view('home', compact('books'));
    }

    public function showBookDetail($id){
        $book = Book::find($id);
        $genres = Genre::all();
        return view('detail',compact('book', 'genres'));
    }

    public function deleteBook($id){
        $book = Book::find($id);
        $book->delete();
        return redirect()->back();
    }

    public function cart(){
        return view('cart');
    }

    public function addtoCart(Request $request, $id){
        $book = Book::find($id);

        $cart = session()->get('cart');

        $cart[$id]=[
            "title"=>$book->title,
            "quantity"=>$request->quantity,
            "author"=>$book->author,
            "price"=>$book->price
        ];

        session()->put('cart',$cart);

        return redirect()->back()->with('sucess','Book added to cart successfully!');
    }
}
