<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Books</title>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<body>
<a href="/">Home</a></h3>
<div class="flex-center position-ref full-height">

    <div class="content">
        <h2>
            Books
        </h2>
        <table border=1>
            <tr>
                <td><strong>ID</strong></td>
                <td><strong>Name</strong></td>
                <td><strong>Author</strong></td>
                <td><strong>Date published</strong></td>
                <td></td>
                <td></td>
            </tr>
            @foreach ($books as $book)
                <tr>
                    <td><a href="books/showbook/{{ $book->id }}">{{ $book->id }}</a></td>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->date }}</td>
                    <td><a href="books/update/{{$book->id}}">Update</a></td>
                    <td><a href="books/delete/{{$book->id}}">Delete</a></td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
</body>
</html>
