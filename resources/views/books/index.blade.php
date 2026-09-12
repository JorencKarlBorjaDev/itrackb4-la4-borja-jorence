@extends('layouts.app')
@section('title', 'Books')
@section('content')

    <div class="card">
        <div class="card-body">
            <h2>Books List</h2>
            <h1 class="mb-3">My Book List</h1>
            <p>Prepared by: Jorence Karl Borja</p>

            <table class="table table-striped table-bordered">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Year</th>
                    <th>Category</th>
                </tr>
                @forelse ($books as $book)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <a href="{{ route('books.show', ['book' => $book['id']]) }}">
                                {{ $book['title'] }}
                            </a>
                        </td>
                        <td>{{ $book['author'] }}</td>
                        <td>{{ $book['year'] }}</td>
                        <td>
                            @if ($book['year'] >= 2000)
                                <span class="badge text-bg-primary">
                                    Modern
                                </span>
                            @else
                                <span class="badge text-bg-secondary">
                                    Classic
                                </span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">
                            No books are currently available.
                        </td>
                    </tr>
                @endforelse
            </table>
        </div>
    </div>
@endsection