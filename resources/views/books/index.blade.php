<!DOCTYPE html>
<html>
<head>
    <title>My Book List</title>
</head>
<body>
    <h1>My Book List</h1>
    <p>Prepared by: Jorence Karl Borja</p>
 
    <table border="1" cellpadding="8">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Year</th>
        </tr>
 
    @foreach ($books as $book)

        <p>
          <a href="{{ route('books.show', ['id' => $book['id']]) }}"> {{ $book['title'] }}</a>
        </p>

    @endforeach
    </table>
</body>
</html>
