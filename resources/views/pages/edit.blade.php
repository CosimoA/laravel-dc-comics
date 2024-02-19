@extends('layouts.main-layout')
@section('head-title')
    <title>Edit Comic [{{ $comic->id }}]</title>
@endsection

@section('content')

    <form action="{{ route('comic.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Utilizzato per indicare che si sta effettuando un'operazione di aggiornamento -->
        
        <label for="title">Title:</label>
        <!-- Aggiunto il valore corrente del titolo -->
        <input type="text" id="title" name="title" value="{{ $comic->title }}"><br><br> 

        <label for="price">Price:</label>
        <!-- Aggiunto il valore corrente del prezzo -->
        <input type="text" id="price" name="price" value="{{ $comic->price }}"><br><br> 

        <label for="description">Description:</label><br>
        <!-- Aggiunto il valore corrente della descrizione -->
        <textarea id="description" name="description">{{ $comic->description }}</textarea><br><br> 

        <button type="submit">Update Comic</button>
    </form>

@endsection