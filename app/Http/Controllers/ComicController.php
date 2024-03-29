<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Comic::all();
        return view('comics.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => "required|min:4",
            'description' => "required|min:20",
            /* 'thumb' => "required|", */
            'price' => "required|numeric|max:10",
            'series' => "required|",
            'sale_date' => "required|date",
            /* 'type' => "required|", */
        ], [
            'title.required' => 'Il titolo è obbligatorio',
            'description.required' => 'La descrizione è obbligatoria',
            'price.required' => 'Il prezzo è obbligatorio',
            'series.required' => 'La serie è obbligatoria',
            'sale_date.required' => 'La data è obbligatoria',
            'title.min' => 'Il titolo deve essere di almeno 4 caratteri',
            'description.min' => 'La descrizione deve essere di almeno 20 caratteri',
            'price.numeric' => 'Il prezzo deve avere un valore numerico',
            'price.max' => 'Il prezzo può contenere massimo 10 cifre',
            'sale_date.date' => 'La data deve essere una data XXXX-XX-XX',
        ]);

        $data = $request->all();

        $Comic = new Comic();
        $Comic->title = $data['title'];
        $Comic->description = $data['description'];
        $Comic->thumb = $data['thumb'];
        $Comic->price = $data['price'];
        $Comic->series = $data['series'];
        $Comic->sale_date = $data['sale_date'];
        $Comic->type = $data['type'];
        $Comic->save();


        return redirect()->route('comics.show', $Comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title' => "required|min:4",
            'description' => "required|min:20",
            /* 'thumb' => "required|", */
            'price' => "required|numeric|max:10",
            'series' => "required|",
            'sale_date' => "required|date",
            /* 'type' => "required|", */
        ], [
            'title.required' => 'Il titolo è obbligatorio',
            'description.required' => 'La descrizione è obbligatoria',
            'price.required' => 'Il prezzo è obbligatorio',
            'series.required' => 'La serie è obbligatoria',
            'sale_date.required' => 'La data è obbligatoria',
            'title.min' => 'Il titolo deve essere di almeno 4 caratteri',
            'description.min' => 'La descrizione deve essere di almeno 20 caratteri',
            'price.numeric' => 'Il prezzo deve avere un valore numerico',
            'price.max' => 'Il prezzo può contenere massimo 10 cifre',
            'sale_date.date' => 'La data deve essere una data XXXX-XX-XX',
        ]);

        $data = $request->all();
        $comic->update($data);

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
