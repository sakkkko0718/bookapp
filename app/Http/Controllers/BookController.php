<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::table('book')->get();
        return view('books.index', ['items' => $items]);
    }

    public function post(Request $request)
    {
        $items = DB::select('select * from book');
        return view('books.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('books.add');
    }

    public function create(Request $request)
    {
        $param = [
            'title' => $request->title,
            'author' => $request->author,
        ];
        DB::table('book')->insert($param);
        return redirect('/books');
    }

    public function edit(Request $request)
    {
        $item = DB::table('book')->where('id', $request->id)->first();
        return view('books.edit', ['form' => $item]);
    }

    public function update(Request $request)
    {
        $param = [
            'title' => $request->title,
            'author' => $request->author,
        ];
        DB::table('book')->where('id', $request->id)->update($param);
        return redirect('/books');
    }

    public function del(Request $request)
    {
        $param = [
            'id' => $request->id
        ];
        $item = DB::table('book')->where('id', $request->id)->first();
        return view('books.del', ['form' => $item]);
    }

    public function remove(Request $request)
    {
        DB::table('book')->where('id', $request->id)->delete();
        return redirect('/books');
    }

    public function search(Request $request)
    {
        $title = $request->input('title');
        $items = DB::table('book')->where('title', 'like', '%' . $title . '%')->get();
        // $items = DB::table('book')->where('title',$request->input)->get();
        return view('books.search',['items' => $items]);
    }

    // public function scopeTitle($query,$str){
    //     return $query->where('title',$str);
    // }
}
