<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    
    <a href="/">Home</a> | 
    <a href="/authors">Daftar Author</a> | 
    <a href="/genres">Daftar Genre</a>
    
    <br><br>
    
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Cover</th>
                <th>Genre</th>
                <th>Author</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->description }}</td>
                <td>Rp {{ number_format($book->price, 0, ',', '.') }}</td>
                <td>{{ $book->stock }}</td>
                <td>{{ $book->cover_photo }}</td>
                <td>{{ $book->genre->name }}</td>
                <td>{{ $book->author->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>