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
    <h2>Search</h2>
        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
        <table>
            <tr>
                <td>Name:</td>
               <td> <div class="ui-widget">
                       <input id="bookname" type="text" name="bookname"  />
                       <span class="loading"></span>
                   </div>
               </td>
                <td>Author:</td>
                <td><div class="ui-widget">
                    <input id="authorname" type="text"  name="authorname" />
                    </div>
                </td>
                <td>Date published:</td>
                <td><div class="ui-widget">
                    <input id="publicationdate" type="date"  name="publicationdate" />
                    </div>
                </td>
                <td>
                    <button id="submit">Search</button></td>
                </td>

            </tr>
        </table>
    <hr>
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
                            <td><a href="/books/showbook/{{ $book->id }}">{{ $book->id }}</a></td>
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
    <hr>
        <h3>Add new book</h3>
        <form action="/books/create" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name"  required/></td>
                    <div></div>
                </tr>
                <tr>
                    <td>Author:</td>
                    <td><input type="text"  name="author" required/></td>
                </tr>
                <tr>
                    <td>Date published:</td>
                    <td><input type="date"  name="date" required/></td>
                </tr>
                <tr>
                    <td colspan="2" align="center" ><input type="submit" value="Add" /></td>
                </tr>
            </table>
        </form>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>
    <script type="text/javascript">
        $( document ).ready(function() {
            var url = '/';
            $("#submit").on("click",function (event) {
               if ($('#bookname').val()!==''){
                   url = 'book/'+$('#bookname').val();
               }else if ($('#authorname').val()!==''){
                   url = 'author/'+$('#authorname').val();
               }else if($('#publicationdate').val()!==''){
                   url = 'bookdate/'+$('#publicationdate').val();
               }else {
                   url = '/';
               }
                    window.location.href = url;
                    $('#bookname').val('');
                    $('#authorname').val('');
                    $('#publicationdate').val('');
            });

        });

    </script>
    </body>
</html>
