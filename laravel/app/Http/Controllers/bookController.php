<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Book;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Yaml\Tests\B;

class bookController extends Controller
{
    public function index(){

        $book = Book::all();

        return view('myAllCrud/books.index', ['book'=>$book]);
    }

    public function create(){
        return view('myAllCrud/books.create');
    }

    public function store(Request $request)
    {
        $allData=$request->all();

        //return $allData;
//        $validation = Validator::

    $book = new Book();
        $book->title = $request->get('title');
        $book->authority = $request->get('authority');
        $book->save();

        return redirect('/book_create');

    }

    public function edit($id)
    {
        $data = Book::find($id);
        return view('myAllCrud.books.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {


        $data = Book::find($id);

        $data1 = array();

        $data1['title'] = $request->get('title');
        $data1['authority'] = $request->get('authority');


        $data->update($data1);


    }
}
