<?php

namespace App\Http\Controllers;

use App\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(Request $request)
    {
        $items = Books::all();
        return view('books.index', ['items' => $items]);
    }

    // public function post(Request $request)
    // {
    //     $items = DB::select('select * from book');
    //     return view('books.index', ['items' => $items]);
    // }

    public function add(Request $request)
    {
        return view('books.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Books::$rules);
        $books = new Books;
        $form = $request->all();
        unset($form['_token']);
        $books->fill($form)->save();
        return redirect('/books');
    }

    public function edit(Request $request)
    {
        $books = Books::find('id', $request->id);
        return view('books.edit', ['form' => $books]);
    }

    public function update(Request $request)
    {
        $books = Books::find($request->id);
        $form=$request->all();
        unset($form['_token']);
        $books->fill($form)->save();
        return redirect('/books');
    }

    public function del(Request $request)
    {
        $books = Books::find($request->id);
        return view('books.del', ['form' => $books]);
    }

    public function remove(Request $request)
    {
        Books::find($request->id)->delete();
        return redirect('/books');
    }
}