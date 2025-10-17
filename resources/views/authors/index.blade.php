<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Author</title>
</head>
<body>
    <h1>Daftar Author</h1>
    
    <a href="/">Home</a> | 
    <a href="/books">Daftar Buku</a> | 
    <a href="/genres">Daftar Genre</a>
    
    <br><br>
    
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Photo</th>
                <th>Bio</th>
            </tr>
        </thead>
        <tbody>
            @foreach($authors as $author)
            <tr>
                <td>{{ $author->id }}</td>
                <td>{{ $author->name }}</td>
                <td>{{ $author->photo }}</td>
                <td>{{ $author->bio }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>