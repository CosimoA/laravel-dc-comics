<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use App\Http\Requests\CreateComicRequest;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic :: all();
        return view('pages.home', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateComicRequest $request)
    {

        $comic = new Comic();
        $comic->title = $request->title;
        $comic->price = $request->price;
        $comic->description = $request->description;
        $comic->save();

        // Redirect alla pagina di visualizzazione del nuovo fumetto
        return redirect()->route('comic.show', $comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        return view('pages.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);
        return view('pages.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validazione dei dati
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
        ]);

        // Recupera il fumetto dal database
        $comic = Comic::findOrFail($id);

        // Aggiornamento dei dati del fumetto
        $comic->title = $validatedData['title'];
        $comic->price = $validatedData['price'];
        $comic->description = $validatedData['description'];
        $comic->save();

        // Redirect alla pagina di visualizzazione del fumetto aggiornato
        return redirect()->route('comic.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::find($id);

        $comic->delete();

        return redirect()->route('comic.index')->with('success', 'Fumetto eliminato con successo.');
    }
}
