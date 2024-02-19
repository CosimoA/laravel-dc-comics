@extends('layouts.main-layout')
@section('head-title')
    <title>Edit Comic [{{ $comic->id }}]</title>
@endsection

@section('content')

    @if ($errors->any())
        <div class="error-message">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comic.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT') 
        
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $comic->title }}"><br><br> 

        <label for="price">Price:</label>
        <input type="text" id="price" name="price" value="{{ $comic->price }}"><br><br> 

        <label for="description">Description:</label><br>
        <textarea id="description" name="description">{{ $comic->description }}</textarea><br><br> 

        <button type="submit">Update Comic</button>
    </form>

@endsection