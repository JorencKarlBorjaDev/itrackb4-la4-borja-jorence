<!DOCTYPE html>
<html>
<head>
    <title>Featured Book</title>
</head>
<body>

    <h1>Featured Book</h1>

    <p><strong>ID:</strong> {{ $book['id'] }}</p>

    <p><strong>Title:</strong> {{ $book['title'] }}</p>

    <p><strong>Author:</strong> {{ $book['author'] }}</p>

    <p><strong>Year:</strong> {{ $book['year'] }}</p>

    <p><strong>Genre:</strong> {{ $book['genre'] }}</p>

    <p><strong>Name:</strong> Jorence Karl Borja</p>

    <a href="/books">Back to Books</a>

</body>
</html>
