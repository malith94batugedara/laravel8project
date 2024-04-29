<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookFormRequest;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookFormRequest $request)
    {
        $data = $request->validated();

        $book = new Book;

        $book->book_name = $data['bookname'];
        $book->book_author = $data['bookauth'];
        $book->book_type = $data['booktype'];
        $book->book_price = $data['bookprice'];

        $book->save();

        return redirect(route('book.index'))->with('status','Book Added Successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($book_id)
    {
        $book = Book::find($book_id);
        return view('books.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookFormRequest $request, $book_id)
    {
        $data = $request->validated();

        $book = Book::find($book_id);

        $book->book_name = $data['bookname'];
        $book->book_author = $data['bookauth'];
        $book->book_type = $data['booktype'];
        $book->book_price = $data['bookprice'];

        $book->update();

        return redirect(route('book.index'))->with('status','Book Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($book_id)
    {
        $book = Book::find($book_id);

        $book->delete();

        return redirect(route('book.index'))->with('status','Book Deleted Successfully!');
    }
}
