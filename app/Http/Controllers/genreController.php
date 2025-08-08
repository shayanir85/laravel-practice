<?php
namespace App\Http\Controllers;

use App\Http\Requests\GenreRequest;
use App\Models\Genre; // Note: Capitalized model name
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = genre::all()->sortBy('name');
        return view('genres.index', compact('genres'));
    }

    public function create()
    {
        return view('genres.create');
    }
    
    public function store(GenreRequest $request)
    {
        $name = new genre($request->all());
        $name->save();
        return redirect('genres/create')->with('success', 'successfully added the genre');

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
