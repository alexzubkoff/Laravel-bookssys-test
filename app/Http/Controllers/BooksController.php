<?php
/**
 * Created by PhpStorm.
 * User: alexz
 * Date: 01.03.2018
 * Time: 17:07
 */

namespace bookssys\Http\Controllers;
use DB;
use bookssys\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $books = Books::all();
        return view('books',['books'=>$books]);
    }

    public function create(Request $request)
    {
        $book = new Books;
        $book->name = $request->name;
        $book->author = $request->author;
        $book->date = $request->date;
        $book->save();
        return redirect('/');
    }

    public function update(Request $request,$id)
    {
        if ($request->method()=="GET"){
            $book = Books::find($id);
            return view('books_update_view',['book'=>$book]);
        }else{
            $book = Books::find($id);
            $book->name = $request->name;
            $book->author = $request->author;
            $book->date = $request->date;
            $book->save();
            return redirect('/');
        }
    }

    public function delete($id)
    {
        $book = Books::find($id);
        $book->delete();
        return redirect('/');
    }

    public function showbook($id)
    {
        $book = Books::find($id);
        return view('book',['book'=>$book]);
    }


    public function searchbookname($request)
    {
        $books = Books::where('name', 'LIKE', $request . '%')->get();
        return view('bookfind',['books'=>$books]);
    }

    public function searchauthorname($request)
    {
        $books = Books::where('author', 'LIKE', $request . '%')->get();
        return view('bookfind',['books'=>$books]);
    }

    public function searchpublicationdate($request)
    {
        $books = Books::where('date', '=', $request)->orderBy('author')->get();
        return view('bookfind',['books'=>$books]);
    }

}