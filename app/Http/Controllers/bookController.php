<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Books = book::all()->sortBy('name');
        return view('Books.index' , compact('Books')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('Books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request)
    {
        $newBook = new book($request -> all() );
        $newBook-> save();
        return redirect('Books/create')->with('success','book adedd successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
