@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main class="container">
    <h1>Books</h1>
    <ul>
        @foreach ($books as $book)
            <li>
                <a href="{{ route('books.show', $book->id) }}">{{ $book->title }}</a>
            </li>
        @endforeach
    </ul>
</main>

@endsection
