<html>
<head>
    <title>Update</title>
</head>
<body>
<a href="/">Home</a></h3>
<h3>Update book</h3>
<form action="/books/update/<?php echo $book['id'];?>" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
    <input type="hidden" name="id" value="<?php echo $book['id'] ?>">
    <table>
        <tr>
            <td>Name</td>

            <td><input type="text" name="name" value="<?php echo $book['name'];?>" required/></td>
        </tr>
        <tr>
            <td>Author</td>
            <td><input type="text" name="author"value="<?php echo $book['author'];?>" required/></td>
        </tr>
        <tr>
            <td>Date</td>
            <td><input type="date" name="date" value="<?php echo $book['date'];?>" required/></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="Ok" /></td>
        </tr>
    </table>
</form>
</body>
</html>