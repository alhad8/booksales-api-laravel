<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Genre</title>
</head>
<body>
    <h1>Daftar Genre</h1>
    
    <a href="/">Home</a> | 
    <a href="/books">Daftar Buku</a> | 
    <a href="/authors">Daftar Author</a>
    
    <br><br>
    
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Genre</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($genres as $genre)
            <tr>
                <td>{{ $genre->id }}</td>
                <td>{{ $genre->name }}</td>
                <td>{{ $genre->description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>