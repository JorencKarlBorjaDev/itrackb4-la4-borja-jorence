<nav class="nav mb-3">
    <a class="nav-link" href="{{ route('books.index') }}">
        Books
    </a>

    <a class="nav-link" href="{{ route('books.show', ['id' => 1]) }}">
        Book #1
    </a>
</nav>