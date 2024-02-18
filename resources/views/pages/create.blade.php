@extends('layouts.main-layout')
@section('head-title')
    <title>Create</title>
@endsection

@section('content')

    <form action="{{ route('comic.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title"><br><br>

        <label for="price">Price:</label>
        <input type="text" id="price" name="price"><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description"></textarea><br><br>

        <button type="submit">Create Comic</button>
    </form>

@endsection