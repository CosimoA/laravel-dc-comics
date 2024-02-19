@extends('layouts.main-layout')
@section('head-title')
    <title>Homepage</title>
@endsection

@section('content')

    @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    <div class="comics-container">
        <h1 class="comics-title">COMICS:</h1>
        <a href="{{ route('comic.create') }}">CREATE</a>
        <ul class="comics-list">
            @foreach ($comics as $comic)
                <li class="comic-item">
                    <a href="{{ route('comic.show', $comic->id) }}" class="comic-link">
                        {{ $comic->title }}
                    </a>
                    <a href="{{ route('comic.edit', $comic->id) }}" class="btn btn-secondary">
                        Edit
                    </a>
                    <form action="{{ route('comic.destroy', $comic->id) }}" method="POST" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>

@endsection
