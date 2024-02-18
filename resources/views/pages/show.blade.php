@extends('layouts.main-layout')
@section('head-title')
    <title>Homepage</title>
@endsection

@section('content')

    <div class="comic-details">
        <h1 class="comic-title">Comic Details</h1>
        <table class="comic-table">
            <tr>
                <th>Title</th>
                <td>{{ $comic->title }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ $comic->price }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ $comic->description }}</td>
            </tr>
        </table>
    </div>

@endsection