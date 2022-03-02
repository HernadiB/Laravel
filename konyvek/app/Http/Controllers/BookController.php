<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Models\Book;
use Database\Seeders\BookSeeder;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
//        return Book::all();

        $orderby = $request->input('orderBy');
        $order = $request->input('order');
        if (!is_null($orderby) && !is_null($order))
        {
            if ((
                $orderby == 'isbn' ||
                $orderby == 'title' ||
                $orderby == "title_original" ||
                $orderby == "author" ||
                $orderby == "episode" ||
                $orderby == "pages" ||
                $orderby == "publisher" ||
                $orderby == "translator" ||
                $orderby == "category") && ($order == 'asc' || $order == 'desc'))
            {
                return DB::table('books')->orderBy($orderby, $order)->get();
            }
        }
        return Book::all();
    }

    public function store(StoreBookRequest $book)
    {
        return Book::create($book->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return $book;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $data = $request->validate([
            "isbn" => ["required", "string", "size:13"],
            "title" => ["required", "string", "min:1", "max:50"],
            "title_original" => ["nullable", "string", "max:50"],
            "author" => ["nullable", "string", "max:30"],
            "episode" => ["nullable", "integer", "min:1", "max:254"],
            "series" => ["nullable", "string", "max:30"],
            "pages" => ["required", "integer", "min:10", "max:254"],
            "publisher" => ["required", "string", "min:1", "max:30"],
            "translator" => ["nullable", "integer", "max:30"],
            "category" => ["required", "string", "min:1", "max:20"]
        ]);
        $book->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
    }
}
