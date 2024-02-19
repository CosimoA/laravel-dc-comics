@extends('layouts.main-layout')
@section('head-title')
    <title>Homepage</title>
@endsection

@section('content')

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
                </li>
            @endforeach
        </ul>
    </div>

@endsection
