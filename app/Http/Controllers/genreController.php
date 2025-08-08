<?php

namespace App\Http\Controllers;

use App\Http\Requests\GenreRequest;
use App\Models\genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = genre::all()->sortBy('name');
        return view('genre.index.index', compact('genres'));
    }

    public function create(GenreRequest $request)
    {
        dd('create');
        $name = new genre($request->all());
        $name->save();
        return redirect('genre.create.create')->with('success', 'successfully added the genre');
    }

    public function store()
    {

    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
