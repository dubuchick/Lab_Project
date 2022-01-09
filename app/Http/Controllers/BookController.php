<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function insertBook(Request $request){
        $rules = [
            'title'=>'required',
            'author'=>'required',
            'synopsis'=>'required',
            'price'=>'required|integer',
            'cover'=>'mimes:jpeg,jpg,png,gif|required|max:10000|image',
            'genre'=>'accepted'
        ];

        $book = new Book();
        $book->title = $request->title;
        $book->genreid = $request->genre;
        $book->author = $request->author;
        $book->synopsis = $request->synopsis;
        $book->price = $request->price;

        $file = $request->file('cover');
        //waktu skrng .jpg
        $imageName = time().".".$file->getClientOriginalExtension();
        Storage::putFileAs('public/images',$file,$imageName);

        $book->cover = 'images/'.$imageName;
        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return back()->withErrors($validator);
        }
        $book->save();

        //ke previous page
        return redirect()->back();
    }

    public function updateBook(Request $request, $id){
        $book = Book::find($id);
        $rules = [
            'title'=>'required',
            'author'=>'required',
            'synopsis'=>'required',
            'cover'=>'mimes:jpeg,jpg,png,gif|required|max:10000|image',
            'genreid'=>'accepted',
            'price'=>'required'
        ];
        $book->title = $request->title;
        $book->author = $request->author;
        $book->synopsis = $request->synopsis;
        $book->genreid = $request->genre;
        $book->price = $request->price;
        $file = $request->file('cover');
        if($file != null){
            $imageName = time().".".$file->getClientOriginalExtension();
            Storage::putFileAs('public/images',$file,$imageName);

            Storage::delete('public/'.$book->cover);
            $book->cover = 'images/'.$imageName;
        }
        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return back()->withErrors($validator);
        }
        $book->save();

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
        $user = User::all();
        $cart = session()->get('cart');

        $cart[$id]=[
            "title"=>$book->title,
            "quantity"=>$request->quantity,
            "author"=>$book->author,
            "price"=>$book->price
        ];

        session()->put('cart',$cart);

        return redirect()->back()->with('success','Book added to cart successfully!',compact('user'));
    }

    public function deleteCart(){
        session()->forget('cart');
        return redirect()->back();
    }

    public function checkout(Request $request){

        $cart = $request->session()->get('cart');

        dd($cart);



    }

    public function accessSessionData(Request $request) {
        if($request->session()->has('cart'))
            $cart = $request->session()->get('cart');
            dd($cart);

     }

}
